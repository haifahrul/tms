<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id_user
 * @property integer $no_user
 * @property integer $nip
 * @property string $username
 * @property string $password
 * @property string $salt_password
 * @property integer $id_akses
 * @property string $login_date
 *
 * The followings are the available model relations:
 * @property Calibration[] $calibrations
 * @property Akses $idAkses
 */
class User extends CActiveRecord
{
	public $password2;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip, username, password, password2,  id_akses', 'required', 'message' => '{attribute} Tidak boleh kosong'),
			array('username', 'length', 'min'=>4, 'max'=>30),
			array('password, salt_password', 'length', 'max'=>114),
			array('password, salt_password', 'length', 'min'=>4, 'max'=>114),
			array('password2', 'length', 'min' => 4, 'max' => 114),
            array('password', 'compare', 'compareAttribute' => 'password2'),
            array('id_user, no_user, nip', 'numerical', 'integerOnly'=>true),
			array('login_date', 'safe'),
			array('login_date', 'default', 'value' => date('Y-m-d H:i:s'), 'on' => 'insert'),
            array('login_date', 'default', 'value' => date('Y-m-d H:i:s'), 'on' => 'update', 'setOnEmpty' => FALSE),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, no_user, nip, username, password, salt_password, id_akses, login_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'calibrations' => array(self::HAS_MANY, 'Calibration', 'id_user'),
			'idAkses' => array(self::BELONGS_TO, 'Akses', 'id_akses'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'no_user' => 'Nomor',
			'nip' => 'NIP',
			'username' => 'Username',
			'password' => 'Password',
			'password2' => 'Password Confirmation',
			'salt_password' => 'Salt Password',
			'id_akses' => 'Hak Akses',
			'login_date' => 'Login Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->with=array('idAkses');

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('no_user',$this->no_user);
		$criteria->compare('nip',$this->nip);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salt_password',$this->salt_password,true);
		$criteria->compare('idAkses.id_akses',$this->id_akses);
		$criteria->compare('login_date',$this->login_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize' => 10,  //jumlah Pagging
			),
			'sort' => array('defaultOrder'=> 'id_user ASC')
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function validatePassword($password) {
        return $this->hashPassword($password, $this->salt_password) === $this->password;
    }

    public function hashPassword($password, $salt) {
        return md5($salt . $password);
    }

    public function beforeSave() {
    	parent::beforeSave();

    	if($this->isNewRecord) {
    		$criteria=new CDbCriteria; 
    		$criteria->select = 'no_user';
    		$criteria->limit = 1;
    		$criteria->order='no_user DESC';
    		$last = $this->find($criteria);
    		if($last) {
	    		$newID = (int)substr($last->no_user, 0) + 1;
    			//$newID = ''.$newID;
    		} 
    		else {
	    		$newID = '1';
    		}
    		$this->no_user = $newID;
    	}

        $isinya = $this->generateSalt();
        $dua = $this->password;
        $this->salt_password = $isinya;
        $this->password = $this->hashPassword($dua, $isinya);

        return TRUE;
    }

    public function generateSalt() {
        return uniqid('', true);
    }
}

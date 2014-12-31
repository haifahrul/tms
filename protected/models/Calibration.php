<?php

/**
 * This is the model class for table "calibration".
 *
 * The followings are the available columns in table 'calibration':
 * @property integer $id_calibration
 * @property integer $id_torque
 * @property string $last_calibration
 * @property integer $lapse
 * @property string $next_calibration
 * @property integer $id_status
 * @property integer $id_user
 *
 * The followings are the available model relations:
 * @property TorqueBmw $idTorque
 * @property User $idUser
 * @property Status $idStatus
 */
class Calibration extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'calibration';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_calibration, id_torque, id_status, id_user', 'required'),
			array('id_calibration, id_torque, lapse, id_status, id_user', 'numerical', 'integerOnly'=>true),
			array('last_calibration, next_calibration', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_calibration, id_torque, last_calibration, lapse, next_calibration, id_status, id_user', 'safe', 'on'=>'search'),
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
			/*'idTorque' => array(self::HAS_MANY, 'TorqueBmw', 'id_torque'),
			'idUser' => array(self::HAS_MANY, 'User', 'id_user'),
			'idStatus' => array(self::HAS_MANY, 'Status', 'id_status'),*/
			//golongan' => array(self::BELONGS_TO, 'Golongan', '', 'on' => 'golongan.IdGolongan = pegawai.GolonganId')
			//'idTorque' => array(self::BELONGS_TO, 'TorqueBmw', 'id_torque'),
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
			'idStatus' => array(self::BELONGS_TO, 'Status', 'id_status'),
			'idTorque' => array(self::MANY, 'TorqueBmw', 'id_torque'),
			//'idTorque' => array(self::BELONGS_TO, 'TorqueBmw', 'id_torque', 'on' => 'idTorque.id_torque = Calibration.id_torque'),
			//'idUser' => array(self::BELONGS_TO, 'User', '', 'on' => 'idUser.id_user = Calibration.id_user'),
			//'idStatus' => array(self::BELONGS_TO, 'Status', '', 'on' => 'idStatus.id_status = Calibration.id_status'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_calibration' => 'Id Calibration',
			'id_torque' => 'Id Torque',
			'last_calibration' => 'Last Calibration',
			'lapse' => 'Interval',
			'next_calibration' => 'Next Calibration',
			'id_status' => 'Status',
			'id_user' => 'User',
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
		$criteria->with = array('idTorque','idStatus','idUser');
		//$criteria->together = true;

       	//$criteria->compare('calibration.TorqueBmw', $id_torque);
		$criteria->compare('id_calibration',$this->id_calibration);
		$criteria->compare('idTorque.id_torque',$this->id_torque);
		$criteria->compare('last_calibration',$this->last_calibration,true);
		$criteria->compare('lapse',$this->lapse);
		$criteria->compare('next_calibration',$this->next_calibration,true);
		$criteria->compare('idStatus.id_status',$this->id_status);
		$criteria->compare('idUser.id_user',$this->id_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
				'pageSize' => '10',
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Calibration the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}

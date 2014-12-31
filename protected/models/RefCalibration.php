<?php

/**
 * This is the model class for table "ref_calibration".
 *
 * The followings are the available columns in table 'ref_calibration':
 * @property integer $id_ref_calibration
 * @property string $nm_ref_calibration
 *
 * The followings are the available model relations:
 * @property TorqueBmw[] $torqueBmws
 */
class RefCalibration extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ref_calibration';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ref_calibration', 'required'),
			array('id_ref_calibration', 'numerical', 'integerOnly'=>true),
			array('nm_ref_calibration', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ref_calibration, nm_ref_calibration', 'safe', 'on'=>'search'),
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
			'torqueBmws' => array(self::HAS_MANY, 'TorqueBmw', 'id_ref_calibration'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ref_calibration' => 'Id Ref Calibration',
			'nm_ref_calibration' => 'Nm Ref Calibration',
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

		$criteria->compare('id_ref_calibration',$this->id_ref_calibration);
		$criteria->compare('nm_ref_calibration',$this->nm_ref_calibration,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RefCalibration the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

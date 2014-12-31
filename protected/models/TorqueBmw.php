<?php

/**
 * This is the model class for table "torque_bmw".
 *
 * The followings are the available columns in table 'torque_bmw':
 * @property integer $id_torque
 * @property integer $nomor
 * @property integer $no_tool
 * @property string $x1
 * @property string $f10
 * @property string $f25
 * @property string $f30
 * @property integer $id_pos
 * @property string $process_name
 * @property integer $standard
 * @property string $grade
 * @property integer $minimal
 * @property integer $maximal
 * @property string $assy_page
 * @property integer $id_user
 * @property integer $id_tool
 * @property integer $id_ref_calibration
 * @property string $create_by
 * @property string $create_time
 * @property string $update_by
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Calibration[] $calibrations
 * @property Tool $idTool
 * @property Pos $idPos
 * @property User $idUser
 * @property RefCalibration $idRefCalibration
 */
class TorqueBmw extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'torque_bmw';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_tool, id_pos, process_name, standard, grade, minimal, maximal, assy_page, id_tool, id_ref_calibration', 'required'), //id_user, create_time, update_time
			array('nomor, no_tool, id_pos, standard, minimal, maximal, id_user, id_tool, id_ref_calibration', 'numerical', 'integerOnly'=>true),
			array('x1, f10, f25, f30, grade', 'length', 'max'=>11),
			array('process_name, assy_page, create_by, update_by', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_torque, nomor, no_tool, x1, f10, f25, f30, id_pos, process_name, standard, grade, minimal, maximal, assy_page, id_user, id_tool, id_ref_calibration, create_by, create_time, update_by, update_time', 'safe', 'on'=>'search'),
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
			'calibrations' => array(self::HAS_MANY, 'Calibration', 'id_torque'),
			'idTool' => array(self::BELONGS_TO, 'Tool', 'id_tool'),
			'idPos' => array(self::BELONGS_TO, 'Pos', 'id_pos'),
			'idRefCalibration' => array(self::BELONGS_TO, 'RefCalibration', 'id_ref_calibration'),
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_torque' => 'Id Torque',
			'nomor' => 'No.',
			'no_tool' => 'No Tool',
			'x1' => 'X1',
			'f10' => 'F10',
			'f25' => 'F25',
			'f30' => 'F30',
			'id_pos' => 'Pos',
			'process_name' => 'Process Name',
			'standard' => 'Standard',
			'grade' => 'Grade',
			'minimal' => 'Minimal',
			'maximal' => 'Maximal',
			'assy_page' => 'Assy Page',
			'id_user' => 'User',
			'id_tool' => 'Tool',
			'id_ref_calibration' => 'Ref Calibration',
			'create_by' => 'Create By',
			'create_time' => 'Create Time',
			'update_by' => 'Update By',
			'update_time' => 'Update Time',			
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
		$criteria->with=array('idPos','idTool','idRefCalibration','idUser');

		$criteria->compare('id_torque',$this->id_torque);
		$criteria->compare('nomor',$this->nomor);
		$criteria->compare('no_tool',$this->no_tool);
		$criteria->compare('x1',$this->x1,true);
		$criteria->compare('f10',$this->f10,true);
		$criteria->compare('f25',$this->f25,true);
		$criteria->compare('f30',$this->f30,true);
		$criteria->compare('idPos.id_pos',$this->id_pos);
		$criteria->compare('process_name',$this->process_name,true);
		$criteria->compare('standard',$this->standard);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('minimal',$this->minimal);
		$criteria->compare('maximal',$this->maximal);
		$criteria->compare('assy_page',$this->assy_page,true);
		//$criteria->compare('id_user',$this->assy_page,true);
		$criteria->compare('idTool.id_tool',$this->id_tool);
		$criteria->compare('idRefCalibration.id_ref_calibration',$this->id_ref_calibration);
		$criteria->compare('idUser.username',$this->create_by,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('idUser.username',$this->update_by,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize' => 5),
			'sort'=>array('defaultOrder'=>'nomor ASC'),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TorqueBmw the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /*protected function afterFind() 
	{
        parent::afterFind();

	}*/
    
	protected function beforeSave() 
	{
   		if(parent::beforeSave()) {
   			if($this->isNewRecord) {

    			$criteria=new CDbCriteria; 
	    		$criteria->select = 'nomor';
    			$criteria->limit = 1;
    			$criteria->order='nomor DESC';
    			$last = $this->find($criteria);
    			if($last) {
		    		$newID = (int)substr($last->nomor, 0) + 1;
    			} 
    			else {
	    			$newID = '1';
    			}
    			$this->nomor = $newID;
				
    			$this->create_by = $this->update_by = $this->id_user = Yii::app()->user->getId();
    			$this->create_time = $this->update_time = Yii::app()->Date->now();
    		}
    		else {    			
    			$this->update_time = Yii::app()->Date->now();
    			$this->update_by = $this->id_user = Yii::app()->user->getId();    		
    		}
    		return true;
        }
        else
        {
            return false;
        }
	}

	/*public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'create_time',
				'updateAttribute' => 'update_time',
			),
		);		
	}*/

}
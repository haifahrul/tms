<?php
 
class EActiveRecord extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
     
    public function behaviors()
    {
        return array(
            'datetimeI18NBehavior'=>array(
                'class'=>'application.extensions.DateTimeI18NBehavior'
            ),
        );
    }
}
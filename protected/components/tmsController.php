<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class tmsController extends Controller {

    // fungsi untuk membuat tanggal 
    public function createDatePicker($model, $attribute) {
        $m = get_class($model);
        $t = $m . '[' . $attribute . ']'; //ingat id dan name dari form ternyata formatnya dikasih model[nama_atribute]
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name' => $t,
            'model' => $model,
            'language' => 'en',
            'value' => $model->$attribute,
            //'themeUrl' => Yii::app()->baseUrl . '/js/jquery-ui-themes-1.8',
            'options' => array(
                'showAnim' => 'clip',
                'dateFormat' => 'dd-mm-yy', // save to db format
                'changeYear' => true, // can change year
                'changeMonth' => true, // can change month
                'yearRange' => '1960:2020', // range of year
                'theme' => 'pool',
            ),
            'htmlOptions' => array('style' => 'height:20px;'),
        ));
        /*$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name' => $t,
            'model' => $model,
            'value' => $model->$attribute,
            'options' => array(
                'showAnim' => 'slide',
                'dateFormat' => 'dd-mm-yy', // save to db format
                'themeUrl' => Yii::app()->baseUrl . '/css/jui',
                'theme' => 'pool', //try 'bee' also to see the changes
                'cssFile' => array('jquery-ui.css' /* ,anotherfile.css, etc.css ),
            ),
            'htmlOptions' => array('style' => 'height:20px;'),
        )); */    
    }

    public function createExcel($fileName) {
        /*tentukan mime / format data
         *dalam hal ini excel
         *dan akan melakukan force download
         */
        header("Content-type: application/vnd.ms-excel; charset=utf-8");

        /*manentukan lampiran/file dan nama filenya*/
        header("Content-Disposition: attachment; filename=$fileName.xls");
    }

}
?>
<?php

class ExportController extends tmsController {

    //public $layout = "NULL";
    public $layout = '//layouts/column2';

    //fungsi untuk menampilkan data alat torque
    public function actionIndex() {
        $torque = TorqueBmw::model()->findAll();
        $this->render("index", array("dataTorque" => $torque,));
    }

    public function actionToExcel($filename) {
        //panggil function createExcel()
        $this->createExcel($filename);
        //select data alat torque
        $torque = TorqueBmw::model()->findAll();
        /* renderPartial ke file index
          dengan membawa data $pegawai
          dan akan ditampung oleh $dateExcel */
        $dataExcel = $this->renderPartial("laporan", array(
            "dataTorque" => $torque,
        ));
        echo $dataExcel;
    }

}

?>

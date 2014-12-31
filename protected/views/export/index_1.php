<?php
$this->breadcrumbs = array(
    'Cetak Laporan',
);
?>

<h4>Cetak Laporan</h4>


<table border="1", align="center">
    <caption>
        Laporan Bulanan <br>
        Periode <?php $ge=date("F Y")?>
        
    </caption>
    <tr>
        <th> nomor </th>
        <th> No. Tool </th>
        <th> X1 </th>
        <th> F10 </th>
        <th> F25 </th>
        <th> F30</th>
        <th> Pos </th>
        <th> Process Name </th>
        <th> Standard </th>
        <th> Grade </th>
        <th> Minimal </th>
        <th> Maksimal </th>
        <th> Assy Page </th>
        <th> Tool </th>
        <th> Ref. Calibration </th>
        <th> Tgl. Calibration </th>
        <th> Interval </th>
        <th> Next Calibration </th>
        <th> Status </th>
    </tr>
    <?php foreach ($dataTorque as $torque) : ?>
        <tr>
            <td><?php echo $torque->nomor ?></td>
            <td><?php echo $torque->no_tool ?></td>
            <td><?php echo $torque->x1 ?></td>
            <td><?php echo $torque->f10 ?></td>
            <td><?php echo $torque->f25 ?></td>
            <td><?php echo $torque->f30 ?></td>
            <td><?php echo $torque->idPos->nm_pos ?></td>
            <td><?php echo $torque->process_name ?></td>
            <td><?php echo $torque->std ?></td>
            <td><?php echo $torque->grade ?></td>
            <td><?php echo $torque->minimal ?></td>
            <td><?php echo $torque->maxsimal ?></td>
            <td><?php echo $torque->assy_page ?></td>
            <td><?php echo $torque->idTool->nm_tool ?></td>
            <td><?php echo $torque->idRefCalibration->nm_ref_calibration ?></td>
            <td><?php echo $torque->tgl_calibration ?></td>
            <td><?php echo $torque->lapse ?></td>
            <td><?php echo $torque->next_calibration ?></td>
            <td><?php echo $torque->idStatus->nm_status ?></td>
        </tr>
    <?php endforeach; ?>

    <tr>
        <td style="border:none;" colspan="3"> 
            Export to Excel :
            <a href="<?php echo $this->createUrl("export/toexcel/fileName/reportexcel"); ?>">Ms. Excel</a> 
        </td>
    </tr>
</table> 
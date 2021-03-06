<?php
include '../../conf.php';
include '../../model/conn.php';
$lib = new Library();
ob_start();
$data = $lib->preparepdf();
?>
<h1><img style="max-width:50px;" src="../../assets/foto/<?php echo $data->logo; ?>"> <?php echo $data->nama; ?></h1>
<h3><?php echo $data->alamat; ?></h3>
<?php
$html = ob_get_clean();
$dompdf = new Dompdf\Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream('laporan.pdf', array('Attachment' => 0));
?>
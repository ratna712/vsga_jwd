<?php
include('koneksi.php');
require('vendor/autoload.php');

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$query = mysqli_query($koneksi, "SELECT * from skema");
$html = '<center><h3>Daftar Skema</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama Skema</th>
 <th>Penjelasan</th>
 </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
 <td>" . $no . "</td>
 <td>" . $row['nama_skema'] . "</td>
 <td>" . $row['penjelasan'] . "</td>
 </tr>";
    $no++;
}
$html .= "</html>";

$dompdf->loadHtml($html);
//setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
//Rendering dari HTML ke PDF
$dompdf->render();
//melakukan output file pdf
$dompdf->stream('daftar.pdf');

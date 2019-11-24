<?php

$content = '
<style type="text/css">
.table { border-collapse: collapse; }
.table th { padding: 8px 5px; background-color:#f60; color:#fff; }
</style>';

$content .= '
<page>

    <div style="padding:4mm; border:1px solid;" align="center">
        <span style="font-size:25px;">Janitra Tour Organizer</span>
    </div>
    <div style="padding:20px 0 10px 0; font-size:15px;">
        Bukti Pembayaran
    </div>
    <table border="1px" class="table">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Kode Booking</th>
            <th class="text-center">Kode Booking</th>
            <th class="text-center">Kode Booking</th>
        </tr>
    </table>
</page>';
require_once $_SERVER['DOCUMENT_ROOT'].'/janitra/assets/html2pdf/html2pdf.class.php';

$html2pdf = new HTML2PDF('P', 'A4', 'en');
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content);
$html2pdf->Output('example.pdf');
?>
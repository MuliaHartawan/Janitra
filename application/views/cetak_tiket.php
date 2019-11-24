<?php

$content = '
<style type="text/css">
.table { border-collapse: collapse; width:100%; }
.table th { padding: 8px 5px; background-color:#f60; color:#fff; }
</style>';

$content .= '
<page>

    <div style="padding:4mm; border:1px solid;" align="center">
        <span style="font-size:25px;">Janitra Tour Organizer</span>
    </div>
    <div style="padding:20px 0 5px 0; font-size:20px;" align="center">
        Bukti Pembayaran
    </div>
    <table border="1px" class="table" align="center" style="padding:20px 0 10px 0; font-size:15px;">
        <tr>
            <th align="center">No</th>
            <th align="center">Item</th>
            <th align="center">Keterangan</th>
        </tr>';
        foreach ($row as $data) {
            $content .='
            <tr>
                <td align="center">1</td>
                <td>Kode Booking</td>
                <td align="center">'.$data['kode_booking'].'</td>
            </tr>
            <tr>
                <td align="center">2</td>
                <td>Nama Customer</td>
                <td align="center">'.$data['nama_customer'].'</td>
            </tr>
            <tr>
                <td align="center">3</td>
                <td>Nama Paket</td>
                <td align="center">'.$data['nama_paket'].'</td>
            </tr>
            <tr>
                <td align="center">4</td>
                <td>Destinasi</td>
                <td align="center">'.$data['kota'].'</td>
            </tr>
            <tr>
                <td align="center">5</td>
                <td>Jadwal Berangkat</td>
                <td align="center">'.date('d F Y', strtotime($data['jadwal_berangkat'])).'</td>
            </tr>
            <tr>
                <td align="center">6</td>
                <td>Jadwal Pulang</td>
                <td align="center">'.date('d F Y', strtotime($data['jadwal_pulang'])).'</td>
            </tr>
            <tr>
                <td align="center">7</td>
                <td>Banyak Penumpang</td>
                <td align="center">'.$data['banyak_penumpang'].'</td>
            </tr>
            <tr>
                <td align="center">8</td>
                <td>Biaya</td>
                <td align="center">'."Rp ".number_format($data['biaya'], 2, ",", ".").'</td>
            </tr>
            <tr>
                <td align="center">9</td>
                <td>Keterangan</td>
                <td align="center">'.$data['keterangan'].'</td>
            </tr>
            <tr>
                <td align="center">10</td>
                <td>Status</td>
                <td align="center">'.$data['status'].'</td>
            </tr>
            ';
        }
$content .= '
    </table>
</page>';
require_once $_SERVER['DOCUMENT_ROOT'].'/janitra/assets/html2pdf/html2pdf.class.php';

$html2pdf = new HTML2PDF('P', 'A4', 'en');
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content);
$html2pdf->Output('example.pdf');
?>
<div class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Pesanan Saya</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content">
                        <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Booking</th>
                                            <th>Nama Customer</th>
                                            <th>Nama Paket</th>
                                            <th>Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        foreach($row as $data){
                                            $no++;
                                            ?>
                                        <tr class="even pointer">
                                            <td class="a-center"><?php echo $no; ?></td>
                                            <td class="a-center"><?php echo $data->kode_booking; ?></td>
                                            <td class="a-center"><?php echo $data->nama_customer; ?></td>
                                            <td class="a-center"><?php echo $data->nama_paket; ?><br><a href="<?= site_url('my_booking/detail/'.$data->id_paket_wisata); ?>" class="btn btn-round btn-fill btn-success btn-sm"><i class="pe-7s-look"></i> Detail</a></td>
                                            <td class="a-center"><?php echo $data->status; ?></td>
                                            <td class="a-center text-center" style="<?php if($data->id_status == 3 || $data->id_status == 2) : ?> <?php echo 'display:none' ?> <?php endif; ?>">
                                                <a href="<?=site_url('my_booking/confirm/'.$data->id_booking);?>" class="btn btn-round btn-fill btn-primary btn-sm">Konfirmasi Pembayaran</a>
                                            </td>
                                            <td class="a-center text-center" style="<?php if($data->id_status == 3 || $data->id_status == 1) : ?> <?php echo 'display:none' ?> <?php endif; ?>">
                                                None
                                            </td>
                                            <td class="a-center text-center" style="<?php if($data->id_status == 1 || $data->id_status == 2) : ?> <?php echo 'display:none' ?> <?php endif; ?>">
                                                <a href="<?=site_url('my_booking/cetak/'.$data->id_booking);?>" class="btn btn-round btn-fill btn-primary btn-sm">Cetak Tiket</a>
                                                <!-- <button class="btn btn-round btn-fill btn-primary btn-sm" onclick="" target="_BLANK">Cetak Tiket</button> -->
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="<?php if(empty($row)) : ?> <?php echo 'display:none' ?> <?php endif; ?>">
            <div class="col-md-10 col-md-offset-1">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Langkah Selanjutnya</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content">
                        <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Yang Harus Dilakukan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">1.</td>
                                            <td class="a-center">Klik button Detail pada kolom nama paket untuk melihat detail paket yang akan didapatkan.</td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">2.</td>
                                            <td class="a-center">Pastikan data paket yang dipesan sudah sesuai dengan kesepakatan.</td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">3.</td>
                                            <td class="a-center">Jika data paket sudah sesuai dengan kesepakatan, silakan melakukan pembayaran ke rekening berikut :
                                                <br> BRI : 0068-01-060633-50-6 Atas Nama Mochammad Zidan Ardany
                                            </td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">4.</td>
                                            <td class="a-center">Lakukan transfer pembayaran sejumlah nominal yang disepakati (lunas).</td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">5.</td>
                                            <td class="a-center">Tidak diperbolehkan hanya membayar DP terlebih dahulu.</td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">6.</td>
                                            <td class="a-center">Batas akhir transfer pembayaran adalah H-7 sebelum keberangkatan Tour bersama Janitra.</td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">7.</td>
                                            <td class="a-center">Setelah melakukan transfer pembayaran, silakan melakukan konfirmasi pembayaran dengan mengklik button Konfirmasi Pembayaran pada kolom actions.</td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">8.</td>
                                            <td class="a-center">Upload bukti transfer dengan format jpg/jpeg/png dengan ukuran maksimal 2 MB.</td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">9.</td>
                                            <td class="a-center">Status akan berubah menjadi Menunggu Konfirmasi setelah melakukan konfirmasi pembayaran.</td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class="a-center" style="width:5%;">10.</td>
                                            <td class="a-center">Silakan menunggu admin melakukan konfirmasi. Setelah admin melakukan konfirmasi, Anda dapat mencetak tiket.</td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
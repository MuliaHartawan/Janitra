<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pembayaran</h1>
    <p class="mb-4"></p>

    <?php $this->view('messages'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Booking</th>
                            <th>Atas Nama</th>
                            <th>Nominal</th>
                            <th>Status</th>
                            <th>Bukti Pembayaran</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($row as $data) {
                            $no++;
                            ?>
                            <tr class="even pointer">
                                <td class="a-center" style="width:5%;"><?php echo $no; ?></td>
                                <td class="a-center"><?php echo $data->kode_booking; ?></td>
                                <td class="a-center"><?php echo $data->atas_nama; ?></td>
                                <td class="a-center"><?php echo "Rp ".number_format($data->nominal, 2, ",", "."); ?></td>
                                <td class="a-center"><?php echo $data->status; ?></td>
                                <td class="a-center">
                                    <?php if($data->gambar_bukti != null) { ?>
                                    <img src="<?= base_url('uploads/pembayaran/'.$data->gambar_bukti)?>" style="width:300px">
                                    <?php } ?>
                                </td>
                                <td class="a-center text-center">
                                <form action="<?=site_url('pembayaran/process')?>" method="post">
                                    <input type="hidden" name="id" value="<?=$data->id_booking?>">
                                    <button type="submit" name="edit_status" class="btn btn-primary btn-sm"><i class="fas fa-check"></i> Accept</button>
                                    <a href="<?=site_url('pembayaran/hapus/'.$data->id);?>" onclick="return confirm('Apakah Anda yakin menolak transaksi ini?')" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Decline</a>
                                </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
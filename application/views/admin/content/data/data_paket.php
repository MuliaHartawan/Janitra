<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Paket Wisata</h1>
    <a href="<?php echo base_url('data_paket/tambah_paket'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Create</a>
    <p class="mb-4"></p>

    <?php $this->view('messages'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="overflow-x:scroll;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Booking</th>
                            <th>Nama Paket</th>
                            <th>Nama Customer</th>
                            <th>Destinasi</th>
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
                                <td class="a-center"><?php echo $data->kode_paket; ?></td>
                                <td class="a-center"><?php echo $data->nama_paket; ?></td>
                                <td class="a-center"><?php echo $data->nama_customer; ?></td>
                                <td class="a-center"><?php echo $data->kota; ?></td>
                                <td class="a-center text-center">
                                    <a href="<?= site_url('data_paket/detail/'.$data->id_paket_wisata); ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Detail</a>
                                    <a href="<?=site_url('data_paket/edit/'.$data->id_paket_wisata);?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                    <a href="<?=site_url('data_paket/hapus/'.$data->id_paket_wisata);?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
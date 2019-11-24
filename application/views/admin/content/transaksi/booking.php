<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pesanan</h1>
    <a href="<?php echo base_url('booking/tambah'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Create</a>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Booking</th>
                            <th>Nama Customer</th>
                            <th>Nama Paket</th>
                            <th>Jadwal Berangkat</th>
                            <th>Jadwal Pulang</th>
                            <th>Banyak Penumpang</th>
                            <th>Biaya</th>
                            <th>Status</th>
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
                                <td class="a-center"><?php echo $no; ?></td>
                                <td class="a-center"><?php echo $data->kode_booking; ?></td>
                                <td class="a-center"><?php echo $data->nama_customer; ?></td>
                                <td class="a-center"><?php echo $data->nama_paket; ?> <a href="<?= site_url('booking/detail/'.$data->id_paket_wisata); ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Detail</a></td>
                                <td class="a-center"><?php echo date('d F Y', strtotime($data->jadwal_berangkat)); ?></td>
                                <td class="a-center"><?php echo date('d F Y', strtotime($data->jadwal_pulang)); ?></td>
                                <td class="a-center"><?php echo $data->banyak_penumpang; ?></td>
                                <td class="a-center"><?php echo "Rp ".number_format($data->biaya, 2, ",", "."); ?></td>
                                <td class="a-center"><?php echo $data->status; ?><br><a href="<?= site_url('booking/edit_status/'.$data->id_booking); ?>" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a></td>
                                <td class="a-center text-center">
                                    <a href="<?=site_url('booking/edit/'.$data->id_booking);?>" class="btn btn-primary btn-sm" style="margin-bottom: 5px;"><i class="fas fa-pencil-alt"></i> Edit</a>
                                    <a href="<?=site_url('booking/hapus/'.$data->id_booking);?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
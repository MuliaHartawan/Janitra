<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Customer</h1>
    <a href="<?php echo base_url('data_customer/tambah_customer'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i> Create</a>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>No Telpon</th>
                            <th>Bergabung Sejak</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($datauser as $data) {
                            $no++;
                            ?>
                            <tr class="even pointer">
                                <td class="a-center" style="width:5%;"><?php echo $no; ?></td>
                                <td class="a-center"><?php echo $data->name; ?></td>
                                <td class="a-center"><?php echo $data->email; ?></td>
                                <td class="a-center"><?php echo $data->no_telp; ?></td>
                                <td class="a-center"><?php echo date('d F Y', $data->date_created); ?></td>
                                <td class="a-center text-center">
                                    <form action="<?=site_url('data_customer/hapus')?>" method="post">
                                        <a href="<?php echo base_url('data_customer/edit/'.$data->id_user); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="<?=site_url('data_customer/hapus/'.$data->id_user);?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
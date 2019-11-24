<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Blog</h1>
    <a href="<?php echo base_url('blog/tambah_blog'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i> Create</a>
    <p class="mb-4"></p>

    <?php $this->view('messages'); ?>

    <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>

                    <!-- <tbody>
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
                                    <form action="<?=site_url('data_admin/hapus')?>" method="post">
                                        <a href="<?php echo base_url('data_admin/edit/'.$data->id_user); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="<?=site_url('data_admin/hapus/'.$data->id_user);?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody> -->
            </div>
        </div>
        <div class="card" style="width: 18rem;">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Destinasi</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="float-right">
                <a href="<?php echo site_url('data_destination'); ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
            <h3 class="card-title">Form Edit Destinasi</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="<?=site_url('data_destination/process')?>" method="post">
                        <div class="form-group">
                            <label for="kota" class="col-form-label">Kota *</label>
                            <input type="hidden" name="id" value="<?=$row->id_destinasi?>">
                            <input type="text" class="form-control" id="kota" name="kota" value="<?=$row->kota?>" placeholder="Nama Kota" required>
                        </div>
                        <div class="form-group">
                            <label for="koordinat" class="col-form-label">Koordinat *</label>
                            <input type="text" class="form-control" id="koordinat" name="koordinat" value="<?=$row->koordinat?>" placeholder="Koordinat" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="edit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Save</button>
                            <button type="Reset" class="btn btn-secondary btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
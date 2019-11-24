<div class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content">
                        <form action="<?=site_url('profile/process')?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?=$user['name'];?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=$user['email'];?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No Telepon" value="<?=$user['no_telp'];?>">
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <button type="submit" name="edit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                            <a href="#">
                            <img class="avatar border-gray" src="<?=base_url('assets')?>/img/profile.png" alt="..."/>
                            <h4 class="title"><?=$user['name'];?><br />
                                <small><?=$user['email'];?></small>
                            </h4>
                            </a>
                        </div>
                        <p class="description text-center">Contact : <?=$user['no_telp'];?><br>
                                                    Member since <?=date('d F Y', $user['date_created']); ?></p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <a href="<?php echo site_url('profile/change_password'); ?>" class="btn btn-simple"><i class="fa fa-exchange"></i> Ganti Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
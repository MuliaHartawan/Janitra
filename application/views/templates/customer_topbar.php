<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?= $title; ?></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?=site_url()?>">
                            <p><i class="fa fa-home"></i> Home</p>
                        </a>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
									<i class="fa fa-user"></i> <?= $this->session->userdata('name'); ?>
									<b class="caret"></b>
								</p>
                            </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=site_url('profile')?>"><i class="fa fa-user"></i> User Profile</a></li>
                            <li><a href="<?=site_url('profile/change_password')?>"><i class="fa fa-exchange"></i> Change Password</a></li>
                            <li><a href="#">Something</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#logoutModal">
                            <p>Log out</p>
                        </a>
                    </li>
					<li class="separator hidden-lg"></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="sidebar" data-image="<?= base_url('assets'); ?>/img/sidebar-2.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

	<div class="sidebar-wrapper">
        <div class="logo">
            <a href="<?=site_url('auth')?>" class="simple-text">
                Janitra Travel
            </a>
        </div>

        <ul class="nav">
            <li <?=$this->uri->segment(1) == 'customer' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
                <a href="<?=site_url('customer')?>">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li <?=$this->uri->segment(1) == 'profile' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
                <a href="<?=site_url('profile')?>">
                    <i class="pe-7s-user"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li <?=$this->uri->segment(1) == 'booking' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
                <a href="<?=site_url('booking')?>">
                    <i class="pe-7s-note2"></i>
                    <p>Create Booking</p>
                </a>
            </li>
            <li <?=$this->uri->segment(1) == 'my_booking' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
                <a href="<?=site_url('my_booking')?>">
                    <i class="pe-7s-news-paper"></i>
                    <p>My Booking</p>
                </a>
            </li>
            <li>
                <a href="typography.html">
                    <i class="pe-7s-timer"></i>
                    <p>Booking History</p>
                </a>
            </li>
        </ul>
	</div>
</div>
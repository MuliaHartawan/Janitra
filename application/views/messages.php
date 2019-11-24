<?php if ($this->session->has_userdata('success')) { ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <i class="fa fa-check"></i> <?=$this->session->flashdata('success');?>
</div>
<?php } elseif ($this->session->has_userdata('danger')) { ?>
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <i class="fa fa-times"></i> <?=$this->session->flashdata('danger');?>
</div>
<?php } ?>
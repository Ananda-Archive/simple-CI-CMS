<nav class="navbar navbar-expand-lg d-flex justify-content-between navbar-my navbar-dark bg-dark mb-5">
	<a class="navbar-brand" href="<?=base_url()?>">
		<div class="d-flex align-items-center">
			<img src="" class="d-inline-block align-top" alt="">
			<span class="ml-3 text-light">CMS</span>
		</div>
	</a>
	<div class="float-right">
		<?php

		if($this->session->userdata('id') != NULL) { ?>
			<a href="<?=base_url('profile')?>">
				<button type="button" class="btn btn-primary mr-3"><?php echo $this->session->userdata('name'); ?>'s Profile</button>
			</a>
			<a href="<?=base_url('login/uselogout')?>">
				<button type="button" class="btn btn-danger">Logout</button>
			</a>
		<?php } else {?>
			<a href="<?=base_url('logins')?>">
				<button type="button" class="btn btn-success">Login</button>
			</a>
		<?php } ?>
	</div>
</nav>

<style>
	.form_outer form label{
		width:100%;
	}
	.form_outer form .form-control{
		width:auto;
		float:left;
		margin-right:4px;
	}
	.form_outer form .btn{
		float:left;
	}
</style>
<div class="page_heading">
	<h2>Edit Theme</h2>
</div>
<div class="row">
    <div class="col-sm-5">
		<div class="form_outer">
			<?php echo $this->Form->create('Theme'); ?>
			<?php echo $this->Form->input('id'); ?>
			<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
			<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Form->end(); ?>
		</div>
    </div>
</div>
<?php $this->set('title_for_layout', 'Create new account'); // Titulo da pagina ?>
<div class="panel panel-default panel-body">
	<?php echo $this->Form->create('Account', array('class' => 'form-horizontal')); ?>
	<div class="form-group">
		<label class="col-sm-3 control-label">Account name:</label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('name', array('label' => false, 'class' => 'form-control', 'placeholder' => '3 to 20 characters')); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Password:</label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => '6 to 25 characters')); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Password repeat:</label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('password_repeat', array('label' => false, 'class' => 'form-control', 'placeholder' => '6 to 25 characters', 'type' => 'password')); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Email:</label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('email', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Enter your email address')); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			<button type="submit" class="btn btn-success">Register</button>
			<button type="reset" class="btn btn-default">Cancel</button>
		</div>
	</div>
	<?php echo $this->Form->end();?>
</div>
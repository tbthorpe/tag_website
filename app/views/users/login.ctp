<div id="login">
	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User'); ?>
		<?php echo $this->Form->input('username'); ?>
		<?php echo $this->Form->input('password'); ?>    
	<?php echo $this->Form->end('Sign In'); ?>
</div>

<style>
	body { background: #EDEFF6;}
	#header {padding:10px;}
	div.message {margin-left:25px; position:relative; }
	#login img {width:300px; margin-left:40px; margin-bottom:40px;}
</style>
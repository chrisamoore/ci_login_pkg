<div>
 Login View ! 
	<?php
		// AJAX this
		echo form_open();
			echo form_label('Email: ', 'email_address');
			echo form_input('email_address', set_value('email_address'), 'id="email_address"');
			echo form_label('Password: ', 'password');
			echo form_password('password','','id="password"');
			echo form_submit('submit', 'Login');
		echo form_close();
		
	?> 	
	<div class="errors">
		<?php echo validation_errors();?>
	</div>
</div>
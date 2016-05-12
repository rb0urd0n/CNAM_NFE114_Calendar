<?php echo form_open('createAccount') ?>
	<table>
		<tr>
		<td><input type="text" id="firstname" name="firstname" value="<?php echo set_value('firstname');?>" placeholder="Firstname"><br/></td><td><?php echo form_error('firstname');?></td>
		</tr>
		<tr>
		<td><input type="text" id="lastname" name="lastname" value="<?php echo set_value('lastname');?>" placeholder="Lastname"><br/></td><td><?php echo form_error('lastname');?></td>
		</tr>
		<tr>
		<td><input type="text" id="email" name="email" value="<?php echo set_value('email');?>" placeholder="Email"><br/></td><td><?php echo form_error('email');?></td>
		</tr>
		<tr>
		<td><input type="password" id="userPassword" name="password" value="" placeholder="Password"><br/></td><td><?php echo form_error('password');?></td>
		</tr>
		<tr>
		<td><input type="password" id="userPasswordConfirmation" name="confirmPassword" value="" placeholder="Re-enter password"><br/></td><td><?php echo form_error('confirmPassword');?></td>
		</tr>
		<tr>
		<td><input type="submit" name="commit" value="Register"></td>
		</tr>
	</table>
</form>

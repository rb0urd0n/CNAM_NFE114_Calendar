<?php echo form_open('manageAccount') ?>
	<table>
		<tr>
		<td><input type="text" id="firstname" name="firstname" value="<?php echo $firstname;?>" placeholder="Firstname"><br/></td><td><?php echo form_error('firstname');?></td>
		</tr>
		<tr>
		<td><input type="text" id="lastname" name="lastname" value="<?php echo $lastname;?>" placeholder="Lastname"><br/></td><td><?php echo form_error('lastname');?></td>
		</tr>
		<tr>
		<td><input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Email" disabled><br/></td>
		</tr>
		<tr>
		<td><input type="submit" name="commit" value="Modify"><input type="submit" name="commit" value="Delete account"></td>
		</tr>
	</table>
</form>

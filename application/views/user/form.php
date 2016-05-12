<?php echo form_open('user/create') ?>
	<input type="text" id="firstname" name="firstname" value="" placeholder="Firstname"><br/>
	<input type="text" id="lastname" name="lastname" value="" placeholder="Lastname"><br/>
	<input type="text" id="email" name="email" value="" placeholder="Email"><br/>
	<input type="password" id="userPassword" name="password" value="" placeholder="Password"><br/>
	<input type="password" id="userPasswordConfirmation" name="confirmPassword" value="" placeholder="Re-enter password"><br/>
	<input type="submit" name="commit" value="Register">
</form>

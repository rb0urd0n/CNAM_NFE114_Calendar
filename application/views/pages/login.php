<?php
	unset($_SESSION['email']);
	unset($_SESSION['logged_in']);
?>
<form method="post" action="home">
	<input type="text" id="email" name="email" value="" placeholder="Username"><a href="createAccount">Create account</a><br/>
	<input type="password" id="password" name="password" value="" placeholder="Password"><br/>
	<input type="submit" name="commit" value="Login">
</form>

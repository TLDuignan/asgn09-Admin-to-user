<?php

if(!isset($Users)) {
  redirect_to(url_for('/staff/users/index.php'));
}
?>

<dl>
  <dt>First name</dt>
  <dd><input type="text" name="Users[first_name]" value="<?php echo h($Users->first_name); ?>" /></dd>
</dl>

<dl>
  <dt>Last name</dt>
  <dd><input type="text" name="Users[last_name]" value="<?php echo h($Users->last_name); ?>" /></dd>
</dl>

<dl>
  <dt>Email</dt>
  <dd><input type="text" name="Users[email]" value="<?php echo h($Users->email); ?>" /></dd>
</dl>

<dl>
  <dt>Username</dt>
  <dd><input type="text" name="Users[username]" value="<?php echo h($Users->username); ?>" /></dd>
</dl>

<dl>
  <dt>User Level</dt>
  <dd><input type="text" name="Users[user_level]" value="<?php echo h($Users->user_level); ?>" /></dd>
</dl>

<dl>
  <dt>Password</dt>
  <dd><input type="password" name="Users[password]" value="" /></dd>
</dl>

<dl>
  <dt>Confirm Password</dt>
  <dd><input type="password" name="Users[confirm_password]" value="" /></dd>
</dl>

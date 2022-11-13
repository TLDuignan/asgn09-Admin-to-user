<?php require_once('../../../private/initialize.php'); ?>

<?php
  
// Find all users
$users = Users::find_all();
  
?>
<?php $page_title = 'users'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="users listing">
    <h1>Users</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/users/new.php'); ?>">Add Users</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Username</th>
        <th>User Level</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($users as $Users) { ?>
        <tr>
          <td><?php echo h($Users->id); ?></td>
          <td><?php echo h($Users->first_name); ?></td>
          <td><?php echo h($Users->last_name); ?></td>
          <td><?php echo h($Users->email); ?></td>
          <td><?php echo h($Users->username); ?></td>
          <td><?php echo h($Users->user_level); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/users/show.php?id=' . h(u($Users->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/users/edit.php?id=' . h(u($Users->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/users/delete.php?id=' . h(u($Users->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

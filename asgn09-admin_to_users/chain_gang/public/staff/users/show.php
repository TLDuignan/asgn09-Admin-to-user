<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$Users = Users::find_by_id($id);

?>

<?php $page_title = 'Show Users: ' . h($Users->full_name()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="Users show">

    <h1>Users: <?php echo h($Users->full_name()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>First name</dt>
        <dd><?php echo h($Users->first_name); ?></dd>
      </dl>
      <dl>
        <dt>Last name</dt>
        <dd><?php echo h($Users->last_name); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?php echo h($Users->email); ?></dd>
      </dl>
      <dl>
        <dt>Username</dt>
        <dd><?php echo h($Users->username); ?></dd>
      </dl>
      <dl>
        <dt>User Level</dt>
        <dd><?php echo h($Users->user_level); ?></dd>
      </dl>
    </div>

  </div>

</div>

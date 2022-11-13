<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['Users'];
  $Users = new Users($args);
  $result = $Users->save();


  if($result === true) {
    $new_id = $Users->id;
    $_SESSION['message'] = 'The Users was created successfully.';
    redirect_to(url_for('/staff/users/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $Users = new Users;
}

?>

<?php $page_title = 'Create Users'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="Users new">
    <h1>Create Users</h1>

    <?php echo display_errors($Users->errors); ?>

    <form action="<?php echo url_for('/staff/users/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create Users" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

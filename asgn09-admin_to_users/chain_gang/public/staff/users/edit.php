<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/users/index.php'));
}
$id = $_GET['id'];
$Users = Users::find_by_id($id);
if($Users == false) {
  redirect_to(url_for('/staff/users/index.php'));
}

if(is_post_request()) {

  // Save record using post parameters
  $args = $_POST['Users'];
  $Users->merge_attributes($args);
  $result = $Users->save();

  if($result === true) {
    $_SESSION['message'] = 'The Users was updated successfully.';
    redirect_to(url_for('/staff/users/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}

?>

<?php $page_title = 'Edit Users'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="Users edit">
    <h1>Edit Users</h1>

    <?php echo display_errors($Users->errors); ?>

    <form action="<?php echo url_for('/staff/users/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Users" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

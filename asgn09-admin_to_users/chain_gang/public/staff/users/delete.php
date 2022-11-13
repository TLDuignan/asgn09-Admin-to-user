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

  // Delete Users
  $result = $Users->delete();
  $_SESSION['message'] = 'The Users was deleted successfully.';
  redirect_to(url_for('/staff/users/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete Users'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="Users delete">
    <h1>Delete Users</h1>
    <p>Are you sure you want to delete this Users?</p>
    <p class="item"><?php echo h($Users->full_name()); ?></p>

    <form action="<?php echo url_for('/staff/users/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Users" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

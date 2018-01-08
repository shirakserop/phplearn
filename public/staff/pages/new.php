<?php require_once('../../../private/initialize.php');?>
<?php
    $page_name = '';
    $visibility = '';
    $category = '';

    $page_title= 'Pages';
    if(is_post_request()){
      $page_name = $_POST['page_name'] ? $_POST['page_name']: '';
      $category = $_POST['category'] ? $_POST['category']: '';
      $visibility = $_POST['visibility'] ? $_POST['visibility']: '';

      echo 'Creating Page Form <br />';
      echo 'Page Name: ' . $page_name . '<br />';
      echo 'Category: ' . $category . '<br />';
      echo 'Visibility: ' . $visibility . '<br />';
    }
  ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <a href= <?php echo url_for('/staff/pages/index.php'); ?>>&laquo; Back</a>
  <div class="pages new">
    <h1>Create Page</h1>
    <form action="<?php echo url_for('/staff/pages/new.php'); ?>" method="post">
      <dl>
        <dt>Page Name</dt>
        <dd>  <input type="text" name="page_name" value="<?php h($page_name); ?> " /></dd>
      </dl>
      <dl>
        <dt>Category</dt>
        <dd>
          <select name="category">
            <option value="1" <?php if($category == "1"){echo "selected"; }?> >1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visiblility</dt>
        <dd>
          <input type="hidden" name="visibility" value="0" />
          <input type="checkbox" name="visibility" value="1"<?php if($visibility == "1"){echo "checked";} ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit"  value="Create Page" />
      </div>
    </form>
  </div>

</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>

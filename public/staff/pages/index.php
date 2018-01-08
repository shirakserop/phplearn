<?php require_once('../../../private/initialize.php') ?>
  <?php $page_title = 'Pages' ?>
<?php  include(SHARED_PATH . '/staff_header.php')?>
<?php $pages = [
  ['id'=> '1', 'category' => 'gallery', 'page_name'=>'Globe Bank'],
  ['id'=> '2', 'category' => 'posts', 'page_name'=>'History'],
  ['id'=> '3', 'category' => 'videos', 'page_name'=>'Leadership'],
  ['id'=> '4', 'category' => 'voice', 'page_name'=>'Contact Us'],

]; ?>
  <div id="content">
    <div class="pages listing">
      <h1>Pages</h1>
      <div class="actions">
        <a class="action" href=" <?php echo url_for('/staff/pages/new.php') ?>">Create New Page</a>
      <table class="list">
        <tr>
          <th>Page</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>
        <?php foreach($pages as $page):?>
          <tr>
            <td><?php echo $page['page_name']; ?></td>
            <td><a class="action" href="<?php echo
            url_for('/staff/pages/show.php?id=' . h(u($page['id'])) .
            '&category=' . h(u($page['category'])) .'&name=' . h(u($page['page_name'])) );
            ?> ">View</a></td>
            <td><a class="action" href=<?php echo url_for('/staff/pages/edit.php?id=' . h(u($page['id']))) ;?> >Edit</a></td>
            <td><a class="action" href="">Delete</a></td>
          </tr>
        <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

<?php  include(SHARED_PATH . '/staff_footer.php')?>

<?php 
  $authordata = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
    <div id="secondary" class="widget-area" role="complementary">
      <aside class="widget author">
        <?php echo get_avatar($authordata->ID, 96); ?>
        <p><?php echo $authordata->user_description; ?></p>
      </aside>
      <?php other_sidebar_links(); ?>
    </div>

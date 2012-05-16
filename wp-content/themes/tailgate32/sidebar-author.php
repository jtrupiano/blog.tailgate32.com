<?php 
  $authordata = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php 
        $authordata = get_userdata($posts[0]->post_author);
      ?>
      
      <aside class="widget author">
        <h2><?php echo $authordata->display_name ?>'s Archive</h2>
        <?php echo get_avatar($authordata->ID, 128); ?>
      </aside>
      <?php other_sidebar_links(); ?>
    </div>

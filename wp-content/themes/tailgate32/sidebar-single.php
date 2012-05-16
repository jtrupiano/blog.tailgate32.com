    <div id="secondary" class="widget-area" role="complementary">
      <?php 
        $previous_post = get_previous_post();
        $next_post = get_next_post();
        $authordata = get_userdata($posts[0]->post_author);
        $authors_most_recent_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID, $previous_post->ID, $next_post->ID ) ) );;
      ?>
      
      <?php if ($previous_post != "") : ?>
        <aside class="widget">
          <h3>Previous Post</h3>
          <a href="<?php echo get_permalink($previous_post); ?>"><?php echo $previous_post->post_title; ?></a>
        </aside>
      <?php endif; ?>
      
      <?php if ($next_post != "") : ?>
        <aside class="widget">
          <h3>Next Post</h3>
          <a href="<?php echo get_permalink($next_post); ?>"><?php echo $next_post->post_title; ?></a>
        </aside>
      <?php endif; ?>

      <?php if ($authors_most_recent_posts) : ?>
        <aside class="widget">
          <h3><?php echo $authordata->display_name; ?>'s Other Posts</h3>
          <ul>
          <?php foreach ($authors_most_recent_posts as $authors_post) { ?>
            <li><a href="<?php echo get_permalink($authors_post); ?>"><?php echo $authors_post->post_title; ?></a></li>
          <?php } ?>
          </ul>
        </aside>
      <?php endif; ?>
      <?php other_sidebar_links(); ?>
    </div>

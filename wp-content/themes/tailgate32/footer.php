<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Tailgate32
 */
?>

  <br class="clear" />
	</div><!-- #main -->

  <div class="divider"></div>
  <div id="footer">&nbsp;</div>

  <div id="hidden-content">
    <div id="tshirt-viewer">
      <h3>Donate $25 and Get a Tailgate32 Shirt in Your Team's Colors!</h3>
      <img id="tshirt-front" src="images/tshirts/arizona-front.png" alt="Tailgate32 T-Shirt Front" width="483" height="414" />
      <img id="tshirt-back" src="images/tshirts/arizona-back.png" alt="Tailgate32 T-Shirt Back" width="483" height="414" />
      <div id="tshirt-menu">
        <label for="tshirt-options">Choose Your Team</label>
        <select id="tshirt-options">
        </select>
      </div>
    </div>    
    <div id="contact-us">
      <iframe style="display: none;" name="contact.us.iframe" src="https://docs.google.com/spreadsheet/viewform?formkey=dEY2MXNvVDRBWlN1SEE0RHRyQU42d3c6MQ"></iframe>
      <div class="headline">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left.png" alt="" />
        <h2>Contact Tailgate32</h2>
        <br class="clear" />
      </div>
      <form id="contact-us-form" target="contact.us.iframe" method="POST" action="https://docs.google.com/spreadsheet/formResponse?formkey=dEY2MXNvVDRBWlN1SEE0RHRyQU42d3c6MQ&ifq">
        <p>
          Want to know more about the trip?  Got a suggestion for us?  Want to sponsor us?  
          Fill out the form below and we'll get back to you ASAP!
        </p>
        <div><label for="contact-us-name">Name</label><input id="contact-us-name" type="text" name="entry.0.single" /></div>
        <div><label for="contact-us-email">Email</label><input id="contact-us-email" type="text" name="entry.1.single" /></div>
        <div><label for="contact-us-location">Location</label><input id="contact-us-location" type="text" name="entry.2.single" /></div>
        <div><label for="contact-us-team">Favorite Team(s)</label><input id="contact-us-team" type="text" name="entry.4.single" /></div>
        <div><label for="contact-us-message" class="for-textarea">Message</label><textarea id="contact-us-message" name="entry.6.single"></textarea></div>
        <div>
          <label>&nbsp;</label>
          <input id="contact-us-submit" name="submit" type="submit" value="Submit" class="submit" />
        </div>
        <input type="hidden" name="pageNumber" value="0" />
        <input type="hidden" name="backupCache" />
      </form>
      <p id="contact-us-thanks" style="display: none;">Thank you for contacting us.  We'll respond ASAP.</p>
    </div>
  </div>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/jquery.fancybox.pack.js?v=2.0.6"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/tailgate32.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-31443965-1']);
    _gaq.push(['_setDomainName', 'tailgate32.com']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</body>
</html>

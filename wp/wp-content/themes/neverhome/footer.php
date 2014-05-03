    <div class="container">
      <section id="clients">
        <h3>Clients</h3>

        <div class="logos">
          <img src="<?php echo get_template_directory_uri(); ?>/img/clients/nike.png">
          <img src="<?php echo get_template_directory_uri(); ?>/img/clients/red-bull.png">
          <img src="<?php echo get_template_directory_uri(); ?>/img/clients/seahawks.png">
          <img src="<?php echo get_template_directory_uri(); ?>/img/clients/vans.png">
          <img src="<?php echo get_template_directory_uri(); ?>/img/clients/adidas.png">
        </div>
      </section>
    </div>

    <div class="container">
      <section id="contact">
        <h3>Contact</h3>

        <h2>Looking to collaborate? Email us at <a href="mailto:neverhomepdx@gmail.com">neverhomepdx@gmail.com</a>.</h2>
      </section>
    </div>

    <footer>
      <span class="mark"></span>
      <p>Handmade in Portland, Oregon.</p>
    </footer>
  
  </div> <!-- end .wrapper -->

  <?php wp_footer(); ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-49038128-1', 'neverhomemusic.com');
    ga('send', 'pageview');
  </script>
</body>
</html>
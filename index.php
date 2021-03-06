<?php include 'header.php' ?>
  <body>     
<?php include 'navbar-unlogged-black.php' ?>

<div id="body-content" class="landing">

<div id="landing-masthead">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Textbooks made easy.</h1>
            <div class="info">
                <section class="span5"> 
                  <div class="video">
                    <iframe src="http://player.vimeo.com/video/62941191?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=b8b8b8" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/62941191">3 words for NYC</a> from <a href="http://vimeo.com/cokau">Cokau</a> on <a href="http://vimeo.com">Vimeo</a>.</p>
                  </div>
                </section>
                <section class="span5 offset1">
                    <p class="lead"><strong>Texts.com</strong> allows students to buy and sell textbooks to one another on their campuses. Stop overpaying, sign up now.</p>
                    <!-- <a class="btn btn-green btn-large">Watch how it works</a> -->
                    <a href="school-confirmation.php" class="btn facebook">Sign up with Facebook</a>
                    <p class="tool"> <a id="why-facebook" href="#">Why Facebook only?</a></p>
<!--                     <p><small>or</small></p>
                    <a href="#">Sign up with your email address</a> -->
                </section>
            </div>
        </div>
    <div class="row learn-more hidden-phone">
        <div class="span12">
          <div id="learn-more-scroll">
            <a id="scroll-to-marketing" href="#marketing" class="btn btn-green btn-large learn-more-btn">Learn more</a>
          </div>
        </div>
    </div>
    </div>
</div>

<div class="container marketing">

  <div id="marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img src="img/icon-books.png" class="hidden-phone visible-tablet visible-desktop">
          <h2>Buy and sell your books on campus.</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="img/icon-store.png" class="hidden-phone visible-tablet visible-desktop">
          <h2>No middleman means better prices.</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="img/icon-tree.png" class="hidden-phone visible-tablet visible-desktop">
          <h2>Stay local and stay green!</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
  </div>
</div>

<div id="landing-features" class="hidden-phone">
  <div class="container">
    <?php include 'features.php' ?>
  </div>
</div>

<div class="container">
  <?php include 'market-widget.php' ?>
</div>

</div>
</div>


<?php include 'footer.php' ?>
<?php include 'javascript.php' ?>

  </body>
</html>
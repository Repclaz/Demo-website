<?php
include'includes/header.php';
?>
			<!--Main-->
      <div id="main-container" class="container">
        <div class="row">
          <section id="news" class="col body-element">
            <h1>News</h1>
          </section>

          <div class="col">

            <div class="row">
              <section id="misc" class="col body-element">
                <h1>Misc</h1>
              </section>
            </div>

            <div class="row">

              <section id="games" class="col body-element">
                <h1>Games</h1>
              </section>
              <section id="twitter" class="col body-element">
                <a class="twitter-timeline" href="https://twitter.com/NexusDiplomacy?ref_src=twsrc%5Etfw"
                data-width="400"
                  data-height="400">
                Tweets by NexusDiplomacy
                </a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </section class="">
              
            </div>

          </div>

        </div>
      </div>

      <?php
        include'includes/sections/register.php';
        echo "register";
      ?>




  <script>
    function isOverflown(element) {
      return element.scrollHeight > element.clientHeight || element.scrollWidth > element.clientWidth;
    }
    var docWidth = document.documentElement.offsetWidth;

    [].forEach.call(
      document.querySelectorAll('*'),
      function(el) {
        if (el.offsetWidth > docWidth) {
          console.log(el);
        }
      }
    );
  </script>
<?php
include'includes/Footer.php';
?>

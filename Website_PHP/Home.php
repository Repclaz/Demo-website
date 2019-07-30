 <?php
include'Assets/Header.php';
?>
			<!--Main-->
			<section id="News">
				
			</section>
			<section id="Misc">
				
			</section>
			<section id="Twitter">
			<a class="twitter-timeline" href="https://twitter.com/NexusDiplomacy?ref_src=twsrc%5Etfw"
			data-width="400"
  			data-height="400">
			Tweets by NexusDiplomacy
			</a> 
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</section>
			<section id="Games">
			</section>
    
</body>
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
</html>
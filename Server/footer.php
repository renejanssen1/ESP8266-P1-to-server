<?php
print "			<footer><p>All right reserved. Made by: R.G.A. Janssen</p>\n";
print "			<a href='http://github.com/renejanssen1/ESP8266-P1-to-HTTP'>You can find me on Github</a></footer>\n";
print "			</div>\n";
print "		<p><p>\n";
print "		</div>\n";
//print "</div>\n";
?>

<script id="rendered-js" >
$(document).ready(function () {
  // menu click event
  $('.menuBtn').click(function () {
    $(this).toggleClass('act');
    if ($(this).hasClass('act')) {
      $('.mainMenu').addClass('act');
    } else
    {
      $('.mainMenu').removeClass('act');
    }
  });
});
</script>
</body>
</html>

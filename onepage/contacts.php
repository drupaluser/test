<!DOCTYPE HTML>
<html>
  <head>
    <title>Company & Co</title>
    <link rel="stylesheet" href="css/styles.css" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>

  <body>
    <script>
      $(function() {
        $( "#tabs" ).tabs();
      });
  </script>
    <div id="nav">
      <ul>
         <li class="menu"><a class = "scroll" href="#aboutus">About Us</a></li>
         <li class="menu"><a  class = "scroll" href="#works">What we do</a></li>
         <li class="menu"><a  class = "scroll" href="#contact">Contact</a></li>
      </ul>
    </div>
    <section id="about">
      <a id="aboutus"></a>
      <h3> Aboout US </h3>
      <p>
        <iframe width="640" height="360" src="//www.youtube.com/embed/4vENzsgAqB4" frameborder="0" allowfullscreen></iframe>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse semper felis dictum lobortis accumsan. Etiam quis ante elit. Proin auctor fermentum neque, vel sodales libero mollis ut. Vestibulum laoreet felis et velit tempus, sit amet lobortis lectus luctus. Mauris vehicula egestas diam at mollis. Phasellus tincidunt nec orci quis aliquam. Donec pretium erat sit amet nulla fermentum, non congue orci interdum.</p>
      <p>Donec euismod mollis nunc, eu faucibus mauris tempor in. Aliquam tempus est quis est viverra, in lacinia justo hendrerit. Donec vehicula posuere nisi et malesuada. Quisque molestie purus lacinia purus sollicitudin ultrices rutrum at magna. Aenean viverra eget purus id faucibus. Curabitur et scelerisque mi. Donec ornare velit tortor, at lobortis eros commodo at. Fusce consectetur orci a lacinia convallis. Nulla id nisl dolor. Sed posuere varius nulla sed adipiscing. Aenean ullamcorper, dui nec iaculis porttitor, eros urna bibendum turpis, placerat laoreet velit leo id neque.</p>
      <p>Pellentesque ipsum enim, viverra sit amet nisi ullamcorper, varius cursus neque. Etiam in justo quis ligula viverra consectetur at in lectus. Cras eleifend imperdiet eros, pharetra rutrum velit volutpat a. Quisque tempor varius augue, sit amet lobortis mauris aliquet ac. Aliquam sit amet mi consectetur, feugiat odio vitae, egestas erat. Cras vitae diam pretium, accumsan felis sed, blandit arcu. Donec eu imperdiet mauris. Aenean bibendum tellus dolor. Praesent velit est, elementum et eros id, pharetra adipiscing nibh.</p>
    </section><!-- END SECTION ABOUT -->

    <section id="work">
      <a id="works"></a>
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1"> What we do </a></li>
            <li><a href="#tabs-2"> Our team </a></li>
            <li><a href="#tabs-3"> What do we use </a></li>
          </ul>


        <div id ="tabs-1">
          <h3>What we do</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis pretium elit, id dictum turpis aliquam eget. Integer volutpat at lectus a porta. Nam adipiscing at arcu sed accumsan. Phasellus a nisl massa. Donec ut nisi odio. Fusce nulla mauris, gravida non consectetur ac, fringilla nec nunc. Integer gravida semper erat, eget egestas lorem blandit nec. Vestibulum non nulla eu quam condimentum ornare. Nam sagittis elit in nulla mattis, vel ultrices sapien volutpat. Proin nec suscipit lorem, a tincidunt risus. Donec porta, justo eu ultrices imperdiet, enim lacus dapibus lectus, at laoreet justo massa sed ipsum.</p>
          <p>Phasellus interdum faucibus orci, at laoreet mi tristique quis. Fusce auctor tempus consequat. Etiam vehicula lorem eros, lobortis tincidunt elit interdum non. Pellentesque consectetur mi nec est ornare dictum. Proin sed arcu congue, porttitor elit quis, porta est. Ut tempor risus sed odio facilisis pulvinar. Donec eget lectus tempus, accumsan nulla ac, volutpat massa.</p>
          <p>Quisque vehicula velit vitae erat placerat egestas. Nullam eu lacus eget risus semper sagittis. Aenean eget iaculis tellus. Sed mauris nulla, interdum nec facilisis eu, molestie at tortor. Aliquam eu ultricies massa. Phasellus lobortis nibh eu iaculis consequat. Nullam risus ipsum, dictum vitae egestas id, fermentum tincidunt ligula.</p>
          <p>Sed felis elit, posuere ut est vel, dignissim accumsan lacus. Aenean convallis purus id rhoncus blandit. Sed dapibus at tellus dictum pharetra. Proin ac convallis diam. Proin tempus est mauris, a iaculis orci facilisis vitae. Sed pulvinar mi sit amet scelerisque mollis. Curabitur lorem elit, porttitor sed tristique luctus, dignissim non odio. Sed sollicitudin pharetra metus, adipiscing accumsan arcu gravida at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sit amet hendrerit diam. Cras faucibus, sem eu commodo feugiat, sapien arcu lacinia quam, vel dapibus sapien quam ut velit.</p>
          <p>In sit amet interdum nunc. Proin aliquet vitae felis adipiscing laoreet. Praesent sem dui, feugiat sed lacus rutrum, consectetur adipiscing nunc. Duis facilisis augue et metus bibendum placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse sit amet diam elit. Nulla imperdiet interdum molestie. Nunc a massa non massa faucibus bibendum.</p>
        </div><!-- END DIV TABS-1 -->

        <div id = "tabs-2">
          <h3>Our Team</h3>
          <div id="images_full">
            <img src="images/team/full_image/team1.jpg" />
          </div>

          <div id="images_thumbnails">
            <a href="images/team/full_image/team1.jpg">
              <img src="images/team/thumbnail/team1.jpg" />
            </a>
            <a href="images/team/full_image/team2.jpg">
              <img src="images/team/thumbnail/team2.jpg" />
            </a>
            <a href="images/team/full_image/team3.jpg">
              <img src="images/team/thumbnail/team3.jpg" />
            </a>
          </div>
          <script>
            $('#images_thumbnails a').click(function(){
            var newImageSrc = $(this).attr('href');
            $('#images_full img').attr({'src': newImageSrc });
            return false;
            });
          </script>
        </div><!-- END DIV TABS-2 -->

        <div id = "tabs-3">
          <h3>What do we use</h3>
          <img src="images/programm.jpg" />
        </div><!-- END DIV TABS-3 -->

        </div><!-- END DIV TABS -->

    </section> <!-- END SECTION WORK -->

    <section id="contacts">
      <a id="contact"></a>
      <h3> Contact US </h3>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1360.162959817123!2d28.845562808890577!3d47.01420723227682!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sru!4v1405515532683" width="680" height="300" frameborder="0" style="border:0"></iframe>
      </div><!-- END DIV MAP -->
      <div class="messages">
      <form action="contacts.php" method="post" />
        <input name="name" type="text" size="30" placeholder="Your name" required /> <br />
        <input name="email" type="email" size="30" placeholder="Your E-mail" required /> <br />
        <input type="text" name="mes" size="30" placeholder="Your subject" required /> <br />
        <input type="submit" name="submit" id="submit" value="Send">
      </form>
    </div><!-- END DIV MESSAGES -->
    </section><!-- END SECTION CONTACTS -->

    <footer>
      <div id="share">
      <script type="text/javascript">(function() {
        if (window.pluso)if (typeof window.pluso.start == "function") return;
        if (window.ifpluso==undefined) { window.ifpluso = 1;
        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
        s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
        s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
        var h=d[g]('body')[0];
        h.appendChild(s);
        }})();</script>
        <div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=05" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
    </div><!-- END DIV SHARE -->
      <p> © 2014 Company & CO </p>
    </footer

<div id="block">
<pre>
<?php /*
  $homepage = file_get_contents('messages.txt');
  echo $homepage;
*/
?></pre></div><!-- END DIV BLOCK -->

<?php
if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mes = $_POST['mes'];
  $text = date('m.d.y H:i:s').'<br />';
  $text .= "<b>Name:</b> $name \n";
  $text .= "<b>Email:</b> $email \n";
  $text .= "<b>Messages:</b> $mes \n\n";
    if (!empty($name) && !empty($email) && !empty($mes)){
      $file = fopen ("messages.txt", "a+");
      fwrite ($file, $text);
      fclose ($file);
    }
}
?>
<script>
  $(document).ready(function($) {
    $(".scroll").click(function(event){
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
    });
  });
</script>


<!--
<script>
setInterval(function(){
$("#block").load("contacts.php #block");
}, 2000);
</script>
-->

</body>
</html>

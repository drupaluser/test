<!DOCTYPE HTML>
<html>
  <head>
    <title>Company & Co</title>
    <link rel="stylesheet" href="css/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>

  <body>

  <script>
    var show;
  function hidetxt(type){
    param=document.getElementById(type);
    if(param.style.display == "none") {
      if(show) show.style.display = "none";
        param.style.display = "block";
        show = param;
      }
      else param.style.display = "none";
  }
  </script>


    <section id="about">
      <h3> Aboout US </h3>
      <p>
        <iframe width="640" height="360" src="//www.youtube.com/embed/4vENzsgAqB4" frameborder="0" allowfullscreen></iframe>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse semper felis dictum lobortis accumsan. Etiam quis ante elit. Proin auctor fermentum neque, vel sodales libero mollis ut. Vestibulum laoreet felis et velit tempus, sit amet lobortis lectus luctus. Mauris vehicula egestas diam at mollis. Phasellus tincidunt nec orci quis aliquam. Donec pretium erat sit amet nulla fermentum, non congue orci interdum.</p>
      <p>Donec euismod mollis nunc, eu faucibus mauris tempor in. Aliquam tempus est quis est viverra, in lacinia justo hendrerit. Donec vehicula posuere nisi et malesuada. Quisque molestie purus lacinia purus sollicitudin ultrices rutrum at magna. Aenean viverra eget purus id faucibus. Curabitur et scelerisque mi. Donec ornare velit tortor, at lobortis eros commodo at. Fusce consectetur orci a lacinia convallis. Nulla id nisl dolor. Sed posuere varius nulla sed adipiscing. Aenean ullamcorper, dui nec iaculis porttitor, eros urna bibendum turpis, placerat laoreet velit leo id neque.</p>
      <p>Pellentesque ipsum enim, viverra sit amet nisi ullamcorper, varius cursus neque. Etiam in justo quis ligula viverra consectetur at in lectus. Cras eleifend imperdiet eros, pharetra rutrum velit volutpat a. Quisque tempor varius augue, sit amet lobortis mauris aliquet ac. Aliquam sit amet mi consectetur, feugiat odio vitae, egestas erat. Cras vitae diam pretium, accumsan felis sed, blandit arcu. Donec eu imperdiet mauris. Aenean bibendum tellus dolor. Praesent velit est, elementum et eros id, pharetra adipiscing nibh.</p>

    </section>

    <section id="work">
        <div id="menu"><a onclick="hidetxt('whatdo'); return false;" href="#" rel="nofollow"> What we do </a></div>
        <div id="menu"><a onclick="hidetxt('team'); return false;" href="#" rel="nofollow"> Our team </a></div>
        <div id="menu"><a onclick="hidetxt('whatuse'); return false;" href="#" rel="nofollow"> What do we use </a></div>


        <div style="display:none;" class = "clear" id ="whatdo">
          <h3>What we do</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis pretium elit, id dictum turpis aliquam eget. Integer volutpat at lectus a porta. Nam adipiscing at arcu sed accumsan. Phasellus a nisl massa. Donec ut nisi odio. Fusce nulla mauris, gravida non consectetur ac, fringilla nec nunc. Integer gravida semper erat, eget egestas lorem blandit nec. Vestibulum non nulla eu quam condimentum ornare. Nam sagittis elit in nulla mattis, vel ultrices sapien volutpat. Proin nec suscipit lorem, a tincidunt risus. Donec porta, justo eu ultrices imperdiet, enim lacus dapibus lectus, at laoreet justo massa sed ipsum.</p>
          <p>Phasellus interdum faucibus orci, at laoreet mi tristique quis. Fusce auctor tempus consequat. Etiam vehicula lorem eros, lobortis tincidunt elit interdum non. Pellentesque consectetur mi nec est ornare dictum. Proin sed arcu congue, porttitor elit quis, porta est. Ut tempor risus sed odio facilisis pulvinar. Donec eget lectus tempus, accumsan nulla ac, volutpat massa.</p>
          <p>Quisque vehicula velit vitae erat placerat egestas. Nullam eu lacus eget risus semper sagittis. Aenean eget iaculis tellus. Sed mauris nulla, interdum nec facilisis eu, molestie at tortor. Aliquam eu ultricies massa. Phasellus lobortis nibh eu iaculis consequat. Nullam risus ipsum, dictum vitae egestas id, fermentum tincidunt ligula.</p>
          <p>Sed felis elit, posuere ut est vel, dignissim accumsan lacus. Aenean convallis purus id rhoncus blandit. Sed dapibus at tellus dictum pharetra. Proin ac convallis diam. Proin tempus est mauris, a iaculis orci facilisis vitae. Sed pulvinar mi sit amet scelerisque mollis. Curabitur lorem elit, porttitor sed tristique luctus, dignissim non odio. Sed sollicitudin pharetra metus, adipiscing accumsan arcu gravida at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sit amet hendrerit diam. Cras faucibus, sem eu commodo feugiat, sapien arcu lacinia quam, vel dapibus sapien quam ut velit.</p>
          <p>In sit amet interdum nunc. Proin aliquet vitae felis adipiscing laoreet. Praesent sem dui, feugiat sed lacus rutrum, consectetur adipiscing nunc. Duis facilisis augue et metus bibendum placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse sit amet diam elit. Nulla imperdiet interdum molestie. Nunc a massa non massa faucibus bibendum.</p>
        </div>


        <div style="display:none;" class = "clear" id = "team">
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
        </div>



        <div style="display:none;" class="clear" id = "whatuse">
          <h3>What do we use</h3>
          <img src="images/programm.jpg" />
        </div>

    </section>

    <section id="contacts">
      <h3> Contact US </h3>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1360.162959817123!2d28.845562808890577!3d47.01420723227682!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sru!4v1405515532683" width="680" height="300" frameborder="0" style="border:0"></iframe>
      </div>
      <div class="messages">
      <form action="contacts.php" method="post" />
        <input name="name" type="text" size="30" placeholder="Your name" required /> <br />
        <input name="email" type="email" size="30" placeholder="Your E-mail" required /> <br />
        <input type="text" name="mes" size="30" placeholder="Your subject" required /> <br />
        <input type="submit" name="submit" id="submit" value="Send">
      </form>
    </div>
    </section>
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
    </div>
      <p> © 2014 Company & CO </p>
    </footer

<div id="block">
<pre>
<?php /*
  $homepage = file_get_contents('messages.txt');
  echo $homepage;
*/
?></pre></div>

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
<!--
<script>
setInterval(function(){
$("#block").load("contacts.php #block");
}, 2000);
</script>
-->


</body>
</html>

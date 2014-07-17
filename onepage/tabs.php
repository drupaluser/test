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

    <section id="work">
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
        </div>


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
        </div>



        <div id = "tabs-3">
          <h3>What do we use</h3>
          <img src="images/programm.jpg" />
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

<!--
<script>
setInterval(function(){
$("#block").load("contacts.php #block");
}, 2000);
</script>
-->


</body>
</html>

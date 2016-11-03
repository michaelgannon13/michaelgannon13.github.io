<!doctype html>
<html lang="en-US" class="export">
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3919315193284770",
    enable_page_level_ads: true
  });
</script>

  <meta charset="utf-8">
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  
  <meta name="description" content="CSS Media Query Generator for all screen sizes including laptop, tablet and mobile devices.">
  <title>CSS media query generator</title>

  <meta itemprop="name" content="Simple CSS">
  <meta itemprop="description" content="Simple CSS Generator for returning CSS code for media queries, vendor prefixes and browser breakpoints.">
  <meta property="og:title" content="Simple CSS">
  <meta property="og:url" content="http://simplecss.eu">
  <meta property="og:site_name" content="Simple CSS">
  <meta property="og:description" content="Simple CSS Generator for returning CSS code for media queries, vendor prefixes and browser breakpoints.">
  <meta name="twitter:site" content="@simplecss">
  <meta name="twitter:description" content="Simple CSS Generator for returning CSS code for media queries, vendor prefixes and browser breakpoints.">
  <meta name="twitter:title" content="Simple CSS">
  <meta name="twitter:url" content="http://simplecss.eu">
  <meta name="twitter:creator" content="@michaelgannon90">
  <meta name="keywords" content="simple, css, css media query generator, generator, easy css, tool, productivity, template, popular, devices">

  <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Isotope does not require any CSS files -->
  <link rel="stylesheet" href="css/master.css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body id="main-container" class="page--index" data-page="index">
    <a id="bookmarkme" href="#" rel="sidebar" title="bookmark this page"><span id="b-text">Bookmark</span><img alt="simple-bookmark" id="bookmark" src="img/agenda.png"> </a>



<div id="pagina">
        <div class="barra-menu">
            <!-- Boton Desplegar/Replegar menú -->  <a href="#" id="btn-drop" class="btn-menu aln-centro">MENU</a>  
            <!-- Menú de navegación -->
            <ul id="submenu" class="lista-menu aln-centro">
                <li><a id="med" href="index.html" style="background-color:#364F6B">Media Queries</a></li>
                <li><a id="pxtoems" href="pxtoems.html">Units</a></li>
                <li><a id="ven" href="prefix.html">Vendor Prefixes</a></li>
                <li><a id="fil" href="filter.html">Image Filters</a></li>
                <li><a id="clip" href="clip-path.html">Clip-paths</a></li>
                <li><a id="break" href="minify.html">Minify</a></li>
            </ul>
        </div>
    </div>

<div class="hero">
  <div class="primary-content">
  <h1 id="title">
    <span id="simple">Simple CSS</span> Jobs</h1>

    <?php
  $server = mysql_connect("mysql2779int.cp.blacknight.com", "u1429287_michael", "S@3+Nmr1K[?h|Tu5"); 
  $db = mysql_select_db("db1429287_Jobs", $server); 
  $query = mysql_query("SELECT * FROM submit_job"); 
?>

<table class="table table-striped table-responsive">

  <thead>
    <tr>
      <th>
        Company
      </th>
      <th>
        Experience
      </th>
      <th>
        Location
      </th>
      <th>
        Salary
      </th>
      <th>
        Duration
      </th>
      <th>
        Link
      </th>
      <th>
        Contact
      </th>
    </tr>
  </thead>

  <?php
     while ($row = mysql_fetch_array($query)) {?>

         <tbody>
          <tr>
            <td>
              <?php echo $row['company'];?>
            </td>
            <td>
              <?php echo $row['experience'];?>
            </td>
            <td>
              <?php echo $row['location'];?>
            </td>
            <td>
              <?php echo $row['salary'];?>
            </td>
            <td>
              <?php echo $row['duration'];?>
            </td>
            <td>
              <?php echo $row['url'];?>
            </td>
            <td>
              <?php echo $row['contact'];?>
            </td>
          </tr>
        </tbody>



    <?php  } ?>
</table>



</div>

  </div>

</div>

    </div>
  </div>

  </div>

<!-- Looking for isotope.js? Use isotope.pkgd.min.js -->
<!-- Isotope does NOT require jQuery. But it does make things easier -->

<!-- <script src="js/isotope-docs.min.js"></script> -->
<script src="js/master.js"></script>
<!-- <script src="js/clipboard.min.js"></script> -->



<footer id="footer-container">
  <div class="quick-holder">
            <span id="quick">This Device: </span>
            <span id="quick-width" class="widthValue">Width:</span>
            <span id="quick-height" class="heightValue">Height:</span>
          </div>


    <div id="share-buttons">

     <!-- Twitter -->
    <a href="https://twitter.com/share?url=http://simplecss.eu&amp;text=CSS%20Generator:%20&amp;hashtags=simplecss" target="_blank">
        <img alt="simple-twitter-share" src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>

    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=http://simplecss.eu" target="_blank">
        <img alt="simple-facebook-share" src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
    
    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=http://simplecss.eu" target="_blank">
        <img alt="simple-google-share" src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
    
    <!-- LinkedIn -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://simplecss.eu" target="_blank">
        <img alt="simple-linkedin-share" src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
    </a>
    
    <!-- Reddit -->
    <a href="http://reddit.com/submit?url=http://simplecss.eu&amp;title=Simple Share Buttons" target="_blank">
        <img alt="simple-reddit-share" src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
    </a>

    
    <!-- Tumblr-->
    <a href="http://www.tumblr.com/share/link?url=http://simplecss.eu&amp;title=Simple Share Buttons" target="_blank">
        <img alt="simple-tumblr-share" src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
    </a>


    <!-- Email -->
    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://simplecss.eu">
        <img alt="simple-mail-share" src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
    </a>

    <form id="donate-button" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="CU55YNWUKVAQU">
      <input id="donate"   type="image" src="img/button.png" border="none" name="submit" alt="PayPal - The safer, easier way to pay online!"><!-- 
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
    </form>
    
</div>

</footer>

<script type="text/javascript">
 var images = ['1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '7.png', '8.png', '9.png', '10.png', '11.png', '12.png', '13.png', '15.png', '18.png' , '19.png' , '20.png' , '21.png' , '22.png' , '23.png' , '24.png' , '25.png' , '26.png' , '27.png' ];

 $('body').css({'background-image': 'url(img/' + images[Math.floor(Math.random() * images.length)] + ')'});
</script>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us14.list-manage.com","uuid":"30eda457c7d2bec3542d6d966","lid":"67381fd6e4"}) })</script>
<script>
$(document).ready(function () {

    $("#mob").prop("checked", true);
    /* Toggle menú de móviles  */
    $('#btn-drop').on('click', function (e) {
        e.preventDefault();
        $('#submenu').slideToggle(500);
    }); // fin click
    
    /* Hacer visible el menú al agrandar */
    $(window).resize(function () {
        if (innerWidth >= 480) {
            if ($('#submenu').css('display') == 'none') {
                $('#submenu').removeAttr('style');
            }
        }
    }); // fin resize
});
</script>

</body>
</html>


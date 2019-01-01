<!doctype html>
<html lang="en-US" class="export">
<head>
  <meta charset="utf-8">
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  
  <meta name="description" content="CSS Media Query Generator for all screen sizes including laptop, tablet and mobile devices.">
  <title>Jobs for Front End Developers, Web Designers and User Experience Designers</title>    

  <meta itemprop="name" content="Simple CSS Jobs">
  <meta itemprop="description" content="A location exclusively for posting jobs for Front End Developers, Web Designers and User Experience Designers">
  <meta property="og:title" content="Simple CSS jobs">
  <meta property="og:url" content="http://simplecss.eu/vewJobs.php">
  <meta property="og:site_name" content="Simple CSS Jobs">
  <meta property="og:description" content="A location exclusively for posting jobs for Front End Developers, Web Designers and User Experience Designers">
  <meta name="twitter:site" content="@michaelgannon90">
  <meta name="twitter:description" content="A location exclusively for posting jobs for Front End Developers, Web Designers and User Experience Designers">
  <meta name="twitter:title" content="Simple CSS Jobs">
  <meta name="twitter:url" content="http://simplecss.eu/viewJobs.php">
  <meta name="twitter:creator" content="@michaelgannon90">
  <meta name="keywords" content="Jobs for Front end developers, Jobs for Web Designers, Jobs for User Experience Designers, Recruiters, Looking for Front End Developers, Looking for Web Designers, Looking for User Experience Designers">

  <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Isotope does not require any CSS files -->
  <link rel="stylesheet" href="css/master.css" media="screen">
  <link rel="stylesheet" href="css/jobs.css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body id="main-container" class="page--index" data-page="index">
<div class="container-fluid">
    <a id="bookmarkme" href="#" rel="sidebar" title="bookmark this page"><span id="b-text">Bookmark</span><img alt="simple-bookmark" id="bookmark" src="img/agenda.png"> </a>


<div id="pagina">
        <div class="barra-menu">
            <a href="#" id="btn-drop" class="btn-menu aln-centro">MENU</a>  
            <ul id="submenu" class="lista-menu aln-centro">
                <li><a id="med" href="index.html">Media Queries</a></li>
                <li><a id="pxtoems" href="pxtoems.html">Units</a></li>
                <li><a id="ven" href="prefix.html">Vendor Prefixes</a></li>
                <li><a id="fil" href="filter.html">Image Filters</a></li>
                <li><a id="clip" href="clip-path.html">Clip-paths</a></li>
                <li><a id="min" href="minify.html">Minify</a></li>
                <li><a id="break" href="breakpoints.html">Breakpoints</a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
      function launchModal(){
        $('#myModal').modal();
      }
    </script>

<div class="hero">
  <div class="primary-content">
  <h1 id="title">
    <span id="simple">Simple CSS</span> Jobs</h1>
    <p id="jobsforwho">for Developers & Designers</p>
    <div id="stats">
      <h3 id="why">What you get</h3>
    <div id="holder">  
      <ol id="list-why">
        <li id="item"><span id="boost">10,000</span> impressions per month.</li>
        <li id="item"><span id="boost">85%</span> unique site traffic per month.</li>
        <li id="item">Each job shared with <span id="boost">500 email subscribers</span>.</li>
        <li id="item">All traffic is from Developers & Designers.</li>
        <li id="item">No registration necessary.</li>
      </ol>
    </div>  
    </div>

    <div id="button-holder">
      <button id="post" type="button" class="btn btn-info btn-lg" onclick="launchModal();" data-toggle="modal" >Post a Job</button>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Post Job below</h4>
            <h6 id="exp">Your job listing will remain on this site for 30 days.</h6>
          </div>
          <div class="modal-body">
            
  <form action="process.php" method="post" class="form-horizontal" style="top:0px;">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="company"><i class="fa fa-briefcase" aria-hidden="true"></i> Company</label>  
  <div class="col-md-4">
  <input id="textinput" name="company" type="text" placeholder="Company..." class="form-control input-md" required="">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="salary"><i class="fa fa-eur" aria-hidden="true"></i> Salary</label>
  <div class="col-md-4">
    <select id="selectbasic" name="salary" class="form-control">
      <option value="Negotiable">Negotiable</option>
      <option value="20,000-30,000">20,000 - 30,000</option>
      <option value="20,000-30,000">20,000 - 30,000</option>
      <option value="40,000-50,000">40,000 - 50,000</option>
      <option value="Contact for details">Contact for details</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label>  
  <div class="col-md-4">
  <input id="textinput" name="location" type="text" placeholder="Location..." class="form-control input-md" required="">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="duration"><i class="fa fa-clock-o" aria-hidden="true"></i> Duration</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="duration" id="radios-0" value="Permanent" checked="checked">
      Permanent
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="duration" id="radios-1" value="Contract">
      Contract
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="duration" id="radios-1" value="Freelance">
      Freelance
    </label>
  </div>
</div> 

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="experience"><i class="fa fa-handshake-o" aria-hidden="true"></i> Experience</label>
  <div class="col-md-4">
    <select id="selectbasic" name="experience" class="form-control">
      <option value="Internship">Internship</option>
      <option value="1 year - 3 years">1 year - 3 years</option>
      <option value="3 year - 5 years">3 years - 5 years</option>
      <option value="5 year - 10 years">5 years - 10 years</option> 
      <option value="5 year - 10 years">10 years +</option> 
    </select>
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="skills"><i class="fa fa-code" aria-hidden="true"></i> Skills Required</label>
  <div class="col-md-4">
    <input type="checkbox" name="skills[]" value="HTML, CSS"> HTML & CSS</input><br>
    <input type="checkbox" name="skills[]" value="Javascript/jQuery"> Javascript / jQuery</input><br>
    <input type="checkbox" name="skills[]" value="Bootstrap"> Bootstrap</input><br>
    <input type="checkbox" name="skills[]" value="Wordpress"> Wordpress</input><br>
    <input type="checkbox" name="skills[]" value="ASP.NET"> ASP.NET</input><br>
    <input type="checkbox" name="skills[]" value="Angular.js or similar"> Angular.js or similar</input><br>
    <input type="checkbox" name="skills[]" value="Git or similar"> Git or similar</input><br>
    <input type="checkbox" name="skills[]" value="JSON"> JSON</input><br>
    <input type="checkbox" name="skills[]" value="XML"> XML</input><br>
    <input type="checkbox" name="skills[]" value="Adobe Suite"> Adobe Suite</input><br>
    <input type="checkbox" name="skills[]" value="Microsoft Office & Powerpoint"> Microsoft Office & Powerpoint</input><br>
    <input type="checkbox" name="skills[]" value="Portfolio"> Portfolio</input><br>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Job Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="description">Enter job description...</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact</label>  
  <div class="col-md-4">
  <input id="textinput" name="contact" type="text" placeholder="Contact..." class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="url"><i class="fa fa-link" aria-hidden="true"></i> Link</label>  
  <div class="col-md-4">
  <input id="textinput" name="url" type="text" placeholder="Applciation" class="form-control input-md" required="">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <form action="jobs.php" method="POST">
    <script
      src="https://checkout.stripe.com/checkout.js" class="stripe-button"
      data-key="pk_test_bHxZjgf0wReNiONwZfBW07kq"
      data-amount="999"
      data-name="Michael Gannon"
      data-description="Widget"
      data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
      data-locale="auto"
      data-zip-code="true"
      data-currency="eur">
    </script>
  </form>
  </div>
</div>

</fieldset>
</form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>       


    <?php
      $server = mysql_connect("mysql2779int.cp.blacknight.com", "u1429287_michael", "S@3+Nmr1K[?h|Tu5"); 
      $db = mysql_select_db("db1429287_Jobs", $server); 
      $query = mysql_query("SELECT * FROM submit_job"); 
    ?>


 <div class="row">
  <?php
     while ($row = mysql_fetch_array($query)) {?>
          <a id="web-link" target="_blank" href="http://<?php echo $row['url']; ?>">
            <div id="job-container" class="col-md-12">
              <div id="data-row" class="col-xs-12 col-sm-2 col-md-2"><span id="company"><i class="fa fa-briefcase" aria-hidden="true"></i> COMPANY</span> <br>
                <div id="comPar"><?php echo $row['company'];?></div>
                <br>
                <span id="duration"><i class="fa fa-clock-o" aria-hidden="true"></i> DURATION</span> <br>
                <div id="durPar"><?php echo $row['duration'];?></div>
                <br>
                <span id="salary"><i class="fa fa-eur" aria-hidden="true"></i> SALARY</span> <br>
                <div id="salPar"><?php echo $row['salary'];?></div>
              </div>
              <div id="data-row" class="col-xs-12 col-sm-7 col-md-7"><span id="exp"><i class="fa fa-handshake-o" aria-hidden="true"></i> EXPERIENCE</span> <br>
                <div id="expPar"><?php echo $row['experience'];?></div>
                <br>
                <span id="skills"><i class="fa fa-code" aria-hidden="true"></i> SKILLS</span> <br>
                <div id="skillsPar"><?php echo $row['skills'];?></div>
                <br>
                <span id="description"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> DESCRIPTION</span> <br>
                <div id="desPar"><?php echo $row['description'];?></div>
              </div>
              <div id="data-row" class="col-xs-12 col-sm-3 col-md-3">
                <span id="link"><i class="fa fa-link" aria-hidden="true"></i> LINK</span> <br>
                <a id="web-link" target="_blank" href="http://<?php echo $row['url']; ?>">
                <div id="urlPar"><?php echo $row['url'];?></div>
                </a> 
                <br>
                <span id="location"><i class="fa fa-map-marker" aria-hidden="true"></i> LOCATION</span> <br>
                <div id="locPar"><?php echo $row['location'];?></div>
                <br>
                <span id="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> CONTACT</span> <br>
                <div id="conPar"><?php echo $row['contact'];?></div>
              </div>
            </div>
          </a>
        
    <?php  } ?>
    </div>

<!-- Irish stack overflow -->
<!-- start feedwind code --> 
<script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="2195/"></script> 
<!-- end feedwind code -->

<!-- Internatoinal stack overflow -->
<!-- start feedwind code --> 
<script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="2194/"></script> 
<!-- end feedwind code -->

<!-- UX / UI Developer (Ireland) -->
<!-- start feedwind code --> 
<script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="2136/"></script> 
<!-- end feedwind code -->


<script type="text/javascript">

var $rows = $('#job-container');

$('#search-jobs').keyup(function() {
  var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

  $rows.show().filter(function() {
      var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
      return !~text.indexOf(val);
  }).hide();
});

</script>



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
<!-- <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us14.list-manage.com","uuid":"30eda457c7d2bec3542d6d966","lid":"67381fd6e4"}) })</script>
 -->
</div>
</body>
</html>


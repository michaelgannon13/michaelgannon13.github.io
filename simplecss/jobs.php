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
<div id="pagina">
        <div class="barra-menu">
            <a href="#" id="btn-drop" class="btn-menu aln-centro">MENU</a>  
            <ul id="submenu" class="lista-menu aln-centro">
                <li><a id="med" href="index.html">Media Queries</a></li>
                <li><a id="pxtoems" href="pxtoems.html">Units</a></li>
                <li><a id="ven" href="prefix.html">Vendor Prefixes</a></li>
                <li><a id="fil" href="filter.html">Image Filters</a></li>
                <li><a id="clip" href="clip-path.html">Clip-paths</a></li>
                <li><a id="clip" href="svg-generator.html">SVGs</a></li>
                <li><a id="fonts" href="fontface-generator.html">Fonts</a></li>
                <li><a target="_blank" id="blog" href="http://blog.simplecss.eu">Blog</a></li>
                <li><a id="min" href="minify.html">Minify</a></li>
                <li><a id="break" href="breakpoints.html">Breakpoints</a></li>
                <li><a id="job" href="jobs.php" style="background-color: #f03861">Jobs</a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
      function launchModal(){
        $('#myModal').modal();
      }
      function launchPriceModal(){
        $('#priceModal').modal();
      }
      function launchWhyModal(){
        $('#whyModal').modal();
      }
    </script>
<div class="hero">
  <div class="primary-content">
  <h1 id="title">
    <span id="simple">Simple CSS</span> Jobs</h1>
    <p id="jobsforwho">the most cost effective job board on the market for <div class="type-wrap">
        <div id="typed-strings" style="display: none;">
            <p>Front End Developers</p>
            <p>UX Designers</p>
            <p>UI Developers</p>
            <p>Digital Artists</p>
            <p>Prototypers</p>
            <p>Wordpress Developers</p>
            <p>Web Engineers</p>
            <p>Graphic Designers</p>
            <p>Mobile Developers</p>
        </div>
        <span id="typed" style="white-space:pre;">Web</span>
    </div>
    </p>

    <div id="button-holder">
      <button id="post" type="button" class="btn btn-info btn-lg" onclick="launchModal();" data-toggle="modal" >Post a Job</button>
      <a id="see" href="why.html">Why advertise with us?</a>
    </div>



    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Post Job below</h4>
            <h6 id="exp">Each Job will be displayed for 30 days.<br>If your job is not filled by then we will give you another 30 days free of charge.</h6>
          </div>
          <div class="modal-body">
            
	<form action="process.php" method="post" class="form-horizontal" style="top:0px;">
		<fieldset>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company"><i class="fa fa-briefcase" aria-hidden="true"></i> Company</label>  
			  <div class="col-md-4">
			  <input id="textinput" name="company" type="text" placeholder="Company..." class="form-control input-md" required>
			  </div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="salary"><i class="fa fa-eur" aria-hidden="true"></i> Salary</label>
			  <div class="col-md-4">
				<select id="selectbasic" name="salary" class="form-control">
				  <option value="Negotiable">Negotiable</option>
				  <option value="20,000-30,000">20,000 - 30,000</option>
				  <option value="30,000-40,000">30,000 - 40,000</option>
				  <option value="40,000-50,000">40,000 - 50,000</option>
          <option value="50,000+">50,000+</option>
				  <option value="Contact for details">Contact for details</option>
				</select>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label>  
			  <div class="col-md-4">
			  <input id="textinput" name="location" type="text" placeholder="Location..." class="form-control input-md" required>
			  </div>
			</div>

			<!-- Multiple Radios (inline) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="duration"><i class="fa fa-clock-o" aria-hidden="true"></i> Duration</label>
			  <div class="col-md-4"> 
				<label class="radio-inline" for="radios-0">
				  <input type="radio" name="duration" id="radios-0" value="Full-time" checked="checked">
				  Full-time
				</label> 
        <label class="radio-inline" for="radios-0">
          <input type="radio" name="duration" id="radios-0" value="Part-time" checked="checked">
          Part-time
        </label> <br>
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
				<textarea class="form-control" id="textarea" placeholder="Enter job description..." name="description"></textarea>
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
			  <label class="col-md-4 control-label" for="url"><i class="fa fa-link" aria-hidden="true"></i> Link <br><span id="link-notice">(don't incude http://)</span></label>  
			  <div class="col-md-4">
			  <input id="textinput" name="url" type="text" placeholder="Applciation" class="form-control input-md" required="">
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="singlebutton"></label>
			  <div class="col-md-4">

				<script
				  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				  data-key="pk_live_lOFM5oQvtjmnvoHw3TXHT6BE"
				  data-amount="2499"
				  data-name="Michael Gannon"
				  data-description="Widget"
				  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
				  data-locale="auto"
				  data-zip-code="true"
				  data-currency="eur">
				</script>
			  
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
      $query = mysql_query("SELECT * FROM submit_job ORDER BY ID DESC"); 
    ?>


 <div class="row">
  <?php
     while ($row = mysql_fetch_array($query)) {?>
          <a id="web-link" target="_blank" href="http://<?php echo $row['url']; ?>">
            <div id="job-container" class="col-md-12">
              <div id="data-row" class="col-xs-12 col-sm-2 col-md-2"><span id="company"><i class="fa fa-briefcase" aria-hidden="true"></i> COMPANY</span><br>
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


    
    
<!--     <div id="price-holder">
      <span id="see" onclick="launchPriceModal()">See how we compare</span>
    </div> -->

  <br><br><br><br>

<!-- Indeed front end dev jobs -->
<!-- <style type='text/css'>#indJobContent{padding-bottom: 5px;}#indJobContent .company_location{font-size: 11px;overflow: hidden;display:block;}#indJobContent.wide .job{display:block;float:left;margin-right: 5px;width: 135px;overflow: hidden}#indeed_widget_wrapper{position: relative;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 13px;font-weight: normal;line-height: 18px;padding: 10px;height: auto;overflow: hidden;}#indeed_widget_header{font-size:18px; padding-bottom: 5px; }#indeed_search_wrapper{clear: both;font-size: 12px;margin-top: 5px;padding-top: 5px;}#indeed_search_wrapper label{font-size: 12px;line-height: inherit;text-align: left; margin-right: 5px;}#indeed_search_wrapper input[type='text']{width: 100px; font-size: 11px; }#indeed_search_wrapper #qc{float:left;}#indeed_search_wrapper #lc{float:right;}#indeed_search_wrapper.stacked #qc, #indeed_search_wrapper.stacked #lc{float: none; clear: both;}#indeed_search_wrapper.stacked input[type='text']{width: 150px;}#indeed_search_wrapper.stacked label{display: block;padding-bottom: 5px;}#indeed_search_footer{width:295px; padding-top: 5px; clear: both;}#indeed_link{position: absolute;bottom: 1px;right: 5px;clear: both;font-size: 11px; }#indeed_link a{text-decoration: none;}#results .job{padding: 1px 0px;}#pagination { clear: both; }</style><style type='text/css'> #indeed_widget_wrapper{ width: 100%; height: 350px; background: #FFFFFF;} #indeed_widget_wrapper{ border: 1px solid #DDDDDD; } #indeed_widget_wrapper, #indeed_link a{ color: #000000;} #indJobContent, #indeed_search_wrapper{ border-top: 1px solid #DDDDDD; } #indJobContent a { color: #00c; } #indeed_widget_header{ color: #000000; } </style> <script type='text/javascript'> var ind_pub = '6050976982044872'; var ind_el = 'indJobContent'; var ind_pf = ''; var ind_q = 'ux designer'; var ind_l = ''; var ind_chnl = 'none'; var ind_n = 4; var ind_d = 'http://ie.indeed.com'; var ind_t = 40; var ind_c = 30; </script> <script type='text/javascript' src='http://ie.indeed.com/ads/jobroll-widget-v3.js'></script> <div id='indeed_widget_wrapper' style=''> <div id='indeed_widget_header'>Jobs from Indeed</div> <div id='indJobContent' class=""></div> <div id='indeed_search_wrapper'> <script type='text/javascript'> function clearDefaults() { var formInputs = document.getElementById('indeed_jobform').elements; for(var i = 0; i < formInputs.length; i++) { if(formInputs[i].value == 'title, keywords' || formInputs[i].value == 'city or county') { formInputs[i].value = ''; } } } </script> <form onsubmit='clearDefaults();' method='get' action='http://ie.indeed.com/jobs' id='indeed_jobform' target="_new"> <div id="qc"><label>What:</label><input type='text' onfocus='this.value=""' value='title, keywords' name='q' id='q'></div> <div id="lc"><label>Where:</label><input type='text' onfocus='this.value=""' value='city or county' name='l' id='l'></div> <div id='indeed_search_footer'> <div style='float:left'><input type='submit' value='Find Jobs' class='findjobs'></div> </div> <input type='hidden' name='indpubnum' id='indpubnum' value='6050976982044872'> </form> </div> <div id='indeed_link'> <a title="Job Search" href="http://ie.indeed.com/" target="_new">jobs by <img alt=Indeed src='https://www.indeed.com/p/jobsearch.gif' style='border: 0;vertical-align: bottom;'> </a> </div> </div><br><br><br><br> -->

                            

<!-- Irish stack overflow -->
<!-- start feedwind code --> 
<!-- <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="2195/"></script>  -->
<!-- end feedwind code -->

<!-- Internatoinal stack overflow -->
<!-- start feedwind code --> 
<!-- <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="2194/"></script> --> 
<!-- end feedwind code -->

<!-- UX / UI Developer (Ireland) -->
<!-- start feedwind code --> 
<!-- <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="2136/"></script>  -->
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


<footer id="footer-container">
    <div id="share-buttons" style="position:initial;">

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
      <input id="donate"   type="image" src="img/button.png" border="none" name="submit" alt="PayPal - The safer, easier way to pay online!">
    </form>
    
</div>

</footer>
<script src="js/typed.js"></script>
<script type="text/javascript">
$(function(){
          $("#typed").typed({
              stringsElement: $('#typed-strings'),
              typeSpeed: 50,
              backDelay: 1000,
              loop: true,
            });
        });

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

</script>
</div>
</body>
</html>


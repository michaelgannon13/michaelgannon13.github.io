<!doctype html>
<html lang="en-US" class="export">
<head>

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
    <a id="bookmarkme" href="#" rel="sidebar" title="bookmark this page"><span id="b-text">Bookmark</span><img alt="simple-bookmark" id="bookmark" src="img/agenda.png"> </a>

<div id="pagina">
        <div class="barra-menu">
            <!-- Boton Desplegar/Replegar menú -->  <a href="#" id="btn-drop" class="btn-menu aln-centro">MENU</a>  
            <!-- Menú de navegación -->
            <ul id="submenu" class="lista-menu aln-centro">
                <li><a id="med" href="index.html">Media Queries</a></li>
                <li><a id="pxtoems" href="pxtoems.html">Units</a></li>
                <li><a id="ven" href="prefix.html">Vendor Prefixes</a></li>
                <li><a id="fil" href="filter.html">Image Filters</a></li>
                <li><a id="clip" href="clip-path.html">Clip-paths</a></li>
                <li><a id="break" href="minify.html">Minify</a></li>
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
    <p id="jobsforwho">Jobs for Web Designers, Front End Developers, Responsive Designers, Wordpress Developers, Angular Developers, User Experience Designers</p>
    <div id="button-holder">
      <button id="post" type="button" class="btn btn-info btn-lg" onclick="launchModal();" data-toggle="modal" >Post Job</button>
      <button id="postPre" type="button" class="btn btn-info btn-lg" onclick="launchModal();" data-toggle="modal" >Post Job ($20)</button>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Post Job below</h4>
          </div>
          <div class="modal-body">
            
  <form action="process.php" method="post" class="form-horizontal" style="top:0px;">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="company"><i class="fa fa-briefcase" aria-hidden="true"></i>Company</label>  
  <div class="col-md-4">
  <input id="textinput" name="company" type="text" placeholder="Company..." class="form-control input-md" required="">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="salary"><i class="fa fa-eur" aria-hidden="true"></i>Salary</label>
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
  <label class="col-md-4 control-label" for="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Location</label>  
  <div class="col-md-4">
  <input id="textinput" name="location" type="text" placeholder="Location..." class="form-control input-md" required="">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="duration"><i class="fa fa-clock-o" aria-hidden="true"></i>Duration</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="duration" id="radios-0" value="Permanent" checked="checked">
      Permanent
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="duration" id="radios-1" value="Contract">
      Contract
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="experience"><i class="fa fa-handshake-o" aria-hidden="true"></i>Experience</label>
  <div class="col-md-4">
    <select id="selectbasic" name="experience" class="form-control">
      <option value="Internship">Internship</option>
      <option value="1 year - 3 years">1 year - 3 years</option>
      <option value="3 year - 5 years">3 years - 5 years</option>
      <option value="5 year - 10 years">5 years - 10 years</option>
    </select>
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="skills"><i class="fa fa-code" aria-hidden="true"></i>Skills Required</label>
  <div class="col-md-4">
    <select id="selectmultiple" name="skills" class="form-control" multiple="multiple">
      <option value="HTML">HTML</option>
      <option value="CSS">CSS</option>
      <option value="Bootstrap/Foundation">Bootstrap/Foundation</option>
      <option value="Javascript">Javascript</option>
      <option value="Angular.js">Angular.js</option>
      <option value="Backbone.js">Backbone.js</option>
      <option value="Ember.js">Ember.js</option>
      <option value="Adobe Suite">Adobe Suite</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</label>  
  <div class="col-md-4">
  <input id="textinput" name="contact" type="text" placeholder="Contact..." class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="url"><i class="fa fa-television" aria-hidden="true"></i>Link</label>  
  <div class="col-md-4">
  <input id="textinput" name="url" type="text" placeholder="Applciation" class="form-control input-md" required="">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-primary">Submit</button>
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
      // $server = mysql_connect("mysql2779int.cp.blacknight.com", "u1429287_michael", "S@3+Nmr1K[?h|Tu5"); 
      // $db = mysql_select_db("db1429287_Jobs", $server); 
      // $query = mysql_query("SELECT * FROM submit_job"); 
    ?>

    <?php
      $server = mysql_connect("localhost", "root", "root"); 
      $db = mysql_select_db("db1429287_Jobs", $server); 
      $query = mysql_query("SELECT * FROM submit_job"); 
    ?>

<table class="table table-striped table-responsive">

  <thead>
    <tr>
      <th><i class="fa fa-briefcase" aria-hidden="true"></i>
        Company
      </th>
      <th><i class="fa fa-handshake-o" aria-hidden="true"></i>
        Experience
      </th>
      <th><i class="fa fa-map-marker" aria-hidden="true"></i>
        Location
      </th>
      <th><i class="fa fa-code" aria-hidden="true"></i>
        Skills
      </th>
      <th><i class="fa fa-eur" aria-hidden="true"></i>
        Salary
      </th>
      <th><i class="fa fa-clock-o" aria-hidden="true"></i>
        Duration
      </th>
      <th><i class="fa fa-television" aria-hidden="true"></i>
        Link
      </th>
      <th><i class="fa fa-envelope-o" aria-hidden="true"></i>
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
              <?php echo $row['skills'];?>
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

</body>
</html>


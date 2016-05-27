<?php
  /*  start the output buffer  */
  ob_start('compress_page');

  /*  xhtml code below  */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Michael Gannon | Front end Developer | UX/UI Designer | Project Manager</title>
    <meta name="keywords" content="web designer, cheap, web developer, UI designer, UX designer, good, experienced">
    <meta name="description" content="Official website of Michael Gannon; Front End Developer, UX/UI Designer, Project Manger">
  
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="css/font-awesome.min.css">  
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700, 900' rel='stylesheet' type='text/css'>    
    <link rel="shortcut icon" type="image/png" href="img/logo-compressed-fav.png"/>

    <script>
      $(function() {
        $( "#accordion" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: "none",
          animate: 300,
          activate: function(event, ui) {
            try {
                theOffset = ui.newHeader.offset();
                $('body,html').animate({ 
                    scrollTop: theOffset.top -83
                });
            } catch(err){}
          }
        });

        $("#typed").typed({
              stringsElement: $('#typed-strings'),
              typeSpeed: 50,
              backDelay: 1000,
              loop: true,
          });
      });


    </script>

<!--         <link href="css/bootstrap.min.css" rel="stylesheet">
 -->        <link href="css/style.css" rel="stylesheet"> 
 </head>

  <body data-spy="scroll" data-target="#navbar">
    <div class="container-fluid">

      <div id="section1" class="row">
        <a href="#section2"><i class="fa fa-angle-down arrow animated infinite bounce"></i></a>

        <div id="particles-js"></div>
        <div class="col-md-12"> 
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">
                  <img id="top-logo" class="logo-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABOAQMAAADsGyFHAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjALyAQAERAABz6K4cgAAAABJRU5ErkJggg=="<img class="vis-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwIAAAGxAQMAAADrs5MJAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAEBJREFUeNrtwTEBAAAAwqD1T20MH6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF4GpcIAAYESoh0AAAAASUVORK5CYII=">
</a>
                </div>
                <div id="navbar">
                  <ul class="nav navbar-nav">
                    <li><a href="#section1">Home</a></li>
                    <li><a href="#section2">Projects</a></li>
                    <li><a href="#section3">Experience</a></li> 
                    <li><a href="#bottom-contact">Contact</a></li> 
                  </ul>
                </div>  
              </div>
            </nav>
          <button id="trigger-overlay" type="button"><i class="fa fa-bars"></i></button>
          <div id="landing-greeting" class="landing-main">Michael Gannon<br>is a</div> 
          <div class="type-wrap">
              <div id="typed-strings">
                  <p>Web Developer</p>
                  <p>Project Manager</p>
                  <p>UX/UI Designer</p>
              </div>
              <span id="typed" style="white-space:pre;"></span>
          </div>
          
        </div>
      </div>
      <div id="section2" class="row">
        <div class="col-md-12" id="accordian-background">
        <div id="subheader-greeting">Projects</div>
          <div id="accordion">
            <h3 id="accordian-header-text"><span id="title-left">DODDLE / </span><span id="title-right">marketing material builder</span><!-- <div id="arrows"><i id="down-arrow" class="fa fa-angle-down" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 1); change();"></i></div> -->
            </h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Description</h4>
                  <p id="dropDown-content">

                    This was a redesign of the Visual ID artwork creation toolkit. The objective was to make the toolkit easier to navigate, easier to access and easier to understand for both Client side and Administration side. The old system contains a lot of functionality, which requires one to one training. Doddle comes with integrated walk through tours of major operation flows, video tutorials and a more intuitive user experience.
                  </p><br><br>
                  <p id="dropDown-content">
                    Doddle is integrated with the Stripe API for secure online payments, the Tawk API which enables live chat and the Facebook API which allows marketing materials to be shared on Facebook. One of the challenges with creating Doddle was writing HTML which was nested in Lasso Script and styling elements which were generated by Lasso on the fly.
                  </p><br><br>
                  <p id="dropDown-content">
                    The objective of Doddle is to be an entirely on-demand product that involved no client interfacing. It is a refined version of the current Visual ID toolkit which includes functionality to create your marketing materials, share them on Facebook and push promotions to Digital Screens.
                  </p><br><br>
                  
                </div>                
                <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp"> 
                  <h4 id="acc-dropdown-content-header">Technologies</h4>
                  <ol id="tech-list">
                    <li id="tech-item">HTML5</li>
                    <li id="tech-item">CSS3</li>
                    <li id="tech-item">Javascript & jQuery</li>
                    <li id="tech-item">Bootstrap 3</li>
                    <li id="tech-item">Vagrant</li>                    
                    <li id="tech-item">Facebook API</li>
                    <li id="tech-item">Tawk API</li>
                    <li id="tech-item">Stripe API</li>
                  </ol>
                </div>
                <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp">
                  <p id="dropDown-content">   
                  <!-- <div id="arrows"><i id="down-arrow" class="fa fa-angle-down" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 1); change();"></i></div>  -->         
<!--                   <img class="img-responsive" src="http://placehold.it/700x600">
 -->

<!-- Rotating images -->
<!--                     <script type="text/javascript">
                        $(function(){
                            //prepare Your data array with img urls
                            var dataArray=new Array();
                            dataArray[0]="img/bus-compressed.png";
                            dataArray[1]="img/Doddle-compressed.png";
                            dataArray[2]="img/letsGo-compressed.png";
                            dataArray[3]="img/mac-compressed.png";

                            //start with id=0 after 5 seconds
                            var thisId=0;

                            window.setInterval(function(){
                                $('#thisImg').attr('src',dataArray[thisId]);                                
                                thisId++; //increment data array id
                                if (thisId==3) thisId=0; //repeat from start
                            },2000);      
                        });
                    </script> -->
                  </p><br><br>
                  <p id="dropDown-content">
                    <a id="link" target="_blank" rel="noopener" href="http://doddleco.com/">Live Website</a><a id="link" target="_blank" rel="noopener" href="http://doddleco.com/">System Demo</a><br><br>
                  </p>
                </div>
            </div>

            <h3 id="accordian-header-text"><span id="title-left">DODDLECO / </span> <span id="title-right">website design</span>
            </h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Description</h4>

                  <p id="dropDown-content">
                    An information site to promote a new product from Visual ID called Doddle. Doddle is a marketing material builder that allows users to create point of sale content for print, web, digital screens and social media. It is a redesign of the Visual ID marketing material production system.
                  </p><br><br>
                  <p id="dropDown-content">
                   The website was built using the Wordpress CMS and a theme which was heavily customised to ensure mobile responsiveness and create a unique identity for the new product. The website includes Live chat which I manage as well as custom animations. This project involved extensive research into the Grocery, Butchery, Hospitality, Real Estate, Newsagents, D.I.Y, Beautician, Financial Broker & Sports markets to devise an accurate marketing strategy.
                  </p><br><br>
                  <p id="dropDown-content">
                    The site is essentially a single page site except for the blog and reseller section which were added later. The theme however was a multi-page template, so I had to restructure the landing page and customize a lot of the page functionality. Blogging was carried out twice a week and shared across all major platforms as well as using Yeost SEO and Google Analytics to monitor website activity.
                  </p>
                </div>
                <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp">
                    <h4 id="acc-dropdown-content-header">Technologies</h4>
                    <ol id="tech-list">
                      <li id="tech-item">Wordpress</li>
                      <li id="tech-item">Yeost SEO</li>
                      <li id="tech-item">CSS</li>
                      <li id="tech-item">PHP</li>
                      <li id="tech-item">Google Analytics</li>
                      <li id="tech-item">Tawk API</li>
                    </ol>
                </div>
                <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp">
                  <p id="dropDown-content">
                    <!-- <img class="img-responsive" width="750" height="479" src="img/Doddle-compressed.png"> -->
                    <img class="doddle-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAu4AAAHfAQMAAAA1Hc8cAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAENJREFUeNrtwTEBAAAAwqD1T20KP6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAM4GscEAAWaWhnQAAAAASUVORK5CYII=">

                  </p><br><br>
                  <p id="dropDown-content">
                    <a id="link" target="_blank" rel="noopener" href="http://www.doddleco.com/">Live Website</a><br><br>
                  </p>
                </div>
            </div>

            <h3 id="accordian-header-text"><span id="title-left">VISUAL ID / </span> <span id="title-right">website redesign</span>
            </h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Description</h4>
                  <p id="dropDown-content">
                    This was a redesign of the Visual ID website using the Wordpress CMS. The site is optimised for mobile, tablet and desktop. The site has also been integrated with the existing Visual ID blog and linked to all related social media platforms. The site is built from a theme and has been customized for a unique identity.
                  </p><br><br>
                  <p id="dropDown-content">
                    This project presented a great opportunity to learn how to use everybody's favourite content management system. Extensive security measure were taken to keep the data secure including changing the wp-admin address and also using Wordfence to track the site's traffic and all hack attemps. 
                  </p><br><br>
                  <p id="dropDown-content">
                    The objective was to bring a new look and feel to existing Visual ID website. Visual ID have a lot of products, partners, pricing plans and clients so the website has a lot of content which needed to be managed so the site visitor is not overwhelmed with information.
                  </p>
                </div>
                <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Technologies</h4>
                  <ol id="tech-list">
                    <li id="tech-item">Wordpress</li>
                    <li id="tech-item">Yeost SEO</li>
                    <li id="tech-item">CSS</li>
                    <li id="tech-item">PHP</li>
                    <li id="tech-item">Google Analytics</li>
                  </ol>
                </div>

                <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp">
                  <p id="dropDown-content">
                    <!-- <div id="arrows"> 
                        <i id="up-arrow" class="fa fa-angle-up" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 1); change();"></i>
                        <i id="down-arrow" class="fa fa-angle-down" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 3); change();"></i>
                    </div>  -->
                    <!-- <img width="770" height="443" class="img-responsive" src="img/vis.png"> -->
                    <img class="vis-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwIAAAGxAQMAAADrs5MJAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAEBJREFUeNrtwTEBAAAAwqD1T20MH6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF4GpcIAAYESoh0AAAAASUVORK5CYII=">

                  </p><br><br>
                  <p id="dropDown-content">
                    <a id="link"  target="_blank" rel="noopener" href="http://visualid.com/">Live Website</a><br><br>
                  </p>
                </div>
            </div>

            <h3 id="accordian-header-text"><span id="title-left">LETS GO / </span> <span id="title-right">elearning web application</span>
            </h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Description</h4>
                  <p id="dropDown-content">
                    The objecive was to develop an assistive technology that educates people with special needs on the importance of safety when it comes to public transport. Having worked with Saint John of Gods (SJOG) and the families of people with special needs I was always aware of how challenging it can be. This is what sparked the idea for Lets Go.
                  </p><br><br>
                  <p id="dropDown-content">
                    The initial stages involved low fidelity prototypes to illustrate to both my college supervisor and the SJOG staff the concept. Lets Go followed a user led design approach and for that reason, every design iteration was submitted to the SJOG staff and critiqued, from the font choice, to the accessibility, to the colours.
                  </p><br><br>
                  <p id="dropDown-content">
                    The refined concept had two core components: An educational drag and drop game for the SJOG clients built in Javascript and a
                    a score tracking system for the SJOG staff to monitor the clients progress in the game, the functionality of which was built in PHP and SQL.
                  </p>
                </div>
                <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Technologies</h4>
                  <ol id="tech-list">
                    <li id="tech-item">HTML5</li>
                    <li id="tech-item">CSS3</li>
                    <li id="tech-item">Javascript & jQuery</li>
                    <li id="tech-item">PHP</li>
                    <li id="tech-item">SQL</li>
                  </ol>
                </div>
                
                <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp">
                  <p id="dropDown-content">
                    <!-- <div id="arrows"> 
                        <i id="up-arrow" class="fa fa-angle-up" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 2); change();"></i>
                        <i id="down-arrow" class="fa fa-angle-down" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 4); change();"></i>
                    </div>  -->
                    <!-- <img width="770" height="343" class="img-responsive" src="img/letsGo-compressed.png"> -->
                    <img class="letsgo-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwIAAAFXAQMAAAArrmuWAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADdJREFUeNrtwTEBAAAAwqD1T20JT6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOBlg04AAW4UWnoAAAAASUVORK5CYII=">

                  </p><br><br>
                  <p id="dropDown-content">
                    <a id="link"  target="_blank" rel="noopener" href="http://www.moikel.com/game/">Live Website</a><br><br>
                  </p>
                </div>
            </div>

            <h3 id="accordian-header-text"><span id="title-left">QUICK TRIP / </span> <span id="title-right">fuel effieciency app</span>
            </h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp">
                <h4 id="acc-dropdown-content-header">Description</h4>
                <p id="dropDown-content">
                  Quick Trip is a native Android application that was designed and developed when I was in the Institute of Art, Design & Technology (IADT). It utilises the Google Maps API and asynchronous threads. Quick Trip estimates how much a car journey will cost a user based on the MPG of the car, how far the journey is and how much the user is paying for petrol. 
                </p><br><br>
                <p id="dropDown-content">
                  A MySQL database stores the cars and all other necessary information.The user selects their car and both destination points on the map and the distance is calculated asynchronously. This data is inserted into the cost formula along with the car MPG and price of fuel. The result appears asynchronously. 
                </p><br><br>
                <p id="dropDown-content">
                  The platform utilized was the Eclipse IDE, Android Developer Tools and GenyMotion and Vagrant were needed for the testing environment. This project developed my skills in Java, PHP, SQL, JSON and XML.<br>
                </p>
              </div>
                <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Technologies</h4>
                  <ol id="tech-list">
                    <li id="tech-item">Java</li>
                    <li id="tech-item">Eclipse IDE</li>
                    <li id="tech-item">Android SDK</li>                    
                    <li id="tech-item">PHP</li>
                    <li id="tech-item">SQL</li>
                    <li id="tech-item">Google Maps API</li>
                    <li id="tech-item">Axure</li>
                    <li id="tech-item">Genymotion</li>
                  </ol>
                </div>

                <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp">
                  <p id="dropDown-content">
                    <!-- <div id="arrows"> 
                        <i id="up-arrow" class="fa fa-angle-up" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 3); change();"></i>
                        <i id="down-arrow" class="fa fa-angle-down" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 5); change();"></i>
                    </div>  -->
                  <!-- <img class="img-responsive" width="340" height="530" src="img/quick-trip-compressed.png"> -->
                  <img class="quick-trip-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVQAAAISAQMAAACptaUaAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAC1JREFUeNrtwTEBAAAAwqD1T20KP6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4G9bGAAB1lLcNAAAAABJRU5ErkJggg==">

                  </p><br><br>
                <p id="dropDown-content">
                  <a id="link" target="_blank" rel="noopener" href="https://www.youtube.com/watch?list=PLME_KoX3Ju49Kn-BpU6aZjsFH-8isud_Q&v=1TRsDARj4vY">Concept Demo</a>
                  <a id="link" target="_blank" rel="noopener" href="https://www.youtube.com/watch?v=GzcPokY_sSQ&index=2&list=PLME_KoX3Ju49Kn-BpU6aZjsFH-8isud_Q">Interim Demo</a>
                  <a id="link" target="_blank" rel="noopener" href="https://www.youtube.com/watch?v=cTVl2j3ta8k&list=PLME_KoX3Ju49Kn-BpU6aZjsFH-8isud_Q&index=3">Final Demo</a><br><br>
                </p>
                </div>
            </div>

            <h3 id="accordian-header-text"><span id="title-left">STUDENT SEARCH / </span> <span id="title-right">restful web app</span></h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Description</h4>
                   <p id="dropDown-content">
                    This was a a single page web application which implements a REST API and allows CRUD functionality on a MongoDB database. This project outlined the benefits of a Mongo database over a MySQL database. It was also a good opportunity to become familiar with the templating engine Jade.
                  </p><br><br>
                  <p id="dropDown-content">
                    It also allowed me to see how back end javascript behaves and how it interacts with a Mongo Database. This project outlined to me how essential the node package manager is for any web developer aswell as a familiarity with the command line.
                  </p><br><br>
                  <p id="dropDown-content">
                    The purpose of this excercise was to understand how the technologies outlined function and interact with each other and as a result no emphasis was placed on the interface design. Hence no sexy photshop mockups!
                  </p><br><br>            
                </div>
                <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Technologies</h4>
                  <ol id="tech-list">
                    <li id="tech-item">Node</li>
                    <li id="tech-item">MongoDB</li>
                    <li id="tech-item">Express</li>
                    <li id="tech-item">Jade</li>
                    <li id="tech-item">Javascript</li>
                  </ol>
                </div>
                <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp">
                  <p id="dropDown-content">
                   <!--  <div id="arrows"> 
                        <i id="up-arrow" class="fa fa-angle-up" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 4); change();"></i>
                        <i id="down-arrow" class="fa fa-angle-down" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 6); change();"></i>
                    </div>  -->
<!--                   <img width="770" height="343" class="img-responsive" src="img/mong-compressed.png">
 -->                  <img class="mong-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwIAAAFXAQMAAAArrmuWAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADdJREFUeNrtwTEBAAAAwqD1T20JT6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOBlg04AAW4UWnoAAAAASUVORK5CYII=">
                  </p>
                </div>
            </div>

            <h3 id="accordian-header-text"><span id="title-left">THE GANNON TIMES / </span> <span id="title-right">responsive news site</span>
            </h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Description</h4>
                  <p id="dropDown-content">
                    This is a college project undertaken in order to learn the most popular responsive web design framework, Twitter Bootstrap. It was also essential for gaining an undertanding of web typography and web design principles. The objective was to use no colour until the very end and create a visually appealing page using just black and white, an appropriate font combination and making correct use of the space available.
                  </p><br><br>
                  <p id="dropDown-content">
                    The inspirations for this site came from the French newspaper 'Le Monde', 'The Financial Times' and 'The Boston Globe' news site. Extensive research was carried out on newspaper design trends dating back as far as 1630. Then two concept designs were drawn up in Photoshop and iterated again and again until they met the task objectives.
                  </p><br><br>         
                  <p id="dropDown-content">
                    JavaScript was used to start a timer every 30 minutes to emulate a feed of updates to the site. The clock at the top of the screen displays the current time of the device the site is being viewed on. <br><br>
                  </p>
                </div>
              <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp">
              <h4 id="acc-dropdown-content-header">Technologies</h4>
                  <ol id="tech-list">
                    <li id="tech-item">HTML5</li>
                    <li id="tech-item">CSS3</li>
                    <li id="tech-item">Bootstrap 3</li>
                    <li id="tech-item">Photoshop</li>
                  </ol>
              </div>
                <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp">
                  <p id="dropDown-content">
                    <!-- <div id="arrows"> 
                        <i id="up-arrow" class="fa fa-angle-up" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 5); change();"></i>
                        <i id="down-arrow" class="fa fa-angle-down" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 7); change();"></i>
                    </div>  -->
                  <!-- <img width="562" height="450" class="img-responsive" src="img/mac-compressed.png"> -->
                  <img class="mac-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAjIAAAHCAQMAAADPeLGeAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAeDR+kAABdezbqAAAAABJRU5ErkJggg==">

                  </p><br><br>
                  <p id="dropDown-content">
                  <a id="link"  target="_blank" rel="noopener" href="http://awesome184.websrvr.in/">Live Website</a><br><br>
                  </p>
                </div>
            </div>

            <h3 id="accordian-header-text"><span id="title-left">COUNSELLING BUSINESS / </span> <span id="title-right">responsive site</span>
            </h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Description</h4>
                  <p id="dropDown-content">
                  Responsive Web Design is going nowhere so I decided to make a RWD brochure site for my mother's new business venture. As a branding excercise I also designed custom business cards. The site uses CSS animations, has a contact form which relies on PHP for the back end handling and is built on Twitter Bootstrap.
                  </p>
                </div>
              <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp">
              <h4 id="acc-dropdown-content-header">Technologies</h4>
                  <ol id="tech-list">
                    <li id="tech-item">HTML5</li>
                    <li id="tech-item">CSS3</li>
                    <li id="tech-item">Bootstrap 3</li>
                  </ol>
              </div>
                <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp">
                  <p id="dropDown-content">
                  <!-- <div id="arrows"> 
                        <i id="up-arrow" class="fa fa-angle-up" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 6); change();"></i>
                        <i id="down-arrow" class="fa fa-angle-down" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 8); change();"></i>
                    </div>  -->
                    <img class="bus-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwIAAAJNAQMAAAC4C1D2AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAE9JREFUeNrtwQENAAAAwqD3T20ON6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgF8D4XoAAfVIk1EAAAAASUVORK5CYII=">

<!--                     <img id="add" width="770" height="589" class="img-responsive" src="img/bus-compressed.png">
 -->                  </p><br><br>
                  <p id="dropDown-content">
                    <a id="link"  target="_blank" rel="noopener" href="http://marygannoncounsellor.com/">Live Website</a><br><br>
                  </p>
                </div>
            </div>              

            <h3 id="accordian-header-text"><span id="title-left">LETS PAINT / </span> <span id="title-right">drawing application</span>
            </h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp">
                  <h4 id="acc-dropdown-content-header">Description</h4>
                  <p id="dropDown-content">
                    This college project was an opportunity to get up to speed with HTML5 canvas. The objective was to create a drawing application that rapidly drew filled circles along each path the mouse was clicked and dragged. The radius of the circles could be changed in the toolbar on the left along with the colour.
                  </p><br><br>
                  <p id="dropDown-content">
                    Lets Paint has the option to undo your work by clicking and holding the undo button which redraws the path but in reverse. The user is also given the option to change the canvas background colour and interact with it using the up, down, left and right arrow keys which draws random shapes at various sizes in random colours around the canvas. 
                  </p><br><br>
                  <p id="dropDown-content">
                    This assignment illustrated to me the practicality of using jQuery over Javascript where possible, for web animations in particular.
                  </p>
                </div>
                <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp">
                <h4 id="acc-dropdown-content-header">Technologies</h4>
                  <ol id="tech-list">
                    <li id="tech-item">HTML5 Canvas</li>
                    <li id="tech-item">CSS3</li>
                    <li id="tech-item">Javascript & jQuery</li>
                  </ol>
                </div>
                <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp">
                  <p id="dropDown-content">
                    <!-- <div id="arrows"> 
                        <i id="up-arrow" class="fa fa-angle-up" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 7); change();"></i>
                        <i id="down-arrow" class="fa fa-angle-down" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 9); change();"></i>
                    </div>  -->
                    <!-- <img width="770" height="433" style="width:100%;" class="img-responsive" src="img/paint-compressed.png"> -->
                    <img class="paint-compressed" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwIAAAGxAQMAAADrs5MJAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAEBJREFUeNrtwTEBAAAAwqD1T20MH6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF4GpcIAAYESoh0AAAAASUVORK5CYII=">

                  </p><br><br>       
                  <p id="dropDown-content">
                    <a id="link"  target="_blank" rel="noopener" href="http://www.moikel.com/paintApp.html">Live Website</a><br><br>
                  </p>
                </div>
            </div> 

            <h3 id="accordian-header-text"><span id="title-left">MUSEUM GAME / </span> <span id="title-right">elearning game</span>
            </h3>
            <div id="accordian-dropdown-container">
              <div id="accordian-dropDown-left" class="col-md-4 col-sm-8 animated fadeInUp bottom-acc-container">
                <h4 id="acc-dropdown-content-header">Description</h4>
                 <p id="dropDown-content">
                    This was a joint project carried out in college for the Dun Laoghaire Maritime Museum. Despite being a language that is considered 'dead', Action Script is a very practical way of learning how to code and has similarities to Javascript. 
                  </p><br><br>
                  <p id="dropDown-content">
                    The objective of the game was to document the life of Robert Halpin, a famous sailor by way of an educational Flash game and also videos created using Adobe After Effects. The project was selected from the class to be put on display in the Dun Laoghaire Maritime Museum. I have not yet been to see it yet because I did the voice overs for the videos and am simply too embarrassed! 
                  </p><br><br>         
                  
                </div>
                <div id="accordian-dropDown-left" class="col-md-2 col-sm-4 animated fadeInUp bottom-acc-container">
                  <h4 id="acc-dropdown-content-header">Technologies</h4>
                  <ol id="tech-list">
                  <li id="tech-item">Photoshop</li>
                    <li id="tech-item">After Effects</li>
                    <li id="tech-item">Action Script 3</li>
                  </ol>
                </div>
                  <div id="accordian-dropDown-right" class="col-md-6 col-sm-12 animated fadeInUp bottom-acc-container">
                  <p id="dropDown-content">
                  <!-- <div id="arrows"> 
                        <i id="up-arrow" class="fa fa-angle-up" aria-hidden="true" onclick="$('#accordion').accordion('option', 'active', 8); change();"></i>
                    </div>  -->
                    <button id="flash" onclick="startFlash()">start flash</button>
                    <div id="flashContainer"></div>
                  </p>
                </div>
            </div>            
          </div>
        </div>
      </div>
      <div id="section3" class="row">
        <div class="col-md-12">
        <section id="timeline">
          <div class="timeline">
              <canvas id="cvs3"></canvas>
              <article>
                  <h2 id="exp-edu">Education</h2>          
                  <figure>
                      <figcaption id="left-items">Web Engineering</figcaption>
                      <h6>2012 - 2015<br>INSTITUTE OF ART, DESIGN & TECHNOLOGY</h6>
                      <p>
                        I studied Multimedia Programming and Web Engineering in IADT. Some of the things covered were languages and frameworks such as HTML5, CSS3, Javascript & jQuery, Java, XML, JSON, SQL as well as the Android SDK, Twitter Bootstrap, Backbone.js, ASP.NET, MongoDB, Node & npm.<br>
                        <a  target="_blank" rel="noopener" href="http://www.iadt.ie/en/ProspectiveStudents/FacultiesCourses/FacultyofFilmArtCreativeTechnologies/DL836-BScHonoursinCreativeComputing/">Course curriculum</a>
                      </p>
                  </figure>
                  <figure>
                      <figcaption id="left-items">Web Design</figcaption>
                      <h6>2011<br>DUBLIN BUSINESS SCHOOL</h6>
                      <p>
                        I undertook a night course in DBS in 2011 in Web Design and SEO during my gap year. I studied the fundamentals of HTML, CSS, SEO and Photoshop. The objective of this course was to get a taste of programming and web development.<br>
                        <a target="_blank" rel="noopener" href="http://www.dbs.ie/course/professional-evening-diploma/diploma-in-web-design">Course curriculum</a>
                      </p>
                  </figure>
                  <figure>
                      <figcaption id="left-items">Civil Engineering</figcaption>
                      <h6>2008 - 2011<br>DUBLIN INSTITURE OF TECHNOLOGY</h6>
                      <p>
                        I studied Civil Engineering for three years in DIT. Despite not influencing my choice of career path it did teach me the thought process behind problem solving, the importance of attention to detail and also tools such as Auto CAD.<br>
                        <a target="_blank" rel="noopener" href="https://www.dit.ie/catalogue/Programmes/Details/DT004">Course curriculum</a>
                      </p>
                  </figure>
              </article>

              <article>
                  <h2 id="exp-edu">Experience</h2>
                  <figure>
                      <figcaption id="right-items">Visual ID</figcaption>
                      <h6>2015 - 2016<br>FRONT END DEVELOPER / PROJECT MANAGER</h6>
                      <p>
                        As Front End Developer I am responsible for the design, functionality & maintenance of all client side access points. This consists of the Visual ID and Doddle brochure site aswell as the Doddle web application.
                      </p> 
                      <p>
                        As Project Manager of Doddle my responsibilities include all design and functionality relating to Doddle, scheduling and chairing Scrum meetings, preparing meeting minutes, ensuring all Doddle deadlines are met and interfacing with Doddle clients and partners.
                        <br>
                        <a href="#section2">Visual ID Work</a>.
                      </p>  
                  </figure>
                  <figure>
                      <figcaption id="right-items">Upstream Digital</figcaption>
                      <h6>2013<br>SYSTEM TESTER</h6>
                      <p>
                        As System Tester, my responsibilities included testing out client sites on various hardware and software platforms and logging the results using Jira and Confluence. This work provided a good insight into the importance of system testing before release.
                      </p>
                  </figure>
                  <figure>
                      <figcaption id="right-items">Tech-Space</figcaption>
                      <h6>2012 & 2013 (SUMMER) <br>TEACHER</h6>
                      <p>
                         During college I volunteered at Tech Space as a Web Design and animation teacher. We carried out 2 week crash courses on topics such as the fundamentals of HTML, CSS, Photoshop, After Effects and Action Script. 
                      </p>
                  </figure>
              </article>
              <br style="clear:both" />
          </div>
        </section>

        <!--
          <div id="subheader-greeting">Who Am I? <i class="fa fa-user"></i></div>
          <div>developer // designer // problem solver</div>
         

          I enjoy turning complex problems into simple, beautiful and intuitive interface designs. When I'm not coding or pushing pixels, you'll find me in the gym or on the court shooting hoops.

          I develop modern, highly interactive, responsive websites & web apps with cutting edge technologies such as AngularJS and React.

          I love great design and my passion is to "make it real" by blending colors and shapes with meaningful transitions in order to achieve the best user experience.

          I'm strongly focused on modularity and maintainability and I pay great attention to details.

          Over the past few years I've been lucky enough to work with agencies in UK and USA for brands such as Google, Land Rover, Billabong, Ferrero, Converse, Carlsberg and many others. I'm also author for Codrops and I like to experiment with JavaScript on my own projects and Codepen.

          About this Website

          This site has been designed and built by hand from the ground up. It's handled through AngularJS and animated with the fantastic GreenSock Animation Platform.

          The CSS is written in Sass, with a mobile first approach and this modular scale for a more meaningful typography.

          Everything is optimised for speed, browser compatibility and SEO.

          i write clean, elegant and efficient code, ive a passion for designing functional and beautiful user experiences.

          I enjoy turning complex problems into simple, beautiful and intuitive interface designs. When I'm not coding or pushing pixels, you'll find me in the gym or on the court shooting hoops.-->

        </div>
      </div>
      <div id="section3-a" style="visibility:hidden;">
        <div class="container" style="display: -webkit-box;">

        <div id="subheader-greeting" class="tl-mobile">Timeline</div>
         <div class="education-mob">
           <h2 id="tl-head">Education</h2>
              <h5 id="tl-sub-head-left">Web Engineering<br></h5>
              <h6 id="mob-info">2012 - 2015<br>INSTITUTE OF ART, DESIGN & TECHNOLOGY</h6>
              <p id="mob-para" class="col-md-4">I studied Multimedia Programming and Web Engineering in IADT. Some of the things covered were languages and frameworks such as HTML5, CSS3, Javascript & jQuery, Java, XML, JSON, SQL as well as the Android SDK, Twitter Bootstrap, Backbone.js, ASP.NET, MongoDB, Node & npm.
              Course curriculum </p><br><br>

              <h5 id="tl-sub-head-left">Web Design<br></h5>
              <h6 id="mob-info">2011<br>DUBLIN BUSINESS SCHOOL</h6>
              <p id="mob-para" class="col-md-4">I undertook a night course in DBS in 2011 in Web Design and SEO during my gap year. I studied the fundamentals of HTML, CSS, SEO and Photoshop. The objective of this course was to get a taste of programming and web development.
              Course curriculum</p><br><br>
    

              <h5 id="tl-sub-head-left">CIVIL ENGINEERING<br></h5>
              <h6 id="mob-info">2008 - 2011<br>DUBLIN INSTITURE OF TECHNOLOGY</h6>
              <p id="mob-para" class="col-md-4">I studied Civil Engineering for three years in DIT. Despite not influencing my choice of career path it did teach me the thought process behind problem solving, the importance of attention to detail and also tools such as Auto CAD.
              Course curriculum </p><br><br>
         </div>

         <div class="exp-mob">
           <h2 id="tl-head">Experience</h2>
              <h5 id="tl-sub-head-right">Visual ID<br></h5>
              <h6 id="mob-info">2015 - 2016<br>FRONT END DEVELOPER / PROJECT MANAGER</h6>
              <p id="mob-para-right" class="col-md-4">As Front End Developer I am responsible for the design, functionality & maintenance of all client side access points. This consists of the Visual ID and Doddle brochure site aswell as the Doddle web application.<br><br>As Project Manager of Doddle my responsibilities include all design and functionality relating to Doddle, scheduling and chairing Scrum meetings, preparing meeting minutes, ensuring all Doddle deadlines are met and interfacing with Doddle clients and partners. 
              Visual ID Work. </p><br><br>

              <h5 id="tl-sub-head-right">Upstream Digital<br></h5>
              <h6 id="mob-info">2013<br>SYSTEM TESTER</h6>
              <p id="mob-para-right" class="col-md-4">As System Tester, my responsibilities included testing out client sites on various hardware and software platforms and logging the results using Jira and Confluence. This work provided a good insight into the importance of system testing before release.</p><br><br>
    

              <h5 id="tl-sub-head-right">Tech Space<br></h5>
              <h6 id="mob-info">2012 & 2013<br>TEACHER</h6>
              <p id="mob-para-right" class="col-md-4">During college I volunteered at Tech Space as a Web Design and animation teacher. We carried out 2 week crash courses on topics such as the fundamentals of HTML, CSS, Photoshop, After Effects and Action Script. </p><br><br>
         </div>
      </div>
      </div>



      <div id="section4" class="row">
        <div id="creep" class="col-md-12">
            <div id="bottom-contact" class="contact-bottom">Contact</div>
            <div id="bottom-container">
              <div id="contact-message">Do you have an idea for a project?</div>
              <div id="sub-contact-message">Just get in touch and I'd be happy to discuss it with you.</div>
            </div>
            <div id="bottom-top-holder" class="col-md-4">
            <i class="fa fa-envelope-o" aria-hidden="true"></i><br>
              <span id="build-something">Wanna email?</span><br>
              <div id="email-container">
<!--                 <span id="email-phone"><a id="mail" href="mailto:michael.gannon13@gmail.com">michael.gannon13@gmail.com</a></span>
 -->                <span id="email-phone"><a id="mail" href="mailto:michael.gannon13@gmail.com">michael.gannon13@gmail.com</a></span>
              </div>
            </div>  
            <div id="bottom-middle-holder" class="col-md-4">
            <i class="fa fa-eye" aria-hidden="true"></i><br>
              <span id="build-something">Wanna Creep?</span><br>
              <div id="social-holder">
                <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/michael-gannon-4758198b?trk=hp-identity-name" class="icon-button twitter">
                  <i class="fa fa-linkedin"></i><span></span>
                </a>
                <a target="_blank" rel="noopener" href="https://github.com/michaelgannon13" class="icon-button facebook">
                    <i class="fa fa-github"></i><span></span>
                </a>
                <a target="_blank" rel="noopener" href="https://plus.google.com/u/0/108718574853096050583" class="icon-button google-plus">
                    <i class="fa fa-google-plus"></i><span></span>
                </a>
                <a target="_blank" rel="noopener" href="cv.pdf" class="icon-button cv">
                    <i class="fa fa-file-pdf-o"></i><span></span>
                </a>
              </div>
            </div>
            <div id="bottom-bottom-holder" class="col-md-4">
            <i class="fa fa-phone" aria-hidden="true"></i><br>
              <span id="wanna-quote">Wanna chat?</span><br>
              <div id="email-container">
                <span id="email-phone">+353 879240500</span>
              </div>
            </div> 
        </div>
        <div id="googlemaps" class="col-md-12">
        </div>
        <footer id="bottom-copyright" class="col-md-12">© 2016 Michael Gannon All Rights Reserved</footer>
      </div>
      </div>
    </div> <!-- container-fluid end -->
    <div class="overlay overlay-hugeinc">
      <button type="button" class="overlay-close">Close</button>
      <nav>
        <ul>
          <li><a class="menu-hide1" href="#section1">Home</a></li>
          <li><a class="menu-hide2" href="#section2">Projects</a></li>
          <li><a class="menu-hide3" href="#section3-a">Experience</a></li>
          <li><a class="menu-hide4" href="#bottom-contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <script>
        function initMap() {
          var map = new google.maps.Map(document.getElementById('googlemaps'), {
            center: {lat: 53.3004978, lng: -6.2838544},
            zoom: 14, 
            scrollwheel: false
          });

          marker = new google.maps.Marker({
             position: {lat: 53.3004978, lng: -6.2838544},
             map: map,
             animation: google.maps.Animation.DROP
         });
        }
</script>

    <script defer src="http://maps.googleapis.com/maps/api/js?KEY=AIzaSyDo-JOylQbwsUyvizO5EQknCMnPqB3WVjMsensor=false&callback=initMap"></script> 

<!--     <script src="https://maps.googleapis.com/maps/api/js?KEY=AIzaSyDo-JOylQbwsUyvizO5EQknCMnPqB3WVjM" async defer></script>
 -->
    <!-- classie & demo1 are needed for monbile menu. they have been minified and concatonated into modernizr and so has typed.js -->
    <!-- <script async type="text/javascript" src="js/classie-min.js"></script>
    <script async type="text/javascript" src="js/demo1-min.js"></script> -->
    <script  type="text/javascript" src="js/modernizr.custom-min.js"></script> 
<!--     <script type="text/javascript" src="js/bootstrap.min.js"></script>   
 -->    <script type="text/javascript">

      $(document).ready(function(){
        // arrow smooth scroll
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });

        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 750) { 
              $('.navbar').addClass('solid');
              $('#top-logo').fadeIn(1000);
          } else {
              $('.navbar').removeClass('solid');
              $('#top-logo').fadeOut(1000);
          }
        });

        function change(){
          $('h3#accordian-header-text').addClass("active");
        };

        $("h3#accordian-header-text").click(function() {
          var $this = $(this);        
          $("h3#accordian-header-text").removeClass("active");
          $this.addClass("active");
        });
     
    // function showGoogleMaps() {
     
    //     var latLng = new google.maps.LatLng(position[0], position[1]);
    //     var mapOptions = {
    //         streetViewControl: false, // hide the yellow Street View pegman
    //         scaleControl: true, // allow users to zoom the Google Map
    //         mapTypeId: google.maps.MapTypeId.ROADMAP,
    //         center: latLng,
    //         zoom: 14,                        // set the zoom level manually
    //         zoomControl: false,
    //         scrollwheel: false,
    //     };
     
    //     map = new google.maps.Map(document.getElementById('googlemaps'),
    //         mapOptions);
     
    //     // Show the default red marker at the location
    //     marker = new google.maps.Marker({
    //         position: latLng,
    //         map: map,
    //         draggable: false,
    //         animation: google.maps.Animation.DROP
    //     });
    // }
     
    // google.maps.event.addDomListener(window, 'load', showGoogleMaps);

    /* ---- particles.js config ---- */
        
      /* ---- stats.js config ---- */

      // var count_particles, stats, update;
      // stats = new Stats;
      // stats.setMode(0);
      // stats.domElement.style.position = 'absolute';
      // stats.domElement.style.left = '0px';
      // stats.domElement.style.top = '0px';
      // document.body.appendChild(stats.domElement);
      // count_particles = document.querySelector('.<<<j></j>></j>></j>s-count-particles');
      // update = function() {
      //   stats.begin();
      //   stats.end();
      //   if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      //     count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
      //   }
      //   requestAnimationFrame(update);
      // };
      // requestAnimationFrame(update);

      });
    </script>

  </body>
</html>

<?php
  /*  end the buffer, echo the page content  */
  ob_end_flush();

  /*  function that gets rid of tabs, line breaks, and extra spaces  */
  function compress_page($buffer) {
    $search = array('/>[^S ]+/s', '/[^S ]+</s', '/(s)+/s');
    $replace = array('>', '<', '1');
    return preg_replace($search, $replace, $buffer);
  }
?>
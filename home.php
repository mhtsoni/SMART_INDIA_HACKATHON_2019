<?php
session_start();
include 'database.php';
$url = "https://api.thingspeak.com/channels/707462/feeds.json?results=2";
$obj = json_decode(file_get_contents($url),true);

    function todaysData($d,$m,$sum){
        include "database.php";
        $year=date("Y");
        $query="SELECT*FROM `$year`";
        $ans=mysqli_query($link,$query);
        $row=mysqli_fetch_all($ans);
        
    if($d==1){
        
            for($j=0;$j<31;$j++){
                $bill+=$row[$j][$m-1];
            }
                $emailTo = $row['email'];

    $subject = "Monthly Bill";

    $body = "Dear Costumer This is to inform that Your Monthly bill is $bill";

    $headers = "From: coddictors.co";

    mail($emailTo, $subject, $body, $headers);
            
    }
        for($i=2;$i<$m+1;$i++){
            for($j=0;$j<31;$j++){
                $sum-=$row[$j][$i];
            }
        }
        for($k=0;$k<$d-1;$k++){
            $sum-=$row[$k][$m+1];
        }
            echo " Today you used <span style='font-size:30px; color:blue'><b>$sum</b></span> Liters of Water";
        $query="UPDATE `$year` SET `$m` = '$sum' WHERE `day`= '$d'";
        mysqli_query($link,$query);
        
        $x=$_SESSION["user"];
        $query="SELECT*FROM `login` WHERE `username` LIKE 'mohit'";
        $ans=mysqli_query($link,$query);
        $row=mysqli_fetch_array($ans);
        if($sum>$row['water_limit']*0.9){   
    $emailTo = $row['email'];

    $subject = "90% Crossed";

    $body = "Dear Costumer This is to inform that you have currently crossed the 90% of the alloted Water Limit";

    $headers = "From: coddictors.co";

    mail($emailTo, $subject, $body, $headers);
        }
        else if($sum<$row['water_limit']/2){
    $emailTo = $row['email'];

    $subject = "50% Crossed";

    $body = "Dear Costumer This is to inform that you have currently crossed the 50% of the alloted Water limit";

    $headers = "From: coddictors.co";

    mail($emailTo, $subject, $body, $headers);
        }
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Lobster);

body {
  text-align: center;
  background-color: #FFF;
}

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coddictors</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">    <!-- Google web font "Open Sans" -->    
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">            <!-- Font awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">                              <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                 <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    
    <link rel="stylesheet" href="css/templatemo-style.css">                               

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

    <body>
              <?php
        if(!isset($_SESSION["user"])){
        $x=$_SESSION["user"];
        $query="SELECT*FROM login WHERE username LIKE 'mohit'";
        $ans=mysqli_query($link,$query);
        $row=mysqli_fetch_array($ans);
        $row=mysqli_fetch_array($ans);
        echo '        
        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->  
            <div class="cd-slider-nav">
                <nav class="navbar">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                    <div class="collapse navbar-toggleable-sm text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active selected">
                                <a class="nav-link" href="#0" data-no="1">Intro <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0" data-no="2">This Day</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0" data-no="3">Previous Reports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#0" data-no="4">Set Water Limits</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div> 

            <ul class="cd-hero-slider">  <!-- autoplay -->
                <li class="selected">
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-1" data-page-no="1">
                            
                            <div class="row">
                            
                                <div class="col-xs-12">
                                    <i style="color:black;" class="fa fa-4x fa-pie-chart tm-icon"></i>
                                    <h2 class="tm-site-name"><span style="font-size:60px; color:grey;">W</span>ater</h2>
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-1-col">
                                   <div id="google_translate_element"></div>
                                       <p style="text-align:justify;" class="tm-text"><b>How To :-</b></p>
                                        <p style="text-align:justify;" class="tm-text">The app contains 2 sections named "This Day" and "Previous Reports". Just<b> go to "This Day" </b>Section and <b>find the realtime Water Usage</b> of the current day or<b> go to the "Previous Days"</b> section and find the Water usage of any previous days then <b>click the "download reports" button</b> and <b>track Water usage of the whole year</b>.</p>


                                        
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div> <!-- .cd-full-width -->
                </li>

                <li>
                    <div class="cd-full-width">

                        <div class="container-fluid js-tm-page-content" data-page-no="2">
                            <div class="row">
                            
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox">
                                            <p style="text-align:center"></p>
                                        <p style="text-align:center">';?>
                                        <span style="color:blue; cursor:pointer" onclick="window.location.href='json.html'">Click Here</span> to see <b>Datailed Usage Analytics.</b><br><br><br>
                                        <?php
            todaysData(date("d"),date("m"),$obj['feeds'][0]['field3']/1000);
                                        echo '
                                        
                                        </p>
                                        
 
                                        </div>


                            </div>
                        </div>
                                                
                    </div> <!-- .cd-full-width -->

                </li>
                
                
                <li>
                    <div class="cd-full-width">

                        <div class="container-fluid js-tm-page-content" data-page-no="3">
                            <div class="row">
                            
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox">
                                        <p><b>Enter The Date
                                        To Get <br>The Details Of Water <br> Usage Of That Day</b></p>
                                        <form action="reports/report.php" method="get">
                                           <input style="border:2px solid white;" type="date" name="dat"><br>
                                           <input style="position:relative; left:50px; top:10px; border:2px solid white;
                                           background-color:white;" type="submit">
                                           </form>
                                                                                                                      
                                           </div>

                            </div>
                        </div>
                                                
                    </div> <!-- .cd-full-width -->

                </li>
                
                
                
                
                <li>
                    <div class="cd-full-width">

                        <div class="container-fluid js-tm-page-content" data-page-no="4">
                            <div class="row">
                            
                                        <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox">
                                        <p><b>Enter The Water
                                        Limit <br>To Get Notified When <br> You Cross The Limit </b></p>
                                        <form action="limit.php" method="get">
                                           <input style="border:2px solid white;" type="text" name="limit"  placeholder="Limit"><br>
                                           <input style="position:relative; left:50px; top:10px; border:2px solid white;
                                           background-color:white;" type="submit">
                                           </form>
                                                                                                                      
                                           </div>

                            </div>
                        </div>
                                                
                    </div> <!-- .cd-full-width -->

                </li>
                
            </ul> <!-- .cd-hero-slider -->
            
            <footer class="tm-footer">
            
                <div class="tm-social-icons-container">
                    <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                </div>
                
                <p class="tm-copyright-text">Copyright &copy; 2016 Your Company - Design: <a href="" target="_blank">Coddictor</a></p>

            </footer>
                    
        </div> <!-- .cd-hero -->
        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>';
        }
        else{
            header('Location: index.php');
        }
        ?>
        <!-- load JS files -->
        
   
        
        
        
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <script>
        
        
        

            function adjustHeightOfPage(pageNo) {
               
                // Get the page height
                var totalPageHeight = 15 + $('.cd-slider-nav').height()
                                        + $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 160
                                        + $('.tm-footer').height();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }

            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery pop up
                -----------------------------------------*/
                $('.tm-img-gallery').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    adjustHeightOfPage( currentPageNo );
                });
        
                // Remove preloader
                // https://ihatetomatoes.net/create-custom-preloading-screen/
                $('body').addClass('loaded');
                           
            });
            
            
            
        function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element')};
        </script>
        
             
        
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
<?php
session_start();
ob_start();
?>   

<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie"lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9"  class="ie"lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie"lang="en-US">
<![endif]-->

<!-- This doesn't work but i prefer to leave it here... maybe in the future the MS will support it... i hope... -->
<!--[if IE 10]>
<html id="ie10"  class="ie"lang="en-US">
<![endif]-->


<!--[if !IE]>
<html lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />



    <title>FolkFlow</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />
    <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='usquare-css-css'  href='sliders/usquare/css/frontend/usquare_style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7CMuli%7CDroid+Sans%7CArbutus+Slab%7CAbel&#038;ver=3.5.1' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='polaroid-slider-css'  href='sliders/polaroid/css/polaroid.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ahortcodes-css'  href='css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-css'  href='css/contact_form.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />

    <style type="text/css">
            body { background-color: #ffffff; background-image: url('images/bg-pattern.png'); background-repeat: repeat; background-position: top left; background-attachment: scroll; }
    </style>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    

</head>
<!-- END HEAD -->
<!-- START BODY -->
<?php
include "navbar.php";
?>            
    <!-- START HEADER -->
    <div id="header" class="group margin-bottom">

        <div class="group container">
            <div class="row" id="logo-headersidebar-container">
                <!-- START LOGO -->
                <div id="logo" class="span6 group">
                    <a id="logo-img" href="index.php" title="FolkFlow">
                        <img src="images/folkflow.png" title="FolkFlow" alt="FolkFlow" />
                    </a>
                        <p id='tagline'> Feel the flow...</p>
                </div>
                <!-- END LOGO -->

                <!-- START HEADER SIDEBAR -->
                <div id="header-sidebar" class="span6 group">
                    <div class="widget-first widget header-text-image">
                        <div class="text-image" style="text-align:left">
                            <img src="images/phone1.png" alt="CUSTOMER SUPPORT" />
                        </div>

                        <div class="text-content">
                            <h3>CUSTOMER SUPPORT</h3>
                            <p>+355 69 87 65 432</p>
                        </div>
                    </div>

                    <div class="widget-last widget widget_text">
                         <div class="textwidget">
                            <div class="socials-default-small facebook-small default">
                                <a href="https://www.facebook.com/FolkFlow-2018812448399002/?modal=admin_todo_tour " class="socials-default-small default facebook" >facebook</a>
                            </div>
                            
                            <div class="socials-default-small twitter-small default">
                                <a href="https://twitter.com/FOLKFLOW1?lang=de" class="socials-default-small default twitter" >twitter</a>
                            </div>

                            <div class="socials-default-small pinterest-small default">
                                <a href="https://www.instagram.com/folkflow1/" class="socials-default-small default instagram" >instagram</a>

                            </div>
                         </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN FLEXSLIDER SLIDER -->
        <div id="slider-polaroid-0" class="slider slider-polaroid polaroid no-responsive" style="height:300px;">
            <div class="thumbs  container">
                <div class="thumb">
                    <img src="images/slider/flexslider/01-150x150.png" alt="images/slider/flexslider/01.png" />
                    <div class="slide-content container align-right" style="background-image:url('images/slider/flexslider/01.png');">
                        <div class="text">
                            <h2>Folk Flow is the first website for albanian folklore.</h2>
                            <p>
                                Best place if you are interested in albanian music. Best kinds of music especially folkloric music !
                            </p>
                        </div>
                    </div>
                </div>

                <div class="thumb">
                    <img src="images/slider/flexslider/cls150-150.png" alt="images/slider/flexslider/celsi.jpg" />
                    <div class="slide-content container align-right" style="background-image:url('images/slider/flexslider/celsi.jpg');">
                     <div class="text">
                            <h2>Famous Albanian Music Sheet! Available only here!</h2>
                            <p>
                                "Folk Flow" is dedicated to pass on the tradition of albanian folkloric music.Buy now your music sheet
                            </p>
                    </div>
                </div>
            </div>

                <div class="thumb">
                    <img src="images/slider/flexslider/celsi150-150.png" alt="images/slider/flexslider/Kombetare.jpg" /> 
                    <div class="slide-content container align-right" style="background-image:url('images/slider/flexslider/Kombetare.jpg');">
                        <div class="text">
                            <h2>The first Albanian Music Webshop. Check our products now!!</h2>
                            <p>
                                You can easily buy sheets. If you have interesting infomation about albanian folkloric music
                                then you can share it here!
                                "Folk Flow"
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('#slider-polaroid-0').polaroid({
                    animation: '100%',
                    pause: 8000,
                    animationSpeed: 800 
                              });
            });
        </script>

        <div class="mobile-slider">
            <div class="slider fixed-image container">
                <img src="images/slider/flexslider/fixed-polaroid.jpg" alt="" />
            </div>
        </div>
    </div>

    <!-- END HEADER -->

    <!-- START PRIMARY -->
    



                   

                    
                    <!-- START COMMENTS -->
                    <div id="comments"></div>
                    <!-- END COMMENTS -->
                </div>
            <!-- END CONTENT -->

            <!-- START EXTRA CONTENT -->

            <!-- END EXTRA CONTENT -->
    <!-- END PRIMARY -->
	<?php
        if(!isset($_SESSION['vname'])){		
    ?>
<div id="primary" class="sidebar-no">
        <div class="container group">

            <div class="row">
                <div id="content-home" class="span12 content group">

                    <form action="login.php" method="post">

                <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">E-Mail:</label>
                        <input id="textinput" name="email" type="email" class="form-control input-md">

                    </div>      
                <!-- Password input-->
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">                
                    </div> 
                <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <button type="submit" class="btn btn-default" name="sub">Login</button>               
                    </div>
			<?php
				if(isset($_POST["email"]) && isset($_POST["password"])){
					require 'dbconnect.php';
					$email=$_POST['email'];
					$pwd=$_POST['password'];
					$select="SELECT idP , vname , fname , password , userlv FROM User WHERE email= :email";
					$stmt=$dbh->prepare($select);
    
					$stmt->bindParam(":email" , $email);

					$stmt->execute();

					$result=$stmt->fetch(PDO::FETCH_ASSOC);
					//check pass
					//echo $pwd . " " . $result["password"];
					if(password_verify($pwd , $result["password"])){

						//pass ok
						$_SESSION['vname']=$result['vname'];
						$_SESSION['fname']=$result['fname'];
						$_SESSION['userlv']=$result['userlv'];
						$_SESSION['idP']=$result['idP'];
						$_SESSION['email']=$result['email'];
						header("Location:index.php");

					}else{
							echo "<div class='alert alert-danger'>Your information was incorrect!!!</div>";
					}
				}
					
			?>
					
					<script src='https://www.google.com/recaptcha/api.js'></script>
                         
                    </form>

                        <script type="text/javascript">
                            jQuery(function($){

                                $('.logos-slides').imagesLoaded(function(){
                                    $('.logos-slides').carouFredSel({
                                        auto: true,
                                        width: '100%',
                                        prev: '.logos-slider .prev',
                                        next: '.logos-slider .next',
                                        swipe: {
                                            onTouch: true
                                        },
                                        scroll : {
                                            items     : 1,
                                            duration  : 500             }
                                    });
                                });

                                $('.bwWrapper').BlackAndWhite({
                                    hoverEffect : true, // default true
                                    // set the path to BnWWorker.js for a superfast implementation
                                    webworkerPath : false,
                                    // for the images with a fluid width and height
                                    responsive:true,
                                    speed: { //this property could also be just speed: value for both fadeIn and fadeOut
                                        fadeIn: 200, // 200ms for fadeIn animations
                                        fadeOut: 300 // 800ms for fadeOut animations
                                    }
                                });

                                $("a.bwWrapper[href='#']").click(function(){ return false })

                            });
                        </script>

        </div>
    </div>
    </div>
</div>

<?php
    
?>

<?php
} else{
	echo "<div class='alert alert-danger'>You are already logged in!</div>";
}
?>

    <!-- START FOOTER -->
    <?php
    include "footer.php";
    ?>
    <!-- END FOOTER -->

    <!-- START COPYRIGHT -->
    
    <!-- END COPYRIGHT -->

    <div class="wrapper-border"></div>

    </div>
<!-- END WRAPPER -->

</div>
<!-- END BG SHADOW -->

<script type='text/javascript' src='js/comment-reply.min.js'></script>
<script type='text/javascript' src='js/underscore.min.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='sliders/polaroid/js/jquery.polaroid.js'></script>
<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.easing.js'></script>
<script type='text/javascript' src='js/jquery.carouFredSel-6.1.0-packed.js'></script>
<script type='text/javascript' src='js/jQuery.BlackAndWhite.js'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='sliders/polaroid/js/jquery.transform-0.8.0.min.js'></script>
<script type='text/javascript' src='sliders/polaroid/js/jquery.preloader.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/mobilemenu.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='js/jquery.placeholder.js'></script>
<script type='text/javascript' src='js/contact.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/jquery.cycle.min.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
<!-- END BODY -->
</html>
<?php
	ob_end_flush();
?>
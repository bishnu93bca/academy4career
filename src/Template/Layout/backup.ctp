<?php
$a=1;
$site_name='Academy4Career';
if(empty($a)){;?>
<!DOCTYPE html>
<html>
    <head>

        <?= $this->Html->charset() ?>
        <link rel="icon" href="<?php echo BASE_URL; ?>img/a4.png" type="image/x-icon" />
        <title>
        <?= $site_name ?>:
        <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <!-- Meta-Tags -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="keywords" content="" />
            <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //Meta-Tags -->

        <!-- Custom-Styleheet-Links -->
            
        <?= $this->Html->css(['custom/style','custom/animate-custom','//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700','//fonts.googleapis.com/css?family=Montserrat:400,700']) ?>
        

            
        <!-- //Custom-Styleheet-Links -->

        <!-- Fonts -->
        
        <!-- //Fonts -->

    </head>
    <!-- //Head -->
    <!-- Body -->
    <body>
    
        <div class="container  agileits">
                <div class="col-sm-3 col-md-5 logo">
                  <a href="index.html">
                  <?=$this->html->image('a4.png',['class'=>'img-responsive','style'=>'width:15%; float: left; margin-top: 4px;'])?>
                  <span class="highlight1">ACADEMY </span><span class="highlight2">FOR</span><span class="highlight3"> CAREER</span></a>
                </div>
               
           
            <div class="content-left  agileits">
                
                <div class="list  agileits">
                <h2 class="mainhead">India's Lasrgest Career guide company</h2>
                <p class="p1">High quality lessons for passionate learners by expert educators. <br />Join the revolutionary learning initiative.</p>
                
                    <ul class=" agileits">
                        <li class=" agileits"><a href="home.php">About Us</a></li>
                        <li class="li2  agileits"><a href="#">Services</a></li>
                        <li class=" agileits"><a href="#">Policy</a></li>
                        <li class="li2 agileits"><a href="terms.php">Terms and Conditions</a></li>
                        <li class=" agileits"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="content-right  agileits">
                <section>
                    <div id="container_demo">
                        <a class="hiddenanchor  agileits" id="tologin"></a>
                        <a class="hiddenanchor  agileits" id="toregister"></a>
                        <div id="wrapper">
                            <div id="login" class="animate  agileits form">
                                <h2 class=" agileits">Sign In</h2>
                                <form  action="validate.php" autocomplete="on" method="post">
                                    <label>E-mail</label>
                                    <input type="text" Name="email" required="">
                                    <label>Password</label>
                                    <input type="password" Name="password" required="">
                                    <div class="send-button agileits">
                                        <p><a href="#">Forgot Password?</a></p>
                                        
                                            <input type="submit" value="SIGN IN" name="signin">
                                        
                                        <div class="clear"></div>
                                    </div>
                                    <p class="change_link agileits">
                                        Don't have an account? <a href="#toregister" class="to_register">Sign Up!</a>
                                    </p>
                                    <div class="clear"></div>
                                </form>
                                <div class="social-icons agileits">
                                    <p>OR USE YOUR SOCIAL ACCOUNTS</p>
                                    <ul>
                                        <li class="fb w3ls agileits"><a href="#"><span class="icons agileits"></span><span class="text agileits">Facebook</span></a></li>
                                        <li class="twt w3ls agileits"><a href="#"><span class="icons agileits"></span><span class="text agileits">Google+</span></a></li>
                                        <div class="clear"></div>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div id="register" class="animate agileits form">
                                <h2>Sign up</h2>
                                <form  action="register.php" autocomplete="on" method="post">
                                    <form action="#" method="post">
                                        <label>Name</label>
                                        <input type="text" class="name agileits" Name="name" required="">
                                        <label>Phone Number</label>
                                        <input type="text" class="phone agileits" Name="mob" required="">
                                        <label>E-mail</label>
                                        <input type="text" Name="email" required="">
                                        <label>Password</label>
                                        <input type="password" Name="password" required="">
                            <div class="send-button agileits">
                                            
                                                <input type="submit" value="SIGN UP" name="signup">
                                            
                                        </div>
                                    </form>
                                    <p class="change_link agileits">
                                        Already a member? <a href="#tologin" class="to_register">Sign In</a>
                                    </p>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="clear"></div>
        </div>
    </body>
</html>
<?php }else{?>
<!-- Home index -->
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <link rel="icon" href="<?php echo BASE_URL; ?>img/a4.png" type="image/x-icon" />
        <title>
        <?= $site_name ?>:
        <?= $this->fetch('title') ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <?=$this->Html->css('bootstrap-3.1.1.min')?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?=$this->Html->script(['jquery.min','bootstrap.min'])?>
        <!-- Custom Theme files -->
        <?=$this->Html->css('style')?>
        <!--webfont-->
        <?=$this->Html->css(['//fonts.googleapis.com/css?family=Oswald:300,400,700','//fonts.googleapis.com/css?family=PT+Sans:400,700','//fonts.googleapis.com/css?family=Fugaz+One'])?>
        <!-- Owl Stylesheets -->
        <?=$this->Html->script(['move-top','easing'])?>
        <!--drop down-->
        <script>
        $(document).ready(function(){
            $(".dropdown").hover(            
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');        
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');       
                }
            );
        });
        </script>
        <!--font-Awesome-->
        <?=$this->Html->css(['font-awesome.min'])?>
        <!--font-Awesome-->
        <!--light-box-files -->
        <?=$this->Html->script(['jquery.chocolat'])?>
        <?=$this->Html->css(['chocolat'])?>
        <!--light-box-files -->
        <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.gallery a').Chocolat();
        });
        </script>
    <?php $active=$this->fetch('title');?>
    </head>
    <body>
        <div class="header">
            <?php $member_id=0; if(empty($member_id)){?>
                <div class="container-fluid">
                    
                    <div class="logo_right">
                       <div class="social">
                          <a href="" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>
                          <a href="" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
                          <a href="" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>
                          <a href="" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>
                          <a href="" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>
                       </div>
                    <!-- script for menu -->
                    <span class="menu"></span>
                    <div class="top-menu">
                        <ul>
                        
                        
                            
                            <li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#profileview"><i class="fa fa-user" aria-hidden="true"> </i> Welcome! </a></li>
                            <li><a href="logout.php" class="btn btn-default btn-default_2 pull-left"><i class="fa fa-sign-in" aria-hidden="true"> </i> Logout</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                    
                        <div class="modal fade" id="profileview" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog_2">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            <div class="head_4">
                                              <p>My Profile</p>
                                            </div>
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                     <form class="register" action="validate.php" method="post">
                                       <div class="section">
                                        <label for="username" class="field prepend-icon">
                                            <input type="text" name="email" id="username" placeholder="Email Id">
                                            <label for="username" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                       </div>
                                       <div class="section">
                                        <label for="password" class="field prepend-icon">
                                            <input type="password" name="password" id="password" placeholder="Password">
                                            <label for="password" class="field-icon">
                                                <i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                     </div>
                                     <div class="section">
                                        <div class="submit"><input type="submit" name="signin" value="Login"></div>
                                     </div>
                                     <ul class="new">
                                        <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
                                        <li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>
                                        <div class="clearfix"></div>
                                     </ul>
                                   </form>
                                </div>
                            </div>
                         </div>
                        </div>
                        
                      <div class="clearfix"></div>
                    </div>
                </div>
            <?php }else{?>
                <div class="container-fluid">
                
                        <div class="logo_right">
                           <div class="social">
                              <a href="" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>
                              <a href="" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
                              <a href="" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>
                              <a href="" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>
                              <a href="" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>
                           </div>
                            <!-- script for menu -->
                            <span class="menu"></span>
                            <div class="top-menu">
                                <ul>
                                
                                <li><a class="btn btn-default btn-default_2 pull-left"><i class="fa fa-envelope-o" aria-hidden="true"> </i> info@trayzon.com</a></li>
                                    
                                    <li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal"><i class="fa fa-sign-in" aria-hidden="true"> </i> Login</a></li>
                                    <li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1"><i class="fa fa-sign-in" aria-hidden="true"> </i> Register</a></li>
                                    
                                    
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                            <!-- Modal -->
                            <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog_2">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title" id="myModalLabel">
                                                <div class="head_4">
                                                  <p>Login</p>
                                                </div>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                         <form class="register" action="validate.php" method="post">
                                           <div class="section">
                                            <label for="username" class="field prepend-icon">
                                                <input type="text" name="email" id="username" placeholder="Email Id">
                                                <label for="username" class="field-icon">
                                                    <i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                           </div>
                                           <div class="section">
                                            <label for="password" class="field prepend-icon">
                                                <input type="password" name="password" id="password" placeholder="Password">
                                                <label for="password" class="field-icon">
                                                    <i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                         </div>
                                         <div class="section">
                                            <div class="submit"><input type="submit" name="signin" value="Login"></div>
                                         </div>
                                         <ul class="new">
                                            <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
                                            <li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>
                                            <div class="clearfix"></div>
                                         </ul>
                                       </form>
                                    </div>
                                </div>
                             </div>
                            </div>
                             <!-- Modal -->
                            <div class="modal fade" id="applyModal_1" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
                                <div class="modal-dialog dialog_3">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><div class="head_4">
                                                 <p>Register</p>
                                                </div></h4>
                                        </div>
                                        <form name="row" method="post" class="register" action="register.php">
                                            
                                            <div class="section">
                                              <label for="username" class="field prepend-icon">
                                                <input type="text" name="name" id="Mobile Number" placeholder="Name">
                                                <label for="mobile number" class="field-icon">
                                                    <i class="fa fa-phone"></i>
                                                </label>
                                              </label>
                                           </div>
                                            
                                            <div class="section">
                                              <label for="username" class="field prepend-icon">
                                                <input type="text" name="mob" id="Mobile Number" placeholder="Mobile Number">
                                                <label for="mobile number" class="field-icon">
                                                    <i class="fa fa-phone"></i>
                                                </label>
                                              </label>
                                           </div>
                                            
                                            <div class="section">
                                              <label for="username" class="field prepend-icon">
                                                <input type="text" name="email" id="Email id" placeholder="Email id">
                                                <label for="email id" class="field-icon">
                                                    <i class="fa fa-user"></i>
                                                </label>
                                              </label>
                                           </div>
                                           <div class="section">
                                             <label for="password" class="field prepend-icon">
                                                <input type="password" name="password" id="password" placeholder="Password">
                                                <label for="password" class="field-icon">
                                                    <i class="fa fa-lock"></i>
                                                </label>
                                             </label>
                                           </div>
                                           
                                           
                                           
                                           <div class="section">
                                              <div class="submit"><input type="submit" name="signup" value="Register"></div>
                                           </div>
                                          
                                      </form>
                                     </div>
                                </div>
                            </div>
                        
                            <div class="clearfix"></div>
                        </div>
                </div>
            <?php } ?>
            <div class="container-fluid">
                <div class="col-sm-3 col-md-5 logo">
                  <a href="home.php">
                    <?=$this->html->image('a4.png',["class"=>"img-responsive","style"=>"width:30%; float: left; margin-top: 4px;"])?>
                  <span class="highlight1">ACADEMY</span><span class="highlight2">4</span><span class="highlight3">CAREER</span></a>
                </div>
                <div class="help_line"><div id="txtblnk" style="display: block; opacity: 0.567858;"><p>NEED HELP : <i class="fa fa-phone" aria-hidden="true">  </i>  (+91)-2548713984</p></div></div>
            </div>
        </div>
        <nav class="navbar nav_bottom" role="navigation">
         <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header nav_2">
              <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
           </div> 
           <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li class="<?php if($active=='Homes'){echo 'current_page';}?>"><a href="index.html">Home</a></li>
                     <li class="dropdown <?php if($active=='Abouts'){echo 'current_page';}?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
                      <ul class="dropdown-menu drop_menu" role="menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Why We are different?</a></li>
                        <li><a href="#">Scholarship Finder</a></li>
                        <li><a href="#">Course Finder</a></li>
                        <li><a href="#">Entrance Exams</a></li>
                        <li><a href="#">Parents Corner</a></li>
                        <li><a href="faq.php">FAQs of Parents</a></li>
                        
                      </ul>
                    </li>
                    
                     <li class="dropdown <?php if($active=='Drexams'){echo 'current_page';}?> ">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dr.Exams<span class="caret"></span></a>
                      <ul class="dropdown-menu drop_menu" role="menu">
                        
                        <li><a href="#">Dr.Exams</a></li>
                       <li><a href="#">Entrance Materials</a></li>
                      </ul>
                    </li>
                    
                    <li class="dropdown <?php if($active=='Services'){echo 'current_page';}?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<span class="caret"></span></a>
                      <ul class="dropdown-menu drop_menu" role="menu">
                        <li><a href="careercouncelling.php">Career Councilling</a></li>
                        <li><a href="resumeservice.php">Resume Services</a></li>
                        <li><a href="fitnesskit.php">Fitness Kit</a></li>
                        
                
                       
                      </ul>
                    </li>
                     <li class="dropdown <?php if($active=='Careers'){echo 'current_page';}?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Career Test<span class="caret"></span></a>
                      <ul class="dropdown-menu drop_menu" role="menu">
                        
                         <li><?=$this->Html->link('Career Test',['controller'=>'Careers','action'=>'index'])?></li>
                       <li><?=$this->Html->link('Personality Test',['controller'=>'Careers','action'=>'index'])?></li>
                       <li><?=$this->Html->link('IAS MCQs',['controller'=>'Careers','action'=>'index'])?></li>
                       <li><?=$this->Html->link('Your Apptitude Score',['controller'=>'Careers','action'=>'index'])?></li>
                       <li><?=$this->Html->link('Know Your Skills',['controller'=>'Careers','action'=>'index'])?></li>
                       <li><?=$this->Html->link('Your SWOC Report',['controller'=>'Careers','action'=>'index'])?></li>
                    
                      </ul>
                    </li>
                    
                    <li class="dropdown <?php if($active=='A4cs'){echo 'current_page';}?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">A4C-Endowment Plan<span class="caret"></span></a>
                      <ul class="dropdown-menu drop_menu" role="menu">
                        <li><?=$this->Html->link('Study Materials',['controller'=>'A4cs','action'=>'index'])?></li>
                        <li><?=$this->Html->link('Tests',['controller'=>'A4cs','action'=>'index'])?></li>
                       
                      </ul>
                    </li>
                    <li class="<?php if($active=='Visitors'){echo 'current_page';}?>"><?=$this->Html->link('Visitors Dairy',['controller'=>'Visitors','action'=>'index'])?></li>
                    
                     <li class="dropdown <?php if($active=='Clubs'){echo 'current_page';}?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">A4C Club<span class="caret"></span></a>
                      <ul class="dropdown-menu drop_menu" role="menu">
                        <li><?=$this->Html->link('Study Room',['controller'=>'Clubs','action'=>'index'])?></li>
                        <li><?=$this->Html->link('Meet the Experts',['controller'=>'Clubs','action'=>'index'])?></li>
                        <li><?=$this->Html->link('Faculty',['controller'=>'Clubs','action'=>'index'])?></li>
                        <li><?=$this->Html->link('Quote for the Day',['controller'=>'Clubs','action'=>'index'])?></li>
                        <li><?=$this->Html->link('Notice Board',['controller'=>'Clubs','action'=>'index'])?></li>
                        <li><?=$this->Html->link('A4C Magazine',['controller'=>'Clubs','action'=>'index'])?></li>
                        <li><?=$this->Html->link('Important Links',['controller'=>'Clubs','action'=>'index'])?></li>
                        <li><?=$this->Html->link('Career Relevent Articles',['controller'=>'Clubs','action'=>'index'])?></li>
                        <li><?=$this->Html->link('Testimonials',['controller'=>'Clubs','action'=>'index'])?></li>
                    
                        
                      </ul>
                    </li>
                    
                    
                    <li class="<?php if($active=='Blogs'){echo 'current_page';}?>"><?=$this->Html->link('Blog',['controller'=>'Blogs','action'=>'index'])?></li>
                    <li class="<?php if($active=='Contacts'){echo 'current_page';}?>"><?=$this->Html->link('Contact Us',['controller'=>'Contacts','action'=>'index'])?></li>
                </ul>
                  
             </div><!-- /.navbar-collapse -->
           </div>
        </nav>
            <script type="text/javascript">
                    $(function() {
                        blinkeffect('#txtblnk');
                        })
                        function blinkeffect(selector) {
                        $(selector).fadeOut('slow', function() {
                        $(this).fadeIn('slow', function() {
                        blinkeffect(this);
                        });
                        });
                    }
            </script>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <div class="footer_widget">
                <div class="container">
                    <div class="col-md-4">
                        <aside id="text-1" class="widget widget_text">
                            <h3 class="widget-title"><span>COME VISIT US</span></h3>
                            <div class="textwidget"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                               <p><em style="color: #fff;">standard chunk.,<br> Finibus Bonorum,<br> Ipsum generators, treatise</em></p>
                            </div> 
                        </aside>
                    </div>
                    <div class="col-md-4">
                        <aside id="text-2" class="widget widget_text">
                            <h3 class="widget-title"><span>MORE ABOUT US</span></h3>
                            <div class="textwidget">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,.</p></div>
                        </aside>
                    </div>
                    <div class="col-md-4">
                        <aside>
                            <h3 class="widget-title"><span>FLICKR FEED</span></h3>
                            <ul class="gallery">
                                <li><a href="images/pic5.jpg" class="img-responsive" title="Rose" rel="title1">
                                    <?=$this->html->image('pic5.jpg',["class"=>"img-responsive"])?>
                                   </a>
                                </li>
                                <li><a href="images/pic6.jpg" class="img-responsive" title="Rose" rel="title1">
                                    <?=$this->html->image('pic6.jpg',["class"=>"img-responsive"])?>
                                   </a>
                                </li>
                                <li><a href="images/pic11.jpg" class="img-responsive" title="Rose" rel="title1">
                                    <?=$this->html->image('pic11.jpg',["class"=>"img-responsive"])?>
                                   </a>
                                </li>
                                <li class="last">
                                    <a href="images/pic12.jpg" class="img-responsive" title="Rose" rel="title1">
                                    <?=$this->html->image('pic12.jpg',["class"=>"img-responsive"])?>
                                   </a>
                                </li>
                                <li>
                                    <a href="images/pic6.jpg" class="img-responsive" title="Rose" rel="title1">
                                    <?=$this->html->image('pic6.jpg',["class"=>"img-responsive"])?>
                                   </a>
                                </li>
                                <li>
                                   <a href="images/pic5.jpg" class="img-responsive" title="Rose" rel="title1">
                                    <?=$this->html->image('pic5.jpg',["class"=>"img-responsive"])?>
                                   </a>
                                </li>
                                <li>
                                    <a href="images/pic11.jpg" class="img-responsive" title="Rose" rel="title1">
                                    <?=$this->html->image('pic11.jpg',["class"=>"img-responsive"])?>
                                   </a>
                                </li>
                                <li class="last">
                                    <a href="images/pic12.jpg" class="img-responsive" title="Rose" rel="title1">
                                    <?=$this->html->image('pic12.jpg',["class"=>"img-responsive"])?>
                                   </a>
                                </li>
                                <div class="clearfix"> </div>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_middle">
                <div class="container">
                    <div class="col-sm-7">
                      <div class="footer-icons"> 
                        <a href="#" class="social-icon"><i class="fa fa-twitter has-circle"></i></a> 
                        <a href="#" class="social-icon"><i class="fa fa-facebook has-circle"></i></a> 
                        <a href="#" class="social-icon"><i class="fa fa-google-plus has-circle"></i></a> 
                        <a href="#" class="social-icon"><i class="fa fa-linkedin has-circle"></i></a> 
                        <div class="clearfix"> </div>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="newsletter_signup">
                        <form novalidate="" target="_blank" name="newsletter-subscribe-form" id="newsletter-subscribe-form" method="post" class="form-inline validate">
                          <input type="email" required="" placeholder="Subscribe to our newsletter" class="form-control" name="EMAIL" value="">
                          <input type="submit" id="newsletter-subscribe" name="subscribe" value="SUBSCRIBE">
                        </form>
                      </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>      
            <div class="footer_bottom">
                <div class="container">
                    <div class="copy">
                        <p>Copyright © 2017. All Rights Reserved | Design by <a href="http://trayzon.com/" target="_blank">Trayzon Technologies</a> </p>
                    </div>
                </div>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">Top </span></a>
                  <?=$this->html->script(['move-top','easing'])?>
                  <script type="text/javascript">
                    $(document).ready(function() {
                        /*
                        var defaults = {
                            containerID: 'toTop', // fading element id
                            containerHoverID: 'toTopHover', // fading element hover id
                            scrollSpeed: 1200,
                            easingType: 'linear' 
                        };
                        */
                        
                        $().UItoTop({ easingType: 'easeOutQuart' });
                        
                    });
                  </script>
            </div>  
            <!--language selector-->
            
            <?=$this->html->script(['jquery.leanModal.min'])?>
            <?=$this->html->css(['jquery.uls','jquery.uls.grid','jquery.uls.lcd'])?>
            <!-- Source -->
            <?=$this->html->script(['jquery.uls.data','jquery.uls.data.utils','jquery.uls.lcd','jquery.uls.languagefilter','jquery.uls.regionfilter','jquery.uls.core'])?>
            <script>
                $( document ).ready( function() {
                    $( '.uls-trigger' ).uls( {
                        onSelect : function( language ) {
                            var languageName = $.uls.data.getAutonym( language );
                            $( '.uls-trigger' ).text( languageName );
                        },
                        quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
                    } );
                } );
            </script>       
            <!-- FlexSlider -->
            <?=$this->html->css(['flexslider'])?>
            <?=$this->html->script(['jquery.flexslider'])?>
                  <script type="text/javascript">
                    $(function(){
                      //SyntaxHighlighter.all();
                    });
                    $(window).load(function(){
                      $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                          $('body').removeClass('loading');
                        }
                      });
                    });
                  </script>
            <!-- FlexSlider -->     
    </body>
</html>
<?php } ?>
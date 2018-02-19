<!DOCTYPE HTML>
<html>
<head>
<?php $site_name='Academy4Career';?>
<?= $this->Html->charset() ?>
<link rel="icon" href="<?php echo BASE_URL; ?>img/a4.png" type="image/x-icon" />
<title><?php echo $site_name;?>:<?=$this->fetch('title')?></title>
 <?php 
 if(in_array($_SESSION->user_type_id, [1])){?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<?=$this->html->css(['bootstrap.min','style-admin','morris','font-awesome'])?>
<?=$this->html->script(['js/jquery-2.1.4.min'])?>
<?=$this->html->css(['//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400','//fonts.googleapis.com/css?family=Montserrat:400,700','icon-font.min'])?>
<?=$this->Html->css(['css/jquery.dataTables.min','css/buttons.dataTables.min'])?>
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
    <div class="left-content">
       <div class="mother-grid-inner">
             <!--header start here-->
                <div class="header-main">
                    <div class="logo-w3-agile">
                                <h1><?=$this->Html->link('A4C',['controller'=>'dashboards','action'=>'index'])?></h1>
                            </div>
                    <div class="w3layouts-left">
                            
                            <!--search-box-->
                                <div class="w3-search-box">
                                    <form action="#" method="post">
                                        <input type="text" placeholder="Search..." required=""> 
                                        <input type="submit" value="">                  
                                    </form>
                                </div><!--//end-search-box-->
                            <div class="clearfix"> </div>
                         </div>
                         <div class="w3layouts-right">
                            <div class="profile_details_left"><!--notifications of menu start -->
                                <ul class="nofitications-dropdown">
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 3 new messages</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                               <div class="user_img"><img scr="<?php echo BASE_URL;?>img/admin/in11.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                            </a></li>
                                            <li class="odd"><a href="#">
                                                <div class="user_img"><img scr="<?php echo BASE_URL;?>img/admin/in10.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                              <div class="clearfix"></div>  
                                            </a></li>
                                            <li>
                                                <a href="#">
                                               <div class="user_img"><img scr="<?php echo BASE_URL;?>img/admin/in9.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                                </a>
                                            </li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all messages</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 3 new notification</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                <div class="user_img"><img scr="<?php echo BASE_URL;?>img/admin/in8.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                              <div class="clearfix"></div>  
                                             </a></li>
                                             <li class="odd"><a href="#">
                                                <div class="user_img"><img scr="<?php echo BASE_URL;?>img/admin/in6.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li><a href="#">
                                                <div class="user_img"><img scr="<?php echo BASE_URL;?>img/admin/in7.jpg" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all notifications</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>   
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 8 pending task</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                    <div class="clearfix"></div>    
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar yellow" style="width:40%;"></div>
                                                </div>
                                            </a></li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                   <div class="clearfix"></div> 
                                                </div>
                                                <div class="progress progress-striped active">
                                                     <div class="bar green" style="width:90%;"></div>
                                                </div>
                                            </a></li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                    <div class="clearfix"></div>    
                                                </div>
                                               <div class="progress progress-striped active">
                                                     <div class="bar red" style="width: 33%;"></div>
                                                </div>
                                            </a></li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                   <div class="clearfix"></div> 
                                                </div>
                                                <div class="progress progress-striped active">
                                                     <div class="bar  blue" style="width: 80%;"></div>
                                                </div>
                                            </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all pending tasks</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>   
                                    <div class="clearfix"> </div>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                            <!--notification menu end -->
                            
                            <div class="clearfix"> </div>               
                        </div>
                        <div class="profile_details w3l">       
                                <ul>
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">   
                                                <span class="prfil-img"><?=$this->Html->image('admin/in4.jpg')?></span> 
                                                <div class="user-name">
                                                    <p>Admin</p>
                                                    <span>Administrator</span>
                                                </div>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                                <div class="clearfix"></div>    
                                            </div>  
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                            <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                                            <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
                                            <li><?= $this->Html->link(__("<i class='fa fa-sign-out'></i><span>Logout</span><div class='clearfix'></div>"), ['controller'=>'Users','action' => 'logout'], ['escape' => false]) ?></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            
                     <div class="clearfix"> </div>  
                </div>
<!--heder end here-->
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
    
<!-- script-for sticky-nav -->
        <script>
        $(document).ready(function() {
             var navoffeset=$(".header-main").offset().top;
             $(window).scroll(function(){
                var scrollpos=$(window).scrollTop(); 
                if(scrollpos >=navoffeset){
                    $(".header-main").addClass("fixed");
                }else{
                    $(".header-main").removeClass("fixed");
                }
             });
             
        });
        </script>
        <!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
     <p>© 2017 Academy 4 Career. All Rights Reserved | Design by  <a href="http://trayzon.in/" target="_blank">Trayzon</a> </p>
</div>  
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
            <!--/sidebar-menu-->
    <div class="sidebar-menu">
        <header class="logo1">
            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
        </header>
        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
           <div class="menu">
                <ul id="menu" >
                    <li><?= $this->Html->link(__("<i class='fa fa-tachometer'></i><span>Dashboard</span><div class='clearfix'></div>"), ['controller'=>'Dashboards','action' => 'index'], ['escape' => false]) ?> 
                    </li>
                    <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Club</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('User Type',['controller'=>'User-types','action' => 'index']) ?></li>
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Class',['controller'=>'Class','action' => 'index']) ?></li>
                       
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Subject',['controller'=>'Subjects','action' => 'index']) ?></li>
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Subject Topics',['controller'=>'Subjects-topics','action' => 'index']) ?></li>
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Class Test Series Question',['controller'=>'ClassTestSeriesQuestions','action' => 'index']) ?></li>
                       
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Level',['controller'=>'Levels','action' => 'index']) ?></li>
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Discipline',['controller'=>'Disciplines','action' => 'index']) ?></li>

                           
                      </ul>
                    </li>
                    <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>A4C Club</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Study Room',['controller'=>'Study-rooms','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Meet the Experts',['controller'=>'experts','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Faculty',['controller'=>'Facultys','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Quote for the Day',['controller'=>'Quoteforthe-days','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Notification Type',['controller'=>'notification-types','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Notification',['controller'=>'notifications','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('A4C Magazine',['controller'=>'a4-c-magazines','action' => 'index']) ?></li>
                         <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Important Links',['controller'=>'ImportantLinks','action' => 'index']) ?></li>
                          <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Career Relevent Articles',['controller'=>'career-relevent-articles','action' => 'index']) ?></li>
                           <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Testimonials',['controller'=>'Testimonials','action' => 'index']) ?></li>
                      </ul>
                    </li>
                    <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>About</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Scholarship',['controller'=>'Scholar-ships','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Course',['controller'=>'Courses','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Entrance Exams',['controller'=>'Entrance-exams','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Parents Doubts',['controller'=>'Parents-doubts','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Personality Tests',['controller'=>'personality-tests','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('IAS MCQs',['controller'=>'i-a-s-m-c-qs','action' => 'index']) ?></li>
                        
                      </ul>
                    </li>
                    <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Dr.Exams</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Dr.Exams',['controller'=>'dr-exams','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Entrance Materials',['controller'=>'Entrance-materials','action' => 'index']) ?></li>
                      </ul>
                    </li>
                    <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Services</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Career Councilling',['controller'=>'Career-councillings','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Resume Services',['controller'=>'Resume-services','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Fitness Kit',['controller'=>'Fitness-kits','action' => 'index']) ?></li>
                        
                      </ul>
                    </li>
                    <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Career</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Career Test',['controller'=>'Career-tests','action' => 'index']) ?></li>
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Career Test Type',['controller'=>'Career-test-types','action' => 'index']) ?></li>
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Career Question',['controller'=>'Career-questions','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Personality Test',['controller'=>'Personality-tests','action' => 'index']) ?></li>
                       

                      </ul>
                    </li>
                    <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>A4C-Endowment Plan</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Study Materials',['controller'=>'study-materials','action' => 'index']) ?></li>
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Student Test Series',['controller'=>'students-test-series','action' => 'index']) ?></li>
                       <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Student Test Series Result',['controller'=>'Students-test-series-results','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Tests',['controller'=>'Tests','action' => 'index']) ?></li>
                        <li id="menu-academico-avaliacoes" ><?= $this->Html->link('Questions',['controller'=>'Questions','action' => 'index']) ?></li>
                        
                      </ul>
                    </li>
                    <li><?= $this->Html->link(__("<i class='fa fa-tachometer'></i><span>Opening</span><div class='clearfix'></div>"), ['controller'=>'Opening','action' => 'index'], ['escape' => false]) ?></li>
                    <li><?= $this->Html->link(__("<i class='fa fa-tachometer'></i><span>Members</span><div class='clearfix'></div>"), ['controller'=>'members','action' => 'index'], ['escape' => false]) ?></li>
                    <li><?= $this->Html->link(__("<i class='fa fa-tachometer'></i><span>Visitors Dairy</span><div class='clearfix'></div>"), ['controller'=>'visitors-dairys','action' => 'index'], ['escape' => false]) ?></li>
                    
                    <li><?= $this->Html->link(__("<i class='fa fa-tachometer'></i><span>Blog</span><div class='clearfix'></div>"), ['controller'=>'blogs','action' => 'index'], ['escape' => false]) ?></li>
                    
                </ul>
            </div>
    </div>
    <div class="clearfix"></div>      
    </div>
                            <script>
                            var toggle = true;
                                        
                            $(".sidebar-icon").click(function() {                
                              if (toggle)
                              {
                                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                                $("#menu span").css({"position":"absolute"});
                              }
                              else
                              {
                                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                                setTimeout(function() {
                                  $("#menu span").css({"position":"relative"});
                                }, 400);
                              }
                                            
                                            toggle = !toggle;
                                        });
                            </script>
<!--js -->
<?=$this->Html->script(['js/jquery.nicescroll','js/scripts','js/bootstrap.min','js/raphael-min'])?>

<?=$this->Html->script(['js/jquery-1.12.4','js/jquery.dataTables.min','js/dataTables.buttons.min','js/buttons.flash.min','js/jszip.min','js/pdfmake.min','
js/vfs_fonts','js/buttons.html5.min','js/buttons.print.min'])?>
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });
       
       
       
    });
    </script>
</body>
</html>
<?php }else{?>
<!DOCTYPE HTML>
<html>
<head>
<title>Error</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<?=$this->html->css(['bootstrap.min','style-admin','morris','font-awesome','style','jquery-ui'])?>
<!-- Custom CSS -->
 
<!-- jQuery -->
<?=$this->html->script(['jquery-2.1.4.min'])?>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->

<?=$this->html->css(['icon-font.min'])?>
<!-- //lined-icons -->
</head> 
<body>
    <div class="main">
    <div class="container">
        <div class="agile">
            
            <div class="w3l-txt">
                <div class="text">
                    <h2>Error</h2> 
                    
                    <p><?= __d('cake', 'The requested address {0} was not found on this server.', "<strong>'{$_SERVER['REDIRECT_URL']}'</strong>") ?></p>
                </div>
                <div class="image">
                    
                    <?=$this->Html->image('admin/smile.png')?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="back">
                        <a href="<?=h(BASE_URL)?>">Home</a>
                </div>
                <div class="footer">
                    <p>Copyright © 2017. All Rights Reserved | Design by <a href="http://trayzon.com/" target="_blank">Trayzon Technologies</a> </p>
                </div>
                
                    
    </div>
    </div>
    </div>
</body>
</html>

<?php }?>
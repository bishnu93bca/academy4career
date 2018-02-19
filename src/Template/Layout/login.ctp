<!DOCTYPE HTML>
<html>
<head>
<?php $site_name='Academy4Career';?>
<?= $this->Html->charset() ?>
<link rel="icon" href="<?php echo BASE_URL; ?>img/a4.png" type="image/x-icon" />
<title><?= $site_name ?>:<?= $this->fetch('title') ?></title>
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

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
   <div class="back">
                    <a href="<?=h(BASE_URL);?>">Back to home</a>
                </div>
                <div class="footer">
                    <p>Copyright © 2017 Academy 4 Career. All Rights Reserved | Design by <a  href="http://trayzon.com/" target="_blank" title="Bishnu Ray" >Trayzon Technologies</a> </p>
                </div>
    </div>
    </div>
    </div>
</body>
</html>
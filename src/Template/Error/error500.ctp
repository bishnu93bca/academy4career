<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')):
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.ctp');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
<?php endif; ?>
<?php if ($error instanceof Error) : ?>
        <strong>Error in: </strong>
        <?= sprintf('%s, line %s', str_replace(ROOT, 'ROOT', $error->getFile()), $error->getLine()) ?>
<?php endif; ?>
<?php
    echo $this->element('auto_table_warning');

    if (extension_loaded('xdebug')):
        xdebug_print_function_stack();
    endif;

    $this->end();
endif;
?>
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
                    <h2><?= h($message) ?></h2> 
                    
                    <p><?= __d('cake', 'The requested address {0} was not found on this server.', "<strong>'{$url}'</strong>") ?></p>
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

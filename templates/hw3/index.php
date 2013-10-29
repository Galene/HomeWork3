<?php
// No direct access.
defined('_JEXEC') or die;

// check modules
$showRightColumn	= ($this->countModules('position-3') or $this->countModules('position-6') or $this->countModules('position-8'));
$showbottom			= ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
$showleft			= ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));

if ($showRightColumn==0 and $showleft==0) {
    $showno = 0;
}

JHtml::_('behavior.framework', true);

// get params
$color			= $this->params->get('templatecolor');
$logo			= $this->params->get('logo');
$navposition	= $this->params->get('navposition');
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params;

$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/md_stylechanger.js', 'text/javascript', true);
$doc->addStyleSheet($this->baseurl.'/templates/system/css/system.css');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/position.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/print.css', $type = 'text/css', $media = 'print');
$files = JHtml::_('stylesheet', 'templates/'.$this->template.'/css/general.css', null, false, true);
if ($files):
    if (!is_array($files)):
        $files = array($files);
    endif;
    foreach($files as $file):
        $doc->addStyleSheet($file);
    endforeach;
endif;

$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/md_stylechanger.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/hide.js', 'text/javascript');

//JHTML::stylesheet($filename, $path);
//$document =& JFactory::getDocument();
//$document->addStyleSheet("/css/style.css".'text/css',"screen");
//$doc->addStyleSheet(JURI::root().'/templates/'.$this->template.'/css/style.css'); //////
// $document->addCustomTag($stylelink); !!!

?>

<?php if(!$templateparams->get('html5', 0)): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php else: ?>
	<?php echo '<!DOCTYPE html>'; ?>
<?php endif; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >


<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css" media="screen,projection" />

</head>


<body>

<div id="wrap">

	<div id="header">
        <!--<h1 id="logo">

            <?php if ($logo != null ): ?>
                <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" />
            <?php else: ?>
                <?php echo htmlspecialchars($templateparams->get('sitetitle'));?>
            <?php endif; ?>
            <span class="header1">
					<?php echo htmlspecialchars($templateparams->get('sitedescription'));?>
					</span></h1>

        <!--<h1 id="logo">
            <?php echo $app->getCfg('sitename'); ?>
        </h1>-->
        <h1><a href="/">GeekHub</a></h1>

        <div class="nav">
        <?php if($this->countModules('atomic-topmenu') or $this->countModules('position-2') ) : ?>
            <jdoc:include type="modules" name="atomic-topmenu" style="container" />
            <jdoc:include type="modules" name="position-1" style="container" />
        <?php endif; ?>
            <span class="registration">
					<?php echo htmlspecialchars($templateparams->get('sitedescription'));?>
					</span>

        </div>


        <span class="line"></span>
        <img src="images/splash.png" alt="splash" />
	</div><!-- header -->

	<div id="content">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
	</div><!-- content -->


    <!--<div id="footer-sub">
        <p>footer-sub</p>

        <?php if (!$templateparams->get('html5', 0)): ?>
        <div id="footer">
            <?php else: ?>
            <footer id="footer">
                <?php endif; ?>

                <jdoc:include type="modules" name="position-14" />
                <p>
                    <?php echo JText::_('G');?> <a href="http://www.joomla.org/">Joomla!&#174;</a>
                </p>

                <?php if (!$templateparams->get('html5', 0)): ?>
        </div>
    <?php else: ?>
        </footer>
    <?php endif; ?><!-- end footer -->

    <div id="footer">
        <li>
        <?php if($this->countModules('footermenu') or $this->countModules('position-11')) : ?>
            <ul> <li>
                <jdoc:include type="modules" name="footermenu" style="container" />
                <jdoc:include type="modules" name="position-11" style="container" />
                </li></ul>
        <?php endif; ?>
        </li>

            <!--<jdoc:include type="modules" name="footermenu" />-->
        <div class="copyright">
            &copy;<?php echo date('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?>
        </div>

    </div>


</div>
</body>
</html>


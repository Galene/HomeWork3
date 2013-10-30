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


<body class="inner">

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

        <!--Social
        <?php if ($this->countModules('position-1')): ?>
            <jdoc:include type="modules" name="position-1" style="none" />
        <?php endif; ?>-->
        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
        </ul>
        <!--End Social -->

        <div class="nav">
        <?php if($this->countModules('atomic-topmenu') or $this->countModules('position-3') ) : ?>
            <jdoc:include type="modules" name="atomic-topmenu" style="container" />
            <jdoc:include type="modules" name="position-3" style="container" />
        <?php endif; ?>
        </div>
        <span class="line"></span>

        <!--<img src="images/splash.png" alt="splash" />-->
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

            <?php if($this->countModules('footermenu') or $this->countModules('position-11')) : ?>
                <li><ul> <li>
                        <jdoc:include type="modules" name="footermenu" style="container" />
                        <jdoc:include type="modules" name="position-11" style="container" />
                    </li></ul></li>
            <?php endif; ?>


        <!--<jdoc:include type="modules" name="footermenu" />-->
        <div class="copyright">
            &copy;<?php echo date('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?>
        </div>

    </div>

</div>
</body>
</html>


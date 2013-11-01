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
<?php
if ( JURI::current() != JURI::base() ) { echo 'class="inner"'; }
if ( JURI::current() == JURI::base()."contacts.html" ) { echo 'onload="initialize()"'; }
?>

<div id="wrap">

	<div id="header">
        <?php $app->getCfg('sitename'); ?>
        <h1><a href="/">GeekHub</a></h1>

        <div class="nav">
        <?php if($this->countModules('atomic-topmenu') or $this->countModules('position-3') ) : ?>
            <jdoc:include type="modules" name="atomic-topmenu" style="container" />
            <jdoc:include type="modules" name="position-3" style="container" />
        <?php endif; ?>
        </div>
        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
        </ul>
        <span class="line"></span>
	</div><!-- header -->

	<div >
        <jdoc:include type="message" />
        <jdoc:include type="component" />
	</div><!-- content -->

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


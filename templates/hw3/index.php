<?php
/**
 * @package		Joomla.Site
 */

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

	<link href="css/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/flipclock.css">

</head>


<body>
<div id="wrap">

	<div id="header">
        <div id="logo">
            <?php echo $app->getCfg('sitename'); ?>
        </div>

        <div id="menu">
            <jdoc:include type="modules" name="menu" style="xhtml" />
        </div>

        <span class="line"></span>
        <img src="images/splash.png" alt="splash" />
	</div><!-- header -->

	<div id="content">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
	</div><!-- content -->


    <ul id="footer">
        <jdoc:include type="modules" name="footer" style="xhtml" />

    </ul>
</div>
</body>
</html>


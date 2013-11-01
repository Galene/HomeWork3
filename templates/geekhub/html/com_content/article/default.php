<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$templateparams = $app->getTemplate(true)->params;
$images = json_decode($this->item->images);
$urls = json_decode($this->item->urls);
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcut to parameters.
$params = $this->item->params;

?>
<article class="item-page<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>

<?php if ($this->params->get('show_page_heading') and $params->get('show_title')) :?>
<hgroup>
<?php endif; ?>
<h1>
	<?php echo $this->escape($this->params->get('page_heading')); ?>
</h1>
<?php endif; ?>
<?php
if (!empty($this->item->pagination) && $this->item->pagination && !$this->item->paginationposition && $this->item->paginationrelative)
{
	echo $this->item->pagination;
}

if ($params->get('show_title')) : ?>
		<h2>
            <?php echo $this->escape($this->item->title); ?>
		</h2>
<?php endif; ?>
<?php if ($this->params->get('show_page_heading') and $params->get('show_title')) :?>
</hgroup>
<?php endif; ?>



	<?php if (isset ($this->item->toc)) : ?>
		<?php echo $this->item->toc; ?>
	<?php endif; ?>

<?php if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position == '0')) OR ($params->get('urls_position') == '0' AND empty($urls->urls_position)))
		OR (empty($urls->urls_position) AND (!$params->get('urls_position')))): ?>

	<?php echo $this->loadTemplate('links'); ?>
<?php endif; ?>
	<?php  if (isset($images->image_fulltext) and !empty($images->image_fulltext)) : ?>
	<?php $imgfloat = (empty($images->float_fulltext)) ? $params->get('float_fulltext') : $images->float_fulltext; ?>

	<div class="img-fulltext-"<?php echo htmlspecialchars($imgfloat); ?>">
	<img
		<?php if ($images->image_fulltext_caption):
			echo 'class="caption"'.' title="' .htmlspecialchars($images->image_fulltext_caption) .'"';
		endif; ?>
		src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext_alt); ?>"/>
	</div>
	<?php endif; ?>
<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND !$this->item->paginationrelative):
	echo $this->item->pagination;
endif;
?>
	<?php echo $this->item->text; ?>
<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND!$this->item->paginationrelative):
	echo $this->item->pagination;?>
<?php endif; ?>

	<?php if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position == '1')) OR ( $params->get('urls_position') == '1'))): ?>

	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
	echo $this->item->pagination;?>
<?php endif; ?>
	<?php echo $this->item->event->afterDisplayContent; ?>
</article>



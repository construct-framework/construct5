<?php // no direct access
defined('_JEXEC') or die('Restricted access');

$config =& JFactory::getConfig();
$publish_up =& JFactory::getDate($this->article->publish_up);
$publish_up->setOffset($config->getValue('config.offset'));
$publish_up = $publish_up->toFormat();

if (! isset($this->article->publish_down) || $this->article->publish_down == 'Never') {
	$publish_down = JText::_('Never');
} else {
	$publish_down =& JFactory::getDate($this->article->publish_down);
	$publish_down->setOffset($config->getValue('config.offset'));
	$publish_down = $publish_down->toFormat();
}
?>

<script language="javascript" type="text/javascript">
<!--
function setgood() {
	// TODO: Put setGood back
	return true;
}

var sectioncategories = new Array;
<?php
$i = 0;
foreach ($this->lists['sectioncategories'] as $k=>$items) {
	foreach ($items as $v) {
		echo "sectioncategories[".$i++."] = new Array( '$k','".addslashes( $v->id )."','".addslashes( $v->title )."' );\n\t\t";
	}
}
?>


function submitbutton(pressbutton) {
	var form = document.adminForm;
	if (pressbutton == 'cancel') {
		submitform( pressbutton );
		return;
	}
	try {
		form.onsubmit();
	} catch(e) {
		alert(e);
	}

	// do field validation
	var text = <?php echo $this->editor->getContent( 'text' ); ?>
	if (form.title.value == '') {
		return alert ( "<?php echo JText::_( 'Article must have a title', true ); ?>" );
	} else if (text == '') {
		return alert ( "<?php echo JText::_( 'Article must have some text', true ); ?>");
	} else if (parseInt('<?php echo $this->article->sectionid;?>')) {
		// for articles
		if (form.catid && getSelectedValue('adminForm','catid') < 1) {
			return alert ( "<?php echo JText::_( 'Please select a category', true ); ?>" );
		}
	}
	<?php echo $this->editor->save( 'text' ); ?>
	submitform(pressbutton);
}
//-->
</script>
<header class="componentheading<?php echo htmlspecialchars($this->params->get('pageclass_sfx')); ?>">
	<h2>
		<?php echo htmlspecialchars($this->params->get('page_title')); ?>
	</h2>
</header>

<?php endif; ?>

<form action="<?php echo $this->action ?>" method="post" name="adminForm" onSubmit="setgood();">
<fieldset>
<legend><?php echo JText::_('Editor'); ?></legend>
<table class="adminform" width="100%">
<tr>
	<td>
		<div style="float: left;">
			<label for="title">
				<?php echo JText::_( 'Title' ); ?>:
			</label>
			<input class="inputbox" type="text" id="title" name="title" size="50" maxlength="100" value="<?php echo htmlspecialchars($this->article->title); ?>" />
			<input class="inputbox" type="hidden" id="alias" name="alias" value="<?php echo htmlspecialchars($this->article->alias); ?>" />
		</div>
		<div style="float: right;">
			<button type="button" onclick="submitbutton('save')">
				<?php echo JText::_('Save') ?>
			</button>
			<button type="button" onclick="submitbutton('cancel')">
				<?php echo JText::_('Cancel') ?>
			</button>
		</div>
	</td>
</tr>
</table>

<?php
echo $this->editor->display('text', $this->article->text, '100%', '400', '70', '15');
?>
</fieldset>
<fieldset>
<legend><?php echo JText::_('Publishing'); ?></legend>
<table class="adminform">
<tr>
	<td class="key">
		<label for="sectionid">
			<?php echo JText::_( 'Section' ); ?>:
		</label>
	</td>
	<td>
		<?php echo $this->lists['sectionid']; ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="catid">
			<?php echo JText::_( 'Category' ); ?>:
		</label>
	</td>
	<td>
		<?php echo $this->lists['catid']; ?>
	</td>
</tr>
<?php if ($this->user->authorize('com_content', 'publish', 'content', 'all')) : ?>
<tr>
	<td class="key">
		<label for="state">
			<?php echo JText::_( 'Published' ); ?>:
		</label>
	</td>
	<td>
		<?php echo $this->lists['state']; ?>
	</td>
</tr>
<?php endif; ?>
<tr>
	<td width="120" class="key">
		<label for="frontpage">
			<?php echo JText::_( 'Show on Front Page' ); ?>:
		</label>
	</td>
	<td>
		<?php echo $this->lists['frontpage']; ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="created_by_alias">
			<?php echo JText::_( 'Author Alias' ); ?>:
		</label>
	</td>
	<td>
		<input type="text" id="created_by_alias" name="created_by_alias" size="50" maxlength="100" value="<?php echo htmlspecialchars($this->article->created_by_alias); ?>" class="inputbox" />
	</td>
</tr>
<tr>
	<td class="key">
		<label for="publish_up">
			<?php echo JText::_( 'Start Publishing' ); ?>:
		</label>
	</td>
	<td>
	    <?php echo JHtml::_('calendar', $publish_up, 'publish_up', 'publish_up', '%Y-%m-%d %H:%M:%S', array('class'=>'inputbox', 'size'=>'25',  'maxlength'=>'19')); ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="publish_down">
			<?php echo JText::_( 'Finish Publishing' ); ?>:
		</label>
	</td>
	<td>
	    <?php echo JHtml::_('calendar', $publish_down, 'publish_down', 'publish_down', '%Y-%m-%d %H:%M:%S', array('class'=>'inputbox', 'size'=>'25',  'maxlength'=>'19')); ?>
	</td>
</tr>
<tr>
	<td valign="top" class="key">
		<label for="access">
			<?php echo JText::_( 'Access Level' ); ?>:
		</label>
	</td>
	<td>
		<?php echo $this->lists['access']; ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="ordering">
			<?php echo JText::_( 'Ordering' ); ?>:
		</label>
	</td>
	<td>
		<?php echo $this->lists['ordering']; ?>
	</td>
</tr>
</table>
</fieldset>

<fieldset>
<legend><?php echo JText::_('Metadata'); ?></legend>
<table class="adminform">
<tr>
	<td valign="top" class="key">
		<label for="metadesc">
			<?php echo JText::_( 'Description' ); ?>:
		</label>
	</td>
	<td>
		<textarea rows="5" cols="50" style="width:500px; height:120px" class="inputbox" id="metadesc" name="metadesc"><?php echo str_replace('&','&amp;',$this->article->metadesc); ?></textarea>
	</td>
</tr>
<tr>
	<td  valign="top" class="key">
		<label for="metakey">
			<?php echo JText::_( 'Keywords' ); ?>:
		</label>
	</td>
	<td>
		<textarea rows="5" cols="50" style="width:500px; height:50px" class="inputbox" id="metakey" name="metakey"><?php echo str_replace('&','&amp;',$this->article->metakey); ?></textarea>
	</td>
</tr>
</table>
</fieldset>

<input type="hidden" name="option" value="com_content" />
<input type="hidden" name="id" value="<?php echo $this->article->id; ?>" />
<input type="hidden" name="version" value="<?php echo $this->article->version; ?>" />
<input type="hidden" name="created_by" value="<?php echo $this->article->created_by; ?>" />
<input type="hidden" name="referer" value="<?php echo str_replace(array('"', '<', '>', "'"), '', @$_SERVER['HTTP_REFERER']); ?>" />
<?php echo JHtml::_( 'form.token' ); ?>
<input type="hidden" name="task" value="" />
</form>
<?php echo JHtml::_('behavior.keepalive'); ?>

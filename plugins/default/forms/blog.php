<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    Zing Space Team <ken.mcgonigal@aegisnetworks.ca>
 * @copyright 2016 AegisNetworks
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$Blog = new Blog;
$Blog->pagename = 'blog';
$Blog = $Blog->getPage();
?>
<div>
	<label> <?php echo ossn_print('site:about'); ?> </label>
	<textarea name="pagebody" class="ossn-editor"><?php echo html_entity_decode($Blog->description); ?></textarea>
<div>
<div>
	<input type="submit" class="btn btn-primary" value="<?php echo ossn_print('save'); ?>"/>
</div>

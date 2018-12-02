<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
 ?>
 <div>
 	<label><?php echo ossn_print('blog:title');?></label>
    <input type="text" name="title" value="<?php echo $params['blog']->title;?>"/>
 </div>
 <div>
 	<label><?php echo ossn_print('blog:contents');?></label>
	 <?php	echo ossn_plugin_view('input/textarea', array(
				'class' => 'ossn-editor',
				'name'  => 'contents',
				'value' => html_entity_decode($params['blog']->description)
	)); ?>

 	<textarea name="contents" class="ossn-editor"><?php echo html_entity_decode($params['blog']->description); ?></textarea>
 </div>
 <div class="margin-top-10">
 	<input type="hidden" name="guid" value="<?php echo $params['blog']->guid;?>" />
 	<input type="submit" class="btn btn-success" value="<?php echo ossn_print('save');?>" />
 </div>
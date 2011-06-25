Search for posts
<?php echo $form->create('Post', array('url' => '/posts/view')); ?>
	<?php echo $ajax->autoComplete('Post.title', '/posts/auto_complete')?>
<?php echo $form->end('View Post')?>

<h2>Search for posts</h2>
<?php echo $this->Form->create('Post', array('url' => '/posts/view')); ?>
	<?php echo $this->Ajax->autoComplete('Post.title', '/posts/auto_complete')?>
<?php echo $this->Form->end('View Post')?>

<style type="text/css">
div.auto_complete    {
     position         :absolute;
     width            :250px;
     background-color :white;
     border           :1px solid #888;
     margin           :0px;
     padding          :0px;
}
li.selected    { background-color: #ffb; }
</style>
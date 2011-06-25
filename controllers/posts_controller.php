<?php
class PostsController extends AppController {
	
	function auto_complete() {
		//Partial strings will come from the autocomplete field as
		//$this->data['Post']['title'] 
		$this->set('posts', $this->Post->find('all', array(
					'conditions' => array(
						'Post.title LIKE' => $this->data['Post']['title'].'%'
					),
					'fields' => array('title')
		)));
		$this->layout = 'ajax';
	}

}
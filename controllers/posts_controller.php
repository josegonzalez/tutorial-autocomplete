<?php
class PostsController extends AppController {
	
	function auto_complete() {
		//Partial strings will come from the autocomplete field as
		//$this->data['Post']['subject'] 
		$this->set('posts', $this->Post->find('all', array(
					'conditions' => array(
						'Post.subject LIKE' => $this->data['Post']['subject'].'%'
					),
					'fields' => array('subject')
		)));
		$this->layout = 'ajax';
	}

}
<?php
class PostsController extends AppController {

	var $helpers = array('Ajax');

	function index() {
		
	}

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

	function view($id = null) {
		if (!empty($this->data['Post']['title'])) {
			$post = $this->Post->find('first', array(
				'conditions' => array('Post.title' => $this->data['Post']['title'])
			));

			if (!$post) {
				$this->Session->setFlash('Unable to find post');
				$this->redirect(array('action' => 'index'));
			}
			$this->redirect(array('action' => 'view', $post['Post']['id']));
		}

		if (!$id) {
			$this->Session->setFlash('Unable to find post');
			$this->redirect(array('action' => 'index'));
		}

		$post = $this->Post->find('first', array(
			'conditions' => array('Post.id' => $id)
		));

		if (!$post) {
			$this->Session->setFlash('Unable to find post');
			$this->redirect(array('action' => 'index'));
		}

		$this->set(compact('post'));
	}

}
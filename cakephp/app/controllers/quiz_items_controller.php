<?php

	class QuizItemsController extends AppController {
		var $helpers = array ('Html' , 'Form');
		var $name    = 'QuizItems';
		var $components = array('Session');
		# Adding actions to the controller
		function index() {
			$this->set('quiz_items', $this->QuizItem->find('all'));
		}

		function add() {
			if (!empty($this->data)) {
				if ($this->QuizItem->save($this->data)) {
					$this->Session->setFlash('Your quiz question has been saved.');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
	}

?>
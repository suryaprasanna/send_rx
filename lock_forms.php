<?php

class lock_form {
	var $username;
	var $pid;
	var $record_id;
	var $event_id;
	var $form_name;
	var $instance;
	var $lock_all;


	function lock_form ($username, $pid, $record_id, $event_id, $form_name, $instance=1, $lock_all= false) {
		$this->username = $username;
		$this->pid = $pid;
		$this->record_id = $record_id;
		$this->event_id = $event_id;
		$this->form_name = $form_name;
		$this->instance = $instance;
		$this->lock_all = $lock_all;
	}
	
}

?>

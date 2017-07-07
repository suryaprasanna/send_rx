<?php

class lock_form {
	var $username;
	var $project_id;
	var $record_id;

	function lock_form ($username, $project_id, $record_id) {
		$this->username = $username;
		$this->project_id = $project_id;
		$this->record_id = $record_id;
	}

	function lockCurrentForm($event_id, $form_name, $instance=1) {

	}

	function lockAllFormsInEvent($event_id) {

	}

	function getForm

	function insertData($event_id, $form_name, $instance=1) {
		$sql = "INSERT INTO redcap_locking_data (project_id, record, event_id, form_name, instance, username, timestamp ) VALUES (?, ?, ?, ?, ?, ?, now())";
		if ($stmt=$this->conn->prepare($sql)) {
			$stmt->bind_param("isisis", $this->project_id, $this->record_id, $event_id, $form_name, $instance, $this->username);
			if ($stmt->execute()) {
			// echo "New record created successfully." . '<br>';
				return;
			}
		}
	}

}

?>

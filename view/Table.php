<?php

class Table {
	private $students;

	public function __construct ($students) {
		$this->students = $students;
	}

	public function render () {
		foreach ($this->students as $key => $student) {
			echo '<tr>
				<td>'.$student->get_id().'</td>
				<td>'.$student->get_name().'</td>
				<td>'.$student->get_email().'</td>
				<td>'.$student->get_phone().'</td>
			</tr>';
		}
	}
}

?>
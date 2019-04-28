<?php

include_once('../model/Student.php');
include_once('Connection.php');
include_once('../view/Table.php');

class StudentController {

	public static function get_students () {
		$connection = DBConnection::get_instance()->get_connection();

		$query = "SELECT * FROM students";
		$result = mysqli_query($connection, $query);

		$students = array();

		if ($result != false) {
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$student = new Student();
					$student->set_id($row["id"]);
					$student->set_name($row["name"]);
					$student->set_phone($row["phone"]);
					$student->set_email($row["email"]);
					array_push($students, $student);
				}
			}
		}

		return new Table($students);
	}
}

?>
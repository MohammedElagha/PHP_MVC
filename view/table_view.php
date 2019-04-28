<?php
include_once('../controller/StudentController.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table table-bordered">
					<thead>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
					</thead>
					<tbody>
						<?php 
						$table = StudentController::get_students();
						echo $table->render();
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php  
		// if(@$_POST['my_btn'])
		// {
		// 	echo $_POST['email'];
		// 	echo "<br/>";
		// 		echo $_POST['pswd'];

		// }

	$a = "Original";
	$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
	extract($my_array);
// echo "\$a = $a; \$b = $b; \$c = $c";
	echo $a;
	// extract($_POST);
	// if(isset($my_btn))
	// {
	// 	// echo "<pre>";
	// 	// print_r($_POST);
	// 	echo $_REQUEST['email']."<br/>";
	// 	echo $email." <br/>".$pswd." ".$f_name." ".$m_no;
	// }


	?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
					<form method="post" action="method_post_get_data.php">
						<div class="mb-3 mt-3">
					    <label for="email" class="form-label">Full Name</label>
					    <input type="text" class="form-control" id="email"  name="f_name">
					  </div>
					   <div class="mb-3 mt-3">
					    <label for="email" class="form-label">Mobile Number</label>
					    <input type="text" class="form-control" id="email"  name="m_no">
					  </div>
					  <div class="mb-3 mt-3">
					    <label for="email" class="form-label">Email:</label>
					    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					  </div>
					  <div class="mb-3">
					    <label for="pwd" class="form-label">Password:</label>
					    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
					  </div>
					  <div class="form-check mb-3">
					    <label class="form-check-label">
					      <input class="form-check-input" type="checkbox" name="remember"> Remember me
					    </label>
					  </div>
					 <input type="submit" name="my_btn" value="Save" class="btn btn-success">
					</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>
	
</div>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
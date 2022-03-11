<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


	<?php 
		require("config/db.php");
		extract($_POST);
		if(isset($sign))
		{
			// echo "<pre>";
			// print_r($_POST);

				$name=$_FILES['pic']['name'];
				$temp=$_FILES['pic']['tmp_name'];
				$rand=rand(999999,9999999);
				$ext=end(explode(".",$name));
				if($ext=="jpg" or $ext=="png" or $ext=="jpeg" or $ext=="PNG")
				{
					$file_name=$rand.".jpg";
					if(move_uploaded_file($temp,"assets/pro_pic/$file_name"))
					{

						$sql="INSERT INTO `sign_up`(`f_name`, `l_name`, `email_id`, `mob_no`, `pass`, `pic`) VALUES ('$fname','$lname','$email',$mob_no,'$password','$file_name')";
						if(mysqli_query($way,$sql))
						{
							// echo "Sign Up successfully !";
							header("location:index.php");
						}
						else
						{
							echo "Sign Up not successfully !";
						}
					}
				}
		}



	?>
	<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="signup-form">
                <form method="post" enctype="multipart/form-data" class="mt-5 border p-4 bg-light shadow">
                    <h4 class="mb-5 text-secondary">Create Your Account</h4>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label>First Name<span class="text-danger">*</span></label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Last Name<span class="text-danger">*</span></label>
                            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label>Email Id<span class="text-danger">*</span></label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email Id">
                        </div>
                         <div class="mb-3 col-md-12">
                            <label>Mobile Number<span class="text-danger">*</span></label>
                            <input type="text" name="mob_no" class="form-control" placeholder="Enter Email Id">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Upload Profile Picture<span class="text-danger">*</span></label>
                            <input type="file" name="pic" class="form-control" >
                        </div>
                        <div class="col-md-12">
                           <!-- <button class="btn btn-primary float-end">Signup Now</button> -->
                           <input type="submit" name="sign" class="btn btn-primary float-end" value="Signup">
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">If you have account, Please <a href="index.php">Login Now</a></p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
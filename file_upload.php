<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php  
	// error_reporting(0);

	
	// echo $qun_number;
			if(@$_POST['upload'])
			{
				// echo $_POST['f_name']."<br/>";
				// echo $_FILES['my_pic']['name']."<br/>";
				// echo $_FILES['my_pic']['type']."<br/>";
				// echo $_FILES['my_pic']['size']."<br/>";
				// echo $_FILES['my_pic']['tmp_name']."<br/>";

				$file_name=$_FILES['my_pic']['name'];
				$temp=$_FILES['my_pic']['tmp_name'];
				// $str="I am going . to . market";
				// $rec=explode(".", $str);
				// echo "<pre>";
				// print_r($rec);

				$ext=end(explode(".", $file_name));
				// echo "<pre>";
				// print_r($ext);
				// echo $ext[1];
				// echo $ext;
				if($ext=="jpg" or $ext=="png" or $ext=="jpeg" or $ext=="PNG" or $ext=="gifi")
				{
					$qun_number=rand(999999,9999999);
					 if(move_uploaded_file($temp, "assets/uploads/$qun_number".".jpg"))
					 {
					 	echo "File Uploaded Successfully !";
					 }
					 else
					 {
					 	echo "File Not Uploaded Successfully !";
					 }
				}
				else
				{
					echo "Upload Only Picture or Extenstion does not matched !";
				}


				
			}


	?>
<form method="post" enctype="multipart/form-data">
	<!-- <input type="text" name="f_name">
	<br/> -->
	<input type="file" name="my_pic">
	<br/>
	<input type="submit" name="upload">
</form>	

</body>
</html>
<?php  
extract($_POST);
	if(isset($my_btn))
	{
		// echo "<pre>";
		// print_r($_POST);
		echo $_REQUEST['email']."<br/>";
		echo $email." <br/>".$pswd." ".$f_name." ".$m_no;
	}


?>
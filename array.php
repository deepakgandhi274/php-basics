<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php  
		

			// $age[0]=10;
			// $age[1]=20;
			// $age[2]=30;
			// $age[3]=40;

			// echo "my age  is ".$age[1];
			// echo "<pre>";
			// print_r($age);
			
			// $salary=array(20,30,40,50,60);
			// echo "<pre>";
			// print_r($salary);
			// $data=[];
			// $sal=[10,20,30,40,50,90,80,70,1,2,3,4,5,6,7,8,22,44,55,99,77,67,45,12];
			// echo "<pre>";
			// print_r($sal);

			// $i=0;
			// while($i<8)
			// {
			// 	echo "[".$i."]=>".$sal[$i]."<br/>";
			// 	$i++;
			// }

			// echo "<br/>";
			// for($i=0;$i<count($sal);$i++)
			// {
			// 	echo "[".$i."]=>".$sal[$i]."<br/>";
			// }

			/*   Function */
			function max_num($marks)  // parameters 
			{
				
				for($i=0,$temp=$marks[0];$i<count($marks);$i++)
				{
						if($temp<=$marks[$i])
						{
							$temp=$marks[$i];
						}
				}
				// echo $temp;
				return $temp;


			}
			$marks=[30,44,55,66,77,88,22,11,15,17,36,38,4,55,99,61,62,68,33,44,55,666,78,99];

			
			$rec=max_num($marks);  // Arguements
			echo $rec+10;

			echo "<br/>";
			function search_data($rec_array,$val)
			{
				$temp=false;
					for($i=0;$i<count($rec_array);$i++)
					{
							if($rec_array[$i]==$val)
							{
								// echo "<br/>  The value is found ".$val;
								$temp=true;
							}
							// else
							// {
							// 	echo "<br/> The value is not found  ".$val;
							// }
					}
					if($temp==true)
					{
						return $val;
					}
					else
					{
						return "The value is not found ".$val;
					}
			}
			$marks1=[30,44,55,66,77,88,22,11,15,17,36,38,4,55,99,61,62,68,33,44,55,666,78,99];
			$data=88;
			$rec=search_data($marks1,$data);
			echo $rec;
			// echo $rec;
			// echo "<br/> The value is found ".$rec;


			// Update
			// Delete
			// Reverse
			// Sum

			function sum_total($rec_array)
			{
					for($i=0,$sum=0;$i<count($rec_array);$i++)
					{
						$sum+=$rec_array[$i];
						// $sum=$sum+$rec_array[$i];
					}
					// echo "Sum of array is ".$sum;
					return $sum;
			}
			$marks2=[10,20,30,40,50];
			$final_sal=sum_total($marks2);
			echo "<br/> Total Salary is ".$final_sal;

			function update_data($r_array,$old_val,$new_val)
			{
					for($i=0,$temp=0;$i<count($r_array);$i++)
					{
						if($r_array[$i]==$old_val)
						{
							$r_array[$i]=$new_val;
							$temp=1;
						}
					}
					if($temp==0)
					{
						return "Value does not exits ";
					}
					else
					{
						return $r_array;
					}
			}
			$marks3=[10,20,30,40,50];
			$rec=update_data($marks3,200,60);
			echo "<pre>";
			print_r($rec);
			// update_data(array_data,old_val,new_val);
		


			




	?>

</body>
</html>
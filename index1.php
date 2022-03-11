<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
	<a href="if_else.php">Go to If else pro</a>
	<a href="if_else_if.php">Go to If else nested pro</a>
<?php 
		$num=123;
		echo "$num";
		?>
		<br/>
		<?php
		$name="Rajeev";
		echo $name;
		$sal=6776.6;
		echo "<br/>My sal is ".$sal;
		$temp=true;
		echo "<br/>".$temp;
		var_dump($num);
		echo "<br/>";
		var_dump($name);
		echo "<br/>";
		var_dump($sal);
		echo "<br/>";
		var_dump($temp);
		$_abc="Abcd";
		echo "<br/> $_abc";
		// $123num=43434;
		$num123=8080;
		echo "<br/> $num123";
		// $ram;
		// $Ram;
		// $RAm;
		// $RAM;

?>
<br/>
<select>
	<option>Select Day</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="2">2</option>
	<option value="2">2</option>
	<option value="2">2</option>
	<option value="2">2</option>
	<option value="2">2</option>
	<option value="2">2</option>


</select>

<br/>
<select>
	<option>Select Age</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
</select>
<br/>
<select>
	<option>Select Age</option>
<?php 
	$age=18;
	while($age<=108)
	{
		echo "<option>$age</option>";
		$age++;
	}
?>
</select>

<br/>
<select>
	<option>Select City</option>
	<?php
	$city=["A","B","C","D","E","F"];
	for($i=0;$i<count($city);$i++)
	{
		echo "<option>$city[$i]</option>";
	}
	?>
	
</select>
<br/>
<ul>
	<li>1</li>
	<li>1</li>
	<li>1</li>
	<li>1</li>
	<li>1</li>
	<li>1</li>
	<li>1</li>
	<li>1</li>
	<li>1</li>
	<li>1</li>
	<li>1</li>
	<li>1</li>
</ul>
<br/>
<?php 
	$val=1;
	while($val<=20)
	{
		// echo $val."<br/>";
		echo " <li>$val</li>";
		$val++;
	}
?>
<table border="1" align="center" width="60%">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Address</th>
		<th>Mob no</th>
	</tr>
	<!-- <tr>
		<td>1</td>
		<td>Rak</td>
		<td>De</td>
		<td>9869869869</td>
	</tr> -->

	<?php  

		$id=1;
		$name="Rajeev";
		$add="Delhi";
		$mob=43324234324234;
		while($id<=10)
		{
			?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $add; ?></td>
					<td><?php echo $mob; ?></td>
				</tr>
			<?php
			$id++;
		}


	?>
</table>

<?php 



?>



</body>
</html>
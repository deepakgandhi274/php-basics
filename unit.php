<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		label
		{
			margin-left: 0px;
		}
	</style>
</head>
<body>

<div align="center" style="margin-left: 25%; margin-right: 25%; margin-top: 5%;">
<form method="post" id="main_id">
	<input type="text" name="unit" placeholder="Enter a total unit ?" style="width: 100%; height: 40px;">
	<br/>
	<br/>
	<input type="submit" name="bill_gen" class="btn btn-success" value="Bill Genrate">
</form>
<?php 
		if(@$_POST['bill_gen'])
		{
			$unit=$_POST['unit'];
			if($unit>0 && $unit<=200)
			{
				$total=$unit*4;
				$tex_per=0;
				$tex_amou=$total*$tex_per/100;
				$f_amou=$total+$tex_amou;
				?>
				<br/>
				<div align="" style=" margin-right: 25%; margin-top: 5%; width: 100%;">

  					<div class="container-fluid">
  						<div class="row">
  							<div class="col-md-4">
  								
  								<label>Total Unit is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $unit; ?>
  							</div>
  						</div>
  						<div class="row" style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total bill without tex is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $total; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in percentage :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_per; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in rs :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_amou; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Bill   is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $f_amou; ?>
  							</div>
  						</div>
  					</div>
				</div>

				<?php
			}
			else if($unit>200 && $unit<=300)
			{
				$total=$unit*4;
				$tex_per=2;
				$tex_amou=$total*$tex_per/100;
				$f_amou=$total+$tex_amou;
				?>
				<br/>
				<div align="" style=" margin-right: 25%; margin-top: 5%; width: 100%;">

  					<div class="container-fluid">
  						<div class="row">
  							<div class="col-md-4">
  								
  								<label>Total Unit is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $unit; ?>
  							</div>
  						</div>
  						<div class="row" style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total bill without tex is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $total; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in percentage :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_per; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in rs :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_amou; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Bill   is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $f_amou; ?>
  							</div>
  						</div>
  					</div>
				</div>

				<?php
			}
			 else if($unit>300 && $unit<=400)
			{
				$total=$unit*4;
				$tex_per=4;
				$tex_amou=$total*$tex_per/100;
				$f_amou=$total+$tex_amou;
				?>
				<br/>
				<div align="" style=" margin-right: 25%; margin-top: 5%; width: 100%;">

  					<div class="container-fluid">
  						<div class="row">
  							<div class="col-md-4">
  								
  								<label>Total Unit is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $unit; ?>
  							</div>
  						</div>
  						<div class="row" style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total bill without tex is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $total; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in percentage :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_per; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in rs :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_amou; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Bill   is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $f_amou; ?>
  							</div>
  						</div>
  					</div>
				</div>

				<?php
			}
			else if($unit>400 && $unit<=500)
			{
				$total=$unit*4;
				$tex_per=6;
				$tex_amou=$total*$tex_per/100;
				$f_amou=$total+$tex_amou;
				?>
				<br/>
				<div align="" style=" margin-right: 25%; margin-top: 5%; width: 100%;">

  					<div class="container-fluid">
  						<div class="row">
  							<div class="col-md-4">
  								
  								<label>Total Unit is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $unit; ?>
  							</div>
  						</div>
  						<div class="row" style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total bill without tex is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $total; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in percentage :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_per; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in rs :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_amou; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Bill   is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $f_amou; ?>
  							</div>
  						</div>
  					</div>
				</div>

				<?php
			}
			else if($unit>500 )
			{
				$total=$unit*10;
				$tex_per=6;
				$tex_amou=$total*$tex_per/100;
				$f_amou=$total+$tex_amou;
				?>
				<br/>
				<div align="" style=" margin-right: 25%; margin-top: 5%; width: 100%;">

  					<div class="container-fluid">
  						<div class="row">
  							<div class="col-md-4">
  								
  								<label>Total Unit is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $unit; ?>
  							</div>
  						</div>
  						<div class="row" style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total bill without tex is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $total; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in percentage :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_per; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Tex  in rs :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $tex_amou; ?>
  							</div>
  						</div>
  						<div class="row"  style="margin-top: 3%;">
  							<div class="col-md-4">
  								
  								<label>Total Bill   is :</label>
  							</div>
  							<div class="col-md-8">
  								<?php echo $f_amou; ?>
  							</div>
  						</div>
  					</div>
				</div>

				<?php
			}
			else 
			{
				?>
				<div align="" style=" margin-right: 25%; margin-top: 5%; width: 100%;">

  					<div align="cenetr" class="alert alert-danger">Invalid Unit</div>
				</div>

				<?php
			}

			?>
				<input type="submit" name="" value="Print Bill" onclick="print_bill()" id="btn_id">
			<?php
		}

?>
<script type="text/javascript">
	
	function print_bill()
	{
		document.getElementById("main_id").style.display="none";
		document.getElementById("btn_id").style.display="none";
		print();
	}
</script>

<!-- Bihar Board Result -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
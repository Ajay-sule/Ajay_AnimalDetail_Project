


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .btn
  {
      width:100px;
  }
  </style>
	<script>
		setTimeout(function() {
		location.reload();
		}, 6000);
	</script>
  
</head>
<body>

<div class="container">
  <h2>Animals Details</h2>
  
   <br> 
                                 
<?php
$data=$_GET['Success'];
$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if($pageWasRefreshed) 
{  
  echo"<h2 align='center' style='color:green'></h2><br/>";
}
else
{
if($data==1)
{	
	echo"<h2 align='center' style='color:green'>New animal Added Successful.....!</h2><br/>";
}
else if($data==0)
{
	echo"<h2 align='center' style='color:red'>New animal Added Failure.....!</h2><br/>";
}
else if($data==2)
{
	echo"<h2 align='center' style='color:red'>Data Base Connection Failure</h2><br/>";
}
else
{
	echo"<h2 align='center' style='color:red'>Animal Name Alredy Existing in Database</h2><br/>";
}
}
if($data!=2)
{
$con = mysqli_connect("localhost","root","","animals");

$result = mysqli_query($con,"SELECT * FROM animals_details ORDER BY id DESC");
 
 echo "
 <table class='table table-bordered table-striped'>
   <thead>
     <tr>
		<th>Sr no</th>
		<th>Animal Name</th>
		<th>Category</th>
		<th>Photo</th>
		<th>Message</th>
		<th>Life Expectancy</th>  
     </tr>
   </thead>
 <tbody>";  
 
while($row = mysqli_fetch_array($result))
  {
   
	$id1=$row['id'];
	$ani=$row['animal_name'];
	$categ=$row['category'];
	$phot=$row['photo'];
	$mess=$row['message'];
	$life=$row['life_expectancy'];

	echo "<tr>";
	echo "<td data-column='Srno' >" . $id1 . "</td>";
	echo "<td data-column='Date' >" . $ani . "</td>";  
	echo "<td data-column='Date' >" . $categ . "</td>";  
	echo "<td data-column='Full Name'> <img src='$phot' width='100' height='100'></td>";
	echo "<td data-column='Email'>" . $mess . "</td>";
	echo "<td data-column='Location'>" . $life. "</td>"; 
	echo "</tr>";
  }

echo "</table>";

}

//mysql_close($con);

?>
	<a href="index.php">
		<button type="button" class="btn btn-success">Add new </button>		
	</a>		
	</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","animals");
if(!$conn){
   //die('Could not Connect My Sql:' .mysqli_error());
   echo "<script>location.replace('animals.php?Success=2')</script>";
}
else
{
if(isset($_POST['submit']))
{	 $animal_name = $_POST['animal_name'];
	 $category = $_POST['category'];
     $message = $_POST['message'];
     $life_expectancy = $_POST['life_expectancy'];	 
     $id="";
	 
	 $target_dir = "uploads/";
     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     
	 if($animal_name=="")
	 {
		echo "<script>alert('Enter Animal name')</script>";
		echo "<script>location.replace('index.php')</script>";		 
	 } 
  else if($category=="")
  {
	  echo "<script>alert('Enter Category')</script>";
	  echo "<script>location.replace('index.php')</script>";
  }
  else if($life_expectancy=="Life Expectancy")
  {
	  echo "<script>alert('please select Animal Life')</script>";
	  echo "<script>location.replace('index.php')</script>";
  }
    else if($message=="")
  {
	  echo "<script>alert('Enter the Message')</script>";
	  echo "<script>location.replace('index.php')</script>";
  }
  else if($target_file=="")
  {
	  echo "<script>alert('please Select Image')</script>";
	  echo "<script>location.replace('index.php')</script>";
  }
  else
  { 
	$Flag=0;
	$Data="SELECT * FROM animals_details where animal_name='$animal_name'";
	$result = mysqli_query($conn,$Data);
	
	if (mysqli_num_rows($result)>0)
	{
		echo "<script>location.replace('animals.php?Success=3')</script>";
	}
	else
	{
			$sql="INSERT INTO `animals_details`(`id`, `animal_name`, `category`, `photo`, `message`, `life_expectancy`) VALUES 
			('$id','$animal_name','$category','$target_file','$message','$life_expectancy')";
	  if (mysqli_query($conn, $sql)) 
	  {
		  echo "<script>location.replace('animals.php?Success=1')</script>";
	  } 
	  else 
	  {
		  echo "<script>location.replace('animals.php?Success=0')</script>";		
	  }
}
  mysqli_close($conn);
  }
}
}
?>
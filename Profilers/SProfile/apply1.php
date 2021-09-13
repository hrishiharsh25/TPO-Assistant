<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}
   
?>
<?php
$connect = mysqli_connect("localhost", "root", "","project"); // Establishing Connection with Server
// mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$sid=$_SESSION["username"];
$c_id = $_POST["cid"];
if($c_id !='')
{
    if($query = mysqli_query($connect,"INSERT INTO `application1` ( `student_id`,`company_id`) 
          VALUES ('$sid', '$c_id')"))
    {
				echo "<center>Details has been received successfully...!!</center>";
      }
	  
     
		else echo "FAILED! Maybe you already applied!!!";
}

else{
	  echo "<center>enter company Id...!!</center>";
}
}
?>
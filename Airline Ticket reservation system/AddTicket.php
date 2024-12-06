<?php

include_once'config.php';

?>
<?php

$tid=$_POST['Ticket ID'];
$fname = $_POST['First Name'];
$lname = $_POST['Last Name'];
$email = $_POST['Email Address'];
$pno = $_POST['Phone Number'];
$arr= $_POST['Arrival'];
$depar = $_POST['Departure'];
$tamount = $_POST['Total Amount'];


 
//maken sure to input table names samorder in database table
$sql = "INSERT INTO TicketDetails(Ticket ID, First Name ,Last Name ,Email Address , Phone Number ,Arrival,Departure,Total Amount) VALUES('$tid','$fname','$lname','$email','$pno','$arr','$depar','$tamount')";




if(mysqli_query($conn,$sql)){
	
	echo "<script>alert('Record saved succesfully')</script>";
	header("location:.html" );
	
}else{
	
	echo "<script>alert('Record saved unsuccesfully!')</script>";
}



mysqli_close($conn);

?>

<html>
<body>
<?php
$name=$_GET['name'];
$email=$_GET['email'];
$number=$_GET['number'];
$date=$_GET['date'];
$department=$_GET['department'];
$dname=$_GET['dname'];
$text=$_GET['comment'];
$host="localhost";$user="root";
$pass="Root@1234";$dbname="appointment";
  echo  "date: ".$date;
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
die("could not connect to the DB".mysqli_connect_error());
else
echo "connected sucessfully............. <br>";
$sql="insert into patientss values('$name','$email','$number','$date','$dapartment','$dname','$text');";
if(mysqli_query($conn,$sql))
echo "record sucessfully inserted.......";
else
echo "could not insert record:".mysqli_error($conn);
mysqli_close($conn);
?>
</body>
</html>

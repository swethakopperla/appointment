<html>
<body>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POst['number'];
$date=$_POST['date'];
$department=$_POST['department'];
$dname=$_POST['dname'];
$text=$_POST['comment'];
$host="localhost";$user="root";
$pass="Root@1234";$dbname="appointment";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
die("could not connect to the DB".mysqli_connect_error());
else
echo "connected sucessfully............. <br>";
$sql="insert into patients values('$name','$email','$number','$date','$dapartment','$text')";
if(mysqli_query($conn,$sql))
echo "record sucessfully inserted.......";
else
echo "could not insert record:".mysqli_error($conn);
mysqli_close($conn);
?>
</body>
</html>

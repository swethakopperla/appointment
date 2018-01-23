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
  echo  "date: ".$date."</br>";
echo  "department: ".$department."</br>";
	echo  "number ".$number."</br>";
  echo  "dname:".$dname."</br>";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
die("could not connect to the DB".mysqli_connect_error());
else
echo "connected sucessfully............. <br>";
	$sql = "CREATE TABLE patients  (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
number VARCHAR(15) not null,
date date not null UNIQUE,
department varchar(30) not null,
dname varchar(30) not null,
comment varchar(50)
)";

echo "<br>";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br>";
$sql="insert into patients (name,email,number,date,department,dname,comment) 
 values('$name','$email','$number','$date','$department','$dname','$text');";
if(mysqli_query($conn,$sql)){
echo "record sucessfully inserted.......";
echo "<br>";
//$to = "yugandhar@itblabs.com";
$subject = "Test mail";
$message = "your appointmented on your give date".$date;
$from = "swetha.k@itblabs.com";
$headers = "From: $from";
mail($email,$subject,$message,$headers,"-f".$from);
echo "Mail Sent.";
}
else{
echo "could not insert record:".mysqli_error($conn);

echo "<br>";
//$to = "yugandhar@itblabs.com";
$subject = "Test mail";
$message = "your not appointmented on your given date!! ".$date."   fix another date";
$from = "swetha.k@itblabs.com";
$headers = "From: $from";
mail($email,$subject,$message,$headers,"-f".$from);
echo "Mail Sent.";

}
mysqli_close($conn);
?>
</body>
</html>

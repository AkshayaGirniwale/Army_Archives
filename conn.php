<?php
$servername = "localhost";
$name="root";
$pass="";
$dbname="military";
$conn=new mysqli($servername,$name,$pass,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
//actual code
           
$s1=$_POST["service_no"];
$n1=$_POST["name"];
$r1=$_POST["rank"];
$u1=$_POST["unit"];
$a1=$_POST["awards"];
$d1=$_POST["birthdate"];

           

if($_POST["sub"]=="display")
{
$sql = "SELECT * FROM info where name='$n1';";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
// output data of each row
echo "<table border=5><tr><th>Service_No</th><th>Name</th><th>Rank</th><th>Unit</th><th>Awards</th><th>Birthdate</th></tr>";
while($row = $result->fetch_assoc())
{
echo "<tr><td>". $row["service_no"]."</td><td>" . $row["name"]."</td><td>" . $row["rank"]."</td><td>" . $row["unit"]."</td><td>" . $row["awards"]."</td><td>" . $row["birthdate"]."</td></tr>";
}
echo "</table>";
}
else
{
echo "0 results";
}

}
$conn->close();
?>
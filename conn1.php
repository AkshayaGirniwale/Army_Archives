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
            
           

            if($_POST["sub"]=="Insert")
            {
            $sql2="insert into info values('$s1','$n1','$r1','$u1','$a1','$d1')";
            if($conn->query($sql2)===TRUE)
            {
            echo "operation successful";
            }
            else
            {
            echo "error while performing operation";
            }
            }
$conn->close();
?>
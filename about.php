<html>
    <head>
        <meta charset="utf-8">    
        <title>Rank</title> 
        <link rel="stylesheet" href="style.css">
    </head>
    
    
    <body>
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
              <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1><center>Know more about our Soldiers</center></h1>
                  
                 
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img " data-aos="zoom-in" data-aos-delay="200">
                  <center>
                  <img src="S1.jpg" class="img-fluid animated" alt="">
                  <img src="S2.jpg" class="img-fluid animated" alt="">
                  <img src="S3.jpg" class="img-fluid animated" alt="">
                  <img src="S4.jpg" class="img-fluid animated" alt="">
                  <img src="S5.jpg" class="img-fluid animated" alt="">
                </center>
                </div>
              </div>
            </div>
        
          </section>
         
          <div class="center-form">
            <form method="POST">

            
            <h3>Soldier's Name </h3><input type="text" name="name" ><br><br>
           
            <input value="display" name="sub" type="Submit">
            
            </form>
          </div>
        
         
    </body>

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
               
                $n1=$_POST["name"];
               
    
    if($_POST["sub"]=="display")
    {
    $sql = "SELECT name,rank FROM info where name='$n1';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
    // output data of each row
    echo "<table border=5 bgcolor=yellow><tr><th>Roll</th><th>Name</th></tr>";
    while($row = $result->fetch_assoc())
    {
    echo "<tr><td>". $row["name"]."</td><td>" . $row["rank"]."</td></tr>";
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


</html>
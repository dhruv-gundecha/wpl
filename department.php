<?php
  $servername="localhost";
  $user="root";
  $password="";
  $dbname="sample";
  $conn=new mysqli($servername,$user,$password,$dbname);
  if($conn ->connect_error){
    die("connection failed:".$conn ->connect_error);
  }

  if(isset($_POST['submit'])){
    if(!empty($_POST['deptid']) && !empty($_POST['deptname']))
    $deptid=$_POST['deptid'];
    $deptname=$_POST['deptname'];
  }
  $sql="SELECT * FROM department";
  $result=$conn->query($sql);
  if ($result->num_rows > 0) {
    echo "<table border=5>
  <tr>
    
  <th>deptid</th>
    
  <th>deptname</th>
    
  </tr>";
  
    
    // output data of each row
    
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['department_id'] . "</td>";
    echo "<td>" . $row['department_name'] . "</td>";
    }
    
    echo "</table>";
    
    } 
    else {
    
    echo "0 results";
    
    }
$conn ->close();
?>
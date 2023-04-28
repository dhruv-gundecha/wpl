<?php
include('config.php');
$msg = "";
if (isset($_POST['submit'])) {
  $emp_id = ($_POST['employee_id']);
  $emp_name = ($_POST['employee_name']);
  $grade_id = ($_POST['grade_id']);
  $emp_dob = ($_POST['emp_dob']);
  $emp_doj= ($_POST['emp_doj']);
  $emp_phone= ($_POST['emp_mobile_no']);

  $sql = "INSERT INTO employee(emp_id,emp_name,grade_id,emp_dob,emp_doj,emp_mobile_no) values('$emp_id','$emp_name','$grade_id','$emp_dob','$emp_doj','$emp_phone')";
  mysqli_query($conn, $sql);
  echo "<script>window.location.href ='home.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Details</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>


<style> 
select {
  width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
</style>

<body>
    <form action='' method = 'POST'>
        <p id ="demo">Please fill the details</p>
        <h2>Employee Detail Form</h2>
        <div class="form-group">
          <label for="Employee id">Employee id</label>
          <input type = "text" id = "emp_id" name="employee_id" required>
         
        </div>
        <div class="form-group">
        <label for="Employee name">Employee name</label>
        <input type = "text" id = "emp_name" name="employee_name" required>
        </div>
        
          <select class="form-select" name="grade_id" aria-label="Default select example" required>
            <option selected>Grade ID</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <br>
        
          <!-- <form class="row gx-3 gy-2 align-items-center">
            <div class="col-sm-3">
              <label class="visually-hidden" for="specificSizeInputName">Name</label>
              <input type="date" id="specificSizeInputName" placeholder="Jane Doe">
            </div>
            <div class="col-sm-3">
              <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
              <div class="input-group">
                <div class="input-group-text">@</div>
                <input type="date" id="specificSizeInputGroupUsername" placeholder="Username">
              </div>
              </div> -->
        <div class="form-group">
        <label for="Employee dob">Employee dob</label><br>
        <input type = "date" name="emp_dob" required >
        </div>
        
        <div class="form-group">
        <label for="Employee doj">Employee doj</label><br>
        <input type = "date" name="emp_doj" required>
        </div>

        <div class="form-group">
        <label for="Employee city" >employee city</label>
        <input type = "text" id = "emp_city" name="emp_city" required >
        </div>


        <div class="form-group">
        <label for="Employee mobile no" >Employee mobile no:</label>
        <input type = "text" name="emp_mobile_no" id="phone" required >   
        </div>
        
        <br>
       
        <center><button type="submit" name ="submit" onclick="validateNumber(); validateID(); validateInput(); validateName(); check()">Submit</button></center>
      </form>
      <script type="text/javascript" src="script.js"></script>
</body>
</body>
<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $student=$_POST['student'];
    $rollno=$_POST['rollno'];
    $subject=$_POST['subject'];


    $sql="insert into crud(name,student,rollno,subject) 
    values('$name','$student','$rollno','$subject')";
    $result=mysqli_query($con,$sql);
    if($result) {
       header('location:display.php');
       //echo "data inserted successfuly";
    }else{
    
        die(mysqli_error($con));   
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>crudoperation</title>
  </head>
  <body>
    <div class="container my-5"> 
<form method="post">
  <div class="mb-3">
    <label>Class Name</label>
    <input type="text" class="form-control" placeholder="Enter class name" name="name" autocomplete="off">
</div>
<div class="mb-3">
    <label>Student</label>
    <input type="text" class="form-control" placeholder="Enter the name of the studnet" name="student" autocomplte="off">
</div>
<div class="mb-3">
    <label>Roll no</label>
    <input type="text" class="form-control" placeholder="Enter roll no" name="rollno" autocomplete="off">
</div>
<div class="mb-3">
    <label>Subjects</label>
    <input type="text" class="form-control" placeholder="Enter the subjects name" name="subject" autocomplete="off">
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>  
</body>
</html>
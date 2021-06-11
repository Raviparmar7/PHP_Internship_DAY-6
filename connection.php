<?php

$host = "localhost";
$studentname = "root";
$passwd = "";
$dbname = "db_php";

 $connection = mysqli_connect($host, $studentname, $passwd, $dbname);

 $q = mysqli_query($connection, 
"insert into tbl_student(student_name,student_gender,student_dob,student_email,student_mobile,student_address,student_password,student_area,student_bloodgroup) 
 values ('Vishal','male','21/12/2000','Vishal 123@gmail.com','1234567890','juna power pase','','india','O' )")
  or die("Error". mysqli_error($connection));

  if($q){
      echo "<script>aleart('Record Added' );</script>";

  }
?>
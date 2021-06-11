<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_php";
//connection Function
$connection = mysqli_connect($host,$username,$passwd,$dbname);

$q = mysqli_query($connection, "insert into tbl_user(user_name,user_gender,user_mobile)
        values('Hemakshi','Female','941852963')")
            or die("Error".mysqli_error($connection));
                
if($q)
    {
    echo "<script>alert('Record Added');</script>";
    }
?>
 <html>
        <body>
           <form method="post">
            Name : <input type="text" name="txt1"/>
            Gender : <select name="txt2">
                <option>Male</option>
                <option>Female</option>
            </select>
            Mobile no :<input type="number" name="txt3"/>
            <input type="submit"/>
           </form>
         </body>
       </html>
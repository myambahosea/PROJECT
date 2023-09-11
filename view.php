<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="decor.css">
</head>
<body>
<!--Header Table-->
<table border="1" width="80%" align="center" height="20%">
<tr>
<td width="10%" bgcolor="#00CCCC">
<img src="logo.PNG" width="150px" height="150px" />
</td>
<td bgcolor="#000000" style="font-size:60px;color:red;font-variant:small-caps;font-family:arial;text-shadow:4px 4px 4px white" align="center">
Student Management System
</td>
</tr>
</table> 

<!--Menubar table-->
<table border="1"  id="menu" width="80%" align="center" height="8%">
<tr>
<td><a class="home" href="index.php">HOME</a></td>
<td><a class="reg" href="reg.php">REGISTRATION</a></td>
<td><a class="record" href="view.php">STUDENT RECORD</a></td>
<td><a class="edit" href="viewdel.php">EDIT</a></td>
</tr>
</table>   
<!--Display record table-->
<table border="1" bgcolor="white" width="80%" align="center" height="8%">
<tr>
<td valign="top">

<table border="1" align="center"  width="100%" style="color:navy;font-size:13px;">
<tr style="background-color:#003366;color:white">
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td>Contact</td>
<td>College Name</td>
<td>Qualification</td>
<td>Course</td>
<td>Fees</td>
<td>Paid</td>
<td>Remaining</td>
</tr>
<?php
/*including connection file*/
include("connect.php");

        $query = "SELECT * FROM reg";
        $data = mysqli_query($con, $query);
        $result = mysqli_num_rows($data);
        if ($result) {
            while ($row = mysqli_fetch_array($data)) {
/*$qry="select * from reg";
$sql=mysqli_query($qry);
*/
/*Accessing all record from database using loop*/
//while($row=mysqli_fetch_array($sql))
//{
/*Filling data into cells*/
?>

<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['surname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><?php echo $row['college_name']; ?></td>
<td><?php echo $row['qualification']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['fees']; ?></td>
<td><?php echo $row['paid']; ?></td>
<td><?php echo $row['remaining']; ?></td>

</tr>
<?php
}

} else {
    ?>
    <tr>
        <td>No record found</td>
    </tr>
<?php
}

?>
</table>
</td>
</tr>
</table>
</body>
</html>


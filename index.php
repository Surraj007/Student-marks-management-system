<html>
    <head><title>Student Data</title></head>
        
    
    <body>
        <center>
       

            <h1>STUDENT DATA</h1>
<form method=post action=index.php>
    Student ID: <input type=text name=txtid>
   Student name: <input type=text name=txtname>
   <p>Contained MARKS</p> 
   MATH: <input type=text name=txtmath>
   PHYSICS: <input type=text name=txtphy>
   CHEMISTRY: <input type=text name=txtchem> <br> <br>
   <input type=submit value=Submit name=btnsubmit>
</form>
 
<?php
if(isset($_POST['btnsubmit']))
{
$stid= $_POST['txtid'];
$stname= $_POST['txtname'];
$stmath = $_POST['txtmath'];
$stphy = $_POST['txtphy'];
$stchem = $_POST['txtchem'];
 

$total = $stmath+$stphy+$stchem;
echo "YOUR TOTAL MARKS IS:" .$total;
$mycon = mysqli_connect("localhost","root","","student");


$sql="insert into std values(?,?,?,?,?,?)";
$ps= $mycon -> prepare($sql);
$ps -> bind_param("isiiii", $stid, $stname, $stmath, $stphy, $stchem, $total);
$ps -> execute();
echo " <br> Thank You for Submitting.";
}

?>
 </center>
 </body>
 </html>
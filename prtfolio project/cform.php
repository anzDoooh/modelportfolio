<?php
$v1=$_POST['contact'];
$v2=$_POST['cemail'];
$v3=$_POST['phoneno'];
$v4=$_POST['umessage'];

$con= mysqli_connect("localhost","root","","contacts"); //server name,user name,password,database name

$sql= "INSERT INTO contactdetails (contact_name,email_address,phoneNO,umessage) values('$v1','$v2','$v3','$v4')";

$checking= mysqli_query($con,$sql);

if($checking){
    echo "DATA ADDED SUCCESSFULLY";
}
else {
    echo "DATA NOT ADDED";

}

?>
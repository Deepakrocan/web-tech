<?php
$conn=mysqli_connect('localhost','root','','bca07');
if(!$conn)
{
    die('cannot connect mysql');
}
else
{
    echo"Connected Successfully";
}
?>
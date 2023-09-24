<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="chart";
$conn=new mysqli("$servername","$username","$password","$dbname");

if($conn)
{

}
else 
{
    echo "connection failed";

}?>
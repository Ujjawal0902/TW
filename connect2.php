<?php
$servername="localhost";
$username="root";
$password="";
$database_name="travel";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}

if(isset($_POST['save2']))
{
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Query = $_POST['Query'];

    $sql_query = "INSERT INTO contact(Name,Email,Number,Query)
    Values('$Name','$Email','$Number','$Query')";

    if(mysqli_query($conn, $sql_query))
    {
         echo "<h1><center>Message sent Successfully</center></h1>";
    }
    else
    {
        echo "Error: ".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn); 
}
?>
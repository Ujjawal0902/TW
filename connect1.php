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

if(isset($_POST['save1']))
{
    $Place_Name = $_POST['Place_Name'];
    $Guest_Number = $_POST['Guest_Number'];
    $Arrival = $_POST['Arrival'];
    $Leaving = $_POST['Leaving'];

    $sql_query = "INSERT INTO book(Place_Name,Guest_Number,Arrival,Leaving)
    Values('$Place_Name','$Guest_Number','$Arrival','$Leaving')";

    if(mysqli_query($conn, $sql_query))
    {
        echo "<h1><center>Booked Successfully</center></h1>";
    }
    else
    {
        echo "Error: ".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn); 
}
?>
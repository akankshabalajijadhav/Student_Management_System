<?php
$conn=mysqli_connect("localhost","root","","table");
if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
       

        $query="insert into login(Email,Password) values('$email','  $password')";
        $res=mysqli_query($conn,$query);
        if($res)
        {
            echo"successful";
        }
        else{
            echo"fail".mysqli_error($conn);
        }
    }
?>
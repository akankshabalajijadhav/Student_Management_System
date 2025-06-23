<?php
$conn=mysqli_connect("localhost","root","","table");
if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];

        $query="insert into singup(Email,Password,Confirmpassword) values('$email','  $password','$confirmpassword')";
        $res=mysqli_query($conn,$query);
        if($res)
        {
            echo"";
        }
        else{
            echo"fail".mysqli_error($conn);
        }
    }
?>
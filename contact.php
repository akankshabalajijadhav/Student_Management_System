<?php
$conn=mysqli_connect("localhost","root","","table");
if(isset($_POST['submit']))
    { 
         $name=$_POST['name'];
          $mobileno=$_POST['mobileno'];
           $education=$_POST['education'];
             $address=$_POST['address'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        

        $query="insert into contact(Name,MobileNo,Education,Address,Email,Password) values(' $name','$mobileno','$education','$address','$email','  $password')";
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
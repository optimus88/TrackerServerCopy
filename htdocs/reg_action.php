<?php
include('blogic.php');
$ob = new blogic();

if(isset($_POST['chk_reg']))
{
    //$sso=mysql_real_escape_string( $_POST['uname'] );
    $loginName=$_POST['username'];
    $uname=$_POST['uname'];
    $email_id=$_POST['email_id'];
    //$pass=mysql_real_escape_string( md5($_POST['upass']) );
    $upass=$_POST['upass'];
    $user_Type = "user";
    if ( empty($loginName) || empty($upass) || empty($upass) || empty($email_id) )
        {
            echo '<script>alert("Please Enter both username and password...!!"); window.location = "index.php"</script>';
        }
    else
        {
            $userRegister = "INSERT INTO tally_bidders (bidder_name,bidder_login_name,bidder_email_id,bidder_password,bidder_type) VALUES ('$uname','$loginName','$email_id','$upass','$user_Type')";
            //echo $userRegister;
            $result = $ob-> insert($userRegister);
            if ($result == "true")
            {
                echo '<script>alert("Welcome to Tally World.Please Login to continue...!!"); window.location = "index.php?remarks=success"</script>';
            }
            else
            {
              echo '<script>alert("Please Re-Register as there seems to be some error...!!"); window.location = "tally_registration.php"</script>';  
            }
        }
}
else
{
    echo '<script>alert("Please Register Again ...!!"); window.location = "tally_registration.php"</script>';
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Successful!!</title>
    </head>
    <body>
        <?php
            print_r("Post Data: " . $postdata);
            print_r("User Name: " . $postdata['username']);
            print_r("Password: " . $postdata['password']);
            print_r("Confirm Password: " . $postdata['confirmpassword']);
        ?>
    </body>
</html>
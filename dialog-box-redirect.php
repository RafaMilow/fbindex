<?php
session_start();
    
    if(isset($_GET["code"]))
    {   
        
        die("https://graph.facebook.com/oauth/access_token?client_id=1760763894180761&redirect_uri=http://fb.local&client_secret=a0a6ad8378ee0f90901b98b7fedfac22&code=" . $_GET["code"]);

        $token_and_expire = file_get_contents("https://graph.facebook.com/oauth/access_token?client_id=1760763894180761&redirect_uri=fb.local&client_secret=a0a6ad8378ee0f90901b98b7fedfac22&code=" . $_GET["code"]);
        
        var_dump($token_and_expire);
        exit;

        parse_str($token_and_expire, $_token_and_expire_array);
        
        
        if(isset($_token_and_expire_array["access_token"]))
        {   
            $access_token = $_token_and_expire_array["access_token"];
            $_SESSION['fb_access_code'] = $access_token;
            
            header("Location: http://labs.qnimate.com/facebook-login/check.php");
                }
        else
        {   
            echo "\n An error accoured!!!!! \n";
            exit;
        }
    }
    else
    {
        echo "\n An error accoured!!!!! \n";
    }
    
?>
<?php
    $con = pg_connect("postgres://vazfilvivcifkk:036fa69284856775313ca6d56d279c984e2fd7367e2359e2692f3fa36e28955a@ec2-18-234-15-247.compute-1.amazonaws.com:5432/d4iifhmlvp4cgb");
    if(!$con){
        echo die("ERROR CONNECT DB");
    }
?>

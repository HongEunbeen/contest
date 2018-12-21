<?php

    include "dbconn.php";
    session_start();
    
    if($result == 1){
        $sql = "update signup set coupon1 = 1 where id = '$session_id';";
         mysql_query($sql);
    }else if($result == 2){
        $sql  = "update signup set coupon2 = 1 where id = '$session_id';";
        mysql_query($sql);
    }else if($result == 3){
        $sql  = "update signup set coupon3 = 1 where id = '$session_id';";
        mysql_query($sql);
    }
    
    ?><script>location.href='page1.php'</script>
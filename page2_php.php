<?php

    include "dbconn.php";
    session_start();
    
    $sql = "select * from signup where id='$id' and pwd='$pwd'";
    $result = mysql_query($sql);
    
    if(result1){
        $sql = "update signup set coupon1 = 1 where id = $session_id;";
        $result = mysql_query($sql);
    }else if(result2){
        $sql  = "update signup set coupon2 = 1 where id = $session_id;";
        $result = mysql_query($sql);
    }else if(result3){
        $sql  = "update signup set coupon3 = 1 where id = $session_id;";
        $result = mysql_query($sql);
    }
?><script>location.href='page1.php?'</script>
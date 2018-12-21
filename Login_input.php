<?php
    include "dbconn.php";
    session_start();
    
    $sql = "select * from signup where id='$id' and pwd='$pwd'";
    
    $result = mysql_query($sql);

    $count = mysql_num_rows($result); //-> select * 이었을 때
    $row=mysql_fetch_array($result);

    if($count){
            echo "<script>alert('어서오세요!');</script>";
            echo "<script>location.href='session.php?id=$row[id]'</script>";
    }else{
        echo "<script>alert('ID나 비밀번호가 맞지 않습니다'); history.back(); </script>";
        
    }
    mysql_close($connect);
    ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

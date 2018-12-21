<meta charset="UTF-8">
<?php
        include "dbconn.php";
        
        $sql = "insert into signup(id, pwd, pwd_hak, number) values('$id', '$pwd', '$pwd_hak', '$tel')";
        $result = mysql_query($sql);

        if($result){
            echo "<script>alert('회원가입이 되셨습니다'); location.href='index.php';</script>";
        }
        else{
            echo "$result";
            echo "<script>alert('회원가입에 실패하셨습니다. 다시 시도해 주십시오.');  location.href='signup_input.php';</script>";
        }
        mysql_close($connect);
?>
    
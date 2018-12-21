<?php
    session_start();
    
    $_SESSION['session_id'] = $id;
    
?>
<script>location.href="index.php"</script>
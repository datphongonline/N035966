<?php
    include('../config.php');
     $id = $_POST['id'];
    $lenh = 'delete from tiennghi where matn='.$id;
    mysqli_query($conn, $lenh);
    echo '1';
?>
m <?php
session_start();
require 'config.php';

if ( isset($_POST['username']) && isset($_POST['password']) ) {
    
    $sql_check = "SELECT nama, 
                         level, 
                         id_user 
                  FROM tb_user 
                  WHERE 
                       username=? 
                       AND 
                       password=? 
                  LIMIT 1";

    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($nama, $level, $id_user);

        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $level;
            $_SESSION['sess_id']    = $id_user;
            $_SESSION['nama']       = $nama;
            $_SESSION['level']      = $level;
        }

        $check_log->close();

        header('location:on-'.$level);
        exit();

    } else {
        header('location: ../index.php?error='.base64_encode('Username dan Password Invalid!!!'));
        exit();
    }

   
} else {
    header('location:../index.php');
    exit();
}
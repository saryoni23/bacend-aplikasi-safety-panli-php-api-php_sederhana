<?php
require_once "../_config/config.php"
?>
<?php
               if ( isset($_POST['user']) && isset($_POST['pass']) ) {
                    $sql_check = "SELECT nama, 
                                            level, 
                                            id_user 
                                    FROM tb_user 
                                    WHERE 
                                        username=? 
                                        AND 
                                        password=? 
                                    LIMIT 1";

                    $check_log = $con->prepare($sql_check);
                    $check_log->bind_param('ss', $user, $pass);

                    $user = $_POST ['user'];
                    $pass = $_POST ['pass'];

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

                        header('location:../on-'.$level);
                        exit();

                    } else {
                        header('location: login.php?error='.base64_encode('Username dan Password Invalid!!!'));
                        exit();
                    }

                
                } 
                else {
                    header('location:../index.php');
                    exit();
                }
                ?> 
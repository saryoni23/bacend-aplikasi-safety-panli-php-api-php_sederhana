<?php 

    include_once "../../../koneksi.php";

    $id = $_GET['id_user'];
    $page = $_GET['page'];
    $start = 0; 
    $limit = 1; 

    $total = mysqli_num_rows(mysqli_query($con, "SELECT id_uc FROM tb_unsafecondition"));
    
    $page_limit = $total/$limit; 
    
    if($page<=$page_limit){
        
        $start = ($page - 1) * $limit; 

        $sql = "SELECT * FROM tb_unsafecondition WHERE id_user=$id limit $start, $limit";

        $result = mysqli_query($con, $sql); 
        
        $res = array(); 

        while($row = mysqli_fetch_assoc($result))
        {
            $res[] = $row;
        }

        echo json_encode($res);

    } else {
            echo "over";
    }

    mysqli_close($con);

?>
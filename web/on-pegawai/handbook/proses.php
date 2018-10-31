<?php
$server		= "localhost"; //sesuaikan dengan nama server
$user		= "root"; //sesuaikan username
$password	= ""; //sesuaikan password
$database	= "u442702252_safety1"; //sesuaikan target databese

$con = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {

echo "Gagal terhubung MySQL: " . mysqli_connect_error();

 }

class emp{}

$url    = $_POST['url'];
$name   = $_POST['name'];

if (isset($_POST['name']) and isset($_FILES['pdf']['name'])) {

    $random = random_word(20);
    $path = "pdf_file/".$random.".pdf";
    
    // sesuiakan ip address laptop/pc atau URL server
    $actualpath = "http://localhost/public_html/android/user/handbook/$path";

    try {

        move_uploaded_file($_FILES['pdf']['tmp_name'], $path);	
        $query = mysqli_query($con, "INSERT INTO tb_handbook (url, name) VALUES ('$actualpath', '$name')");

            if ($query){
            $response = new emp();
            $response->success = 1;
            $response->message = "Successfully Uploaded";
            die(json_encode($response));
        } 
        
    } catch (Exception $e) {
        $response = new emp();
        $response->success = 0;
        $response->message = "Error Upload image";
        die(json_encode($response)); 
    }
    
}	

// fungsi random string pada gambar untuk menghindari nama file yang sama
function random_word($id = 20){
    $pool = '1234567890abcdefghijkmnpqrstuvwxyz';
    
    $word = '';
    for ($i = 0; $i < $id; $i++){
        $word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
    }
    return $word; 
}
mysqli_close($con);

?>	
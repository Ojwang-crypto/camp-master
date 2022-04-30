<?php



$db = new PDO("mysql:host=localhost;dbname=camp", "root", "");


if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    $stmt = $db -> prepare("select * from newsletter where id=?");
    $stmt->bindParam(1,$id);
    $stmt->execute();
    $data = $stmt -> fetch();
    
    $file = 'newsletters/'.$data['newsletter'];

    if(file_exists($file)){
        header('Content-Disposition: name="'.basename($file).'"');
        header('Content-Type:'.$data['newsletter']);
        readfile($file);
        exit;
        
    }
      
}
?>
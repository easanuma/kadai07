<?php

//1. DB接続
try {
    $pdo = new
    PDO('mysql:dbname=accounting_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
 exit('DbConnectError:' .$e->getMessage());
}

//2. データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM accounting_db_01");
$status = $stmt->execute();

//3.データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= "<p>";
        $view .='<a href="bm_update_view.php?id='.$result["id"].'">';
        $view .=$result["tourokubi"];
        $view .='</a>　';
        $view .='';
        $view .='<a href="delete.php?id='.$result["id"].'">';
        $view .='[削除]';
        $view .='</a>';
        $view .= "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>リスト表示</title>
</head>
<body>
   <?=$view?>
    
</body>
</html>
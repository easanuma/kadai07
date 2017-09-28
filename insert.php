<?php

//if(
//    !isset($_POST["syuueki"]) || $_POST["syuueki"]=="" ||
//    !isset($_POST["syuuekihozyo"]) || $_POST["syuuekihozyo"]=="" ||
//    !isset($_POST["syuuekikinngaku"]) || $_POST["syuuekikinngaku"]=="" ||
//    !isset($_POST["gennka"]) || $_POST["gennka"]=="" ||
//    !isset($_POST["gennkahozyo"]) || $_POST["gennkahozyo"]=="" ||
//    !isset($_POST["gennkakinngaku"]) || $_POST["gennkakinngaku"]=="" ||
//    !isset($_POST["hiyou"]) || $_POST["hiyou"]=="" ||
//    !isset($_POST["hiyouhozyo"]) || $_POST["hiyouhozyo"]=="" ||
//    !isset($_POST["hiyoukinngaku"]) || $_POST["hiyoukinngaku"]==""
//){
//    exit('ParamError');
//}

//1. POSTデータ取得  test
$tourokubi = $_POST["tourokubi"];
$syuueki = $_POST["syuueki"];
$syuuekihozyo = $_POST["syuuekihozyo"];
$syuuekikingaku = $_POST["syuuekikingaku"];
$gennka = $_POST["gennka"];
$gennkahozyo = $_POST["gennkahozyo"];
$gennkakingaku = $_POST["gennkakingaku"];
$hiyou = $_POST["hiyou"];
$hiyouhozyo = $_POST["hiyouhozyo"];
$hiyoukingaku = $_POST["hiyoukingaku"];

//2. DB接続
try {
    $pdo = new
    PDO('mysql:dbname=accounting_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
 exit('DbConnectError:' .$e->getMessage());
}

//3. データ登録SQL作成
$sql = "INSERT INTO accounting_db_01(tourokubi,syuueki,syuuekihozyo,syuuekikingaku,gennka,gennkahozyo,gennkakingaku,hiyou,hiyouhozyo,hiyoukingaku)VALUES(:a1,:a2,:a3,:a4,:a5,:a6,:a7,:a8,:a9,:a10)";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':a1',$tourokubi, PDO::PARAM_STR);
$stmt->bindValue(':a2',$syuueki, PDO::PARAM_STR);
$stmt->bindValue(':a3',$syuuekihozyo, PDO::PARAM_STR);
$stmt->bindValue(':a4',$syuuekikingaku, PDO::PARAM_INT);
$stmt->bindValue(':a5',$gennka, PDO::PARAM_STR);
$stmt->bindValue(':a6',$gennkahozyo, PDO::PARAM_STR);
$stmt->bindValue(':a7',$gennkakingaku, PDO::PARAM_INT);
$stmt->bindValue(':a8',$hiyou, PDO::PARAM_STR);
$stmt->bindValue(':a9',$hiyouhozyo, PDO::PARAM_STR);
$stmt->bindValue(':a10',$hiyoukingaku, PDO::PARAM_INT);
$status = $stmt->execute();

//4. データ登録処理後
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: post.php");
    exit;
}

?>
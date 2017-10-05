<?php
//1.POSTでParamを取得
$id = $_POST["id"];
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
$stmt = $pdo->prepare("UPDATE accounting_db_01 SET 
tourokubi=:tourokubi,
syuueki=:syuueki,
syuuekihozyo=:syuuekihozyo,
syuuekikingaku=:syuuekikingaku,
gennka=:gennka,
gennkahozyo=:gennkahozyo,
gennkakingaku=:gennkakingaku,
hiyou=:hiyou,
hiyouhozyo=:hiyouhozyo,
hiyoukingaku=:hiyoukingaku WHERE id =:id");

$stmt->bindValue(':tourokubi',$tourokubi);
$stmt->bindValue(':syuueki',$syuueki);
$stmt->bindValue(':syuuekihozyo',$syuuekihozyo);
$stmt->bindValue(':syuuekikingaku',$syuuekikingaku);
$stmt->bindValue(':gennka',$gennka);
$stmt->bindValue(':gennkahozyo',$gennkahozyo);
$stmt->bindValue(':gennkakingaku',$gennkakingaku);
$stmt->bindValue(':hiyou',$hiyou);
$stmt->bindValue(':hiyouhozyo',$hiyouhozyo);
$stmt->bindValue(':hiyoukingaku',$hiyoukingaku);
$stmt->bindValue(':id',$id);
$status = $stmt->execute();

if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５.リダイレクト
  header("Location: bm_list_view.php");
  exit;
}

?>
















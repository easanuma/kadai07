<?php
$id = $_GET["id"];

//2.DB接続など
try {
  $pdo = new PDO('mysql:dbname=accounting_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM accounting_db_01 WHERE id=:id");
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

//Errorチェック＆Errorがなければselect.phpへ
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．select.phpへリダイレクト
  header("Location: bm_list_view.php");
  exit;
}

?>
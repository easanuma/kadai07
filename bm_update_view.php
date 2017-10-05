<?php

ini_set("mbstring.internal_encoding", "UTF8");

//1.GETでid取得
$id = $_GET["id"];

//2. DB接続
try {
    $pdo = new PDO('mysql:dbname=accounting_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
}

$sql = "SELECT * FROM accounting_db_01 WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();


//3.データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    $row = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
    <form action="bm_update.php" method="post">
    <h1>科目選択</h1>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="date" name="tourokubi" value="<?=$row["tourokubi"]?>">
    <table>
    <tr>
    <td>収益</td>
    <td>
    <select name="syuueki" id="syuueki">
    <option value=""></option>
    <option value="売上"<?php if($row["syuueki"] == "売上"){echo ' selected="selected"';}?>>売上</option>
    <option value="雑収入"<?php if($row["syuueki"] == "雑収入"){echo ' selected="selected"';}?>>雑収入</option>
    </select>
    <select name="syuuekihozyo" id="syuuekihozyo">
    <option value=""></option>
    <option value="現金"<?php if($row["syuuekihozyo"] == "現金"){echo ' selected="selected"';}?>>現金</option>
    <option value="普通預金"<?php if($row["syuuekihozyo"] == "普通預金"){echo ' selected="selected"';}?>>普通預金</option>
    <option value="当座預金"<?php if($row["syuuekihozyo"] == "当座預金"){echo ' selected="selected"';}?>>当座預金</option>
    <option value="売掛金"<?php if($row["syuuekihozyo"] == "売掛金"){echo ' selected="selected"';}?>>売掛金</option>
    </select>
    <input type="text" name="syuuekikingaku" value="<?=$row["syuuekikingaku"]?>">円
    </td>
    </tr>
    
    <tr>
    <td>原価</td>
    <td>
    <select name="gennka" id="gennka">
    <option value=""></option>
    <option value="仕入"<?php if($row["gennka"] == "仕入"){echo ' selected="selected"';}?>>仕入</option>
    <option value="外注費"<?php if($row["gennka"] == "外注費"){echo ' selected="selected"';}?>>外注費</option>
    </select>
    <select name="gennkahozyo" id="gennkahozyo">
    <option value=""></option>
    <option value="現金"<?php if($row["gennkahozyo"] == "現金"){echo ' selected="selected"';}?>>現金</option>
    <option value="普通預金"<?php if($row["gennkahozyo"] == "普通預金"){echo ' selected="selected"';}?>>普通預金</option>
    <option value="当座預金"<?php if($row["gennkahozyo"] == "当座預金"){echo ' selected="selected"';}?>>当座預金</option>
    <option value="買掛金"<?php if($row["gennkahozyo"] == "買掛金"){echo ' selected="selected"';}?>>買掛金</option>
    </select>
    <input type="text" name="gennkakingaku" value="<?=$row["gennkakingaku"]?>">円
    </td>
    </tr>
    
    <tr>
    <td>費用</td>
    <td>
    <select name="hiyou" id="hiyou">
    <option value=""></option>
    <option value="給与手当"<?php if($row["hiyou"] == "給与手当"){echo ' selected="selected"';}?>>給与手当</option>
    <option value="福利厚生費"<?php if($row["hiyou"] == "福利厚生費"){echo ' selected="selected"';}?>>福利厚生費</option>
    <option value="旅費交通費"<?php if($row["hiyou"] == "旅費交通費"){echo ' selected="selected"';}?>>旅費交通費</option>
    <option value="通信費"<?php if($row["hiyou"] == "通信費"){echo ' selected="selected"';}?>>通信費</option>
    <option value="水道光熱費"<?php if($row["hiyou"] == "水道光熱費"){echo ' selected="selected"';}?>>水道光熱費</option>
    <option value="広告宣伝費"<?php if($row["hiyou"] == "広告宣伝費"){echo ' selected="selected"';}?>>広告宣伝費</option>
    <option value="会議費"<?php if($row["hiyou"] == "会議費"){echo ' selected="selected"';}?>>会議費</option>
    <option value="交際費"<?php if($row["hiyou"] == "交際費"){echo ' selected="selected"';}?>>交際費</option>
    <option value="消耗品費"<?php if($row["hiyou"] == "消耗品費"){echo ' selected="selected"';}?>>消耗品費</option>
    <option value="新聞図書費"<?php if($row["hiyou"] == "新聞図書費"){echo ' selected="selected"';}?>>新聞図書費</option>
    <option value="支払手数料"<?php if($row["hiyou"] == "支払手数料"){echo ' selected="selected"';}?>>支払手数料</option>
    <option value="地代家賃"<?php if($row["hiyou"] == "地代家賃"){echo ' selected="selected"';}?>>地代家賃</option>
    <option value="支払報酬"<?php if($row["hiyou"] == "支払報酬"){echo ' selected="selected"';}?>>支払報酬</option>
    <option value="保険料"<?php if($row["hiyou"] == "保険料"){echo ' selected="selected"';}?>>保険料</option>
    <option value="修繕費"<?php if($row["hiyou"] == "修繕費"){echo ' selected="selected"';}?>>修繕費</option>
    <option value="研修費"<?php if($row["hiyou"] == "研修費"){echo ' selected="selected"';}?>>研修費</option>
    <option value="租税公課"<?php if($row["hiyou"] == "租税公課"){echo ' selected="selected"';}?>>租税公課</option>
    <option value="減価償却費"<?php if($row["hiyou"] == "原価償却費"){echo ' selected="selected"';}?>>減価償却費</option>
    <option value="支払利息"<?php if($row["hiyou"] == "支払利息"){echo ' selected="selected"';}?>>支払利息</option>
    <option value="雑費"<?php if($row["hiyou"] == "雑費"){echo ' selected="selected"';}?>>雑費</option>
    </select>
    <select name="hiyouhozyo" id="hiyouhozyo">
    <option value=""></option>
    <option value="現金"<?php if($row["hiyouhozyo"] == "現金"){echo ' selected="selected"';}?>>現金</option>
    <option value="普通預金"<?php if($row["hiyouhozyo"] == "普通預金"){echo ' selected="selected"';}?>>普通預金</option>
    <option value="当座預金"<?php if($row["hiyouhozyo"] == "当座預金"){echo ' selected="selected"';}?>>当座預金</option>
    <option value="未払金"<?php if($row["hiyouhozyo"] == "未払金"){echo ' selected="selected"';}?>>未払金</option>
    <option value="預り金"<?php if($row["hiyouhozyo"] == "預り金"){echo ' selected="selected"';}?>>預り金</option>
    </select>
    <input type="text" name="hiyoukingaku" value="<?=$row["hiyoukingaku"]?>">円
    </td>
    </tr>
    </table>
    <input type="submit" value="送信">
    </form>
</body>
</html>
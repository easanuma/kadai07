<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
    <form action="insert.php" method="post">
    <h1>科目選択</h1>
    <input type="date" name="tourokubi">
    <table>
    <tr>
    <td>収益</td>
    <td>
    <select name="syuueki" id="syuueki">
    <option value=""></option>
    <option value="売上">売上</option>
    <option value="雑収入">雑収入</option>
    </select>
    <select name="syuuekihozyo" id="syuuekihozyo">
    <option value=""></option>
    <option value="現金">現金</option>
    <option value="普通預金">普通預金</option>
    <option value="当座預金">当座預金</option>
    <option value="売掛金">売掛金</option>
    </select>
    <input type="text" name="syuuekikingaku">円
    </td>
    </tr>
    
    <tr>
    <td>原価</td>
    <td>
    <select name="gennka" id="gennka">
    <option value=""></option>
    <option value="仕入">仕入</option>
    <option value="外注費">外注費</option>
    </select>
    <select name="gennkahozyo" id="gennkahozyo">
    <option value=""></option>
    <option value="現金">現金</option>
    <option value="普通預金">普通預金</option>
    <option value="当座預金">当座預金</option>
    <option value="買掛金">買掛金</option>
    </select>
    <input type="text" name="gennkakingaku">円
    </td>
    </tr>
    
    <tr>
    <td>費用</td>
    <td>
    <select name="hiyou" id="hiyou">
    <option value=""></option>
    <option value="給与手当">給与手当</option>
    <option value="福利厚生費">福利厚生費</option>
    <option value="旅費交通費">旅費交通費</option>
    <option value="通信費">通信費</option>
    <option value="水道光熱費">水道光熱費</option>
    <option value="広告宣伝費">広告宣伝費</option>
    <option value="会議費">会議費</option>
    <option value="交際費">交際費</option>
    <option value="消耗品費">消耗品費</option>
    <option value="新聞図書費">新聞図書費</option>
    <option value="支払手数料">支払手数料</option>
    <option value="地代家賃">地代家賃</option>
    <option value="支払報酬">支払報酬</option>
    <option value="保険料">保険料</option>
    <option value="修繕費">修繕費</option>
    <option value="研修費">研修費</option>
    <option value="租税公課">租税公課</option>
    <option value="減価償却費i">減価償却費</option>
    <option value="支払利息">支払利息</option>
    <option value="雑費">雑費</option>
    </select>
    <select name="hiyouhozyo" id="hiyouhozyo">
    <option value=""></option>
    <option value="現金">現金</option>
    <option value="普通預金">普通預金</option>
    <option value="当座預金">当座預金</option>
    <option value="未払金">未払金</option>
    <option value="預り金">預り金</option>
    </select>
    <input type="text" name="hiyoukingaku">円
    </td>
    </tr>
    </table>
    <input type="submit" value="送信">
    </form>
</body>
</html>
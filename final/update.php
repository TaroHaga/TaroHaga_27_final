<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$jyan   = $_POST["jyan"];
$url  = $_POST["url"];
$naiyou = $_POST["naiyou"];
$age    = $_POST["age"]; //追加されています
$hyo    = $_POST["hyo"];
// $ten    = $_POST["ten"];
$siin    = $_POST["siin"];
$nin    = $_POST["nin"];
$aite    = $_POST["aite"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_an_table(name,jyan,url,age,naiyou,hyo,siin,nin,aite,indate)VALUES(:name,:jyan,:url,:age,:naiyou,:hyo,:siin,:nin,:aite,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':jyan', $jyan, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':age', $age, PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':hyo', $hyo, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':ten', $ten, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':siin', $siin, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':nin', $nin, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':aite', $aite, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("select.php");
}
?>

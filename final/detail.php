<?php
$id = $_GET["id"]; //?id~**を受け取る

session_start();

//１．関数群の読み込み
include("funcs.php");

//LOGINチェック → funcs.phpへ関数化しましょう！
//if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
//    exit("Login Error");
//}else{
//    session_regenerate_id(true);
//    $_SESSION["chk_ssid"] = session_id();
//}


//２．データ登録SQL作成
$pdo = db_conn();
$stmt = $pdo->prepare("SELECT * FROM gs_an_table WHERE id=:id" );
$stmt->bindValue(':id', $id, PDO::PARAM_INT);        //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error($stmt);
}else{
  ///成功した場合
$row = $stmt->fetch();
}

//////元に戻す時ここ//////
// //２．データ登録SQL作成
// $stmt = $pdo->prepare("SELECT * FROM gs_an_table WHERE id=:id");
// $stmt->bindValue(":id",$id,PDO::PARAM_INT);
// $status = $stmt->execute();

// //３．データ表示
// if($status==false) {
//     sql_error($stmt);
// }else{
//     $row = $stmt->fetch();
// }
//////元に戻す時ここ//////

?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>お店情報編集🖋</legend>
    <label>店名：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
    <label>ジャンル<input type="text" name="jyan" value="<?=$row["jyan"]?>"></label><br>
                    <label>URL：<input type="text" name="url" value="<?=$row["url"]?>"></label><br>
                    <label>場所：<input type="text" name="age" value="<?=$row["age"]?>"></label><br><br>
                    <legend>お店評価🔥</legend>
                    <!-- <label>評価：<input type="text" name="hyo" value="<?=$row["hyo"]?>"></label><br> -->

                    <label>評価：
                    <input type="radio" name="hyo" value="1">⭐️</label>　　
                    <label><input type="radio" name="hyo" value="2">⭐️⭐️</label>　　
                    <label><input type="radio" name="hyo" value="3">⭐️⭐️⭐️</label>　　
                    <label><input type="radio" name="hyo" value="4">⭐️⭐️⭐️⭐️</label>　　
                    <label><input type="radio" name="hyo" value="5">⭐️⭐️⭐️⭐️⭐️</label>　　　※もう一度評価して下さい。<br> 



                    <label><textArea name="naiyou" rows="4" cols="40"> <?=$row["naiyou"]?></textArea></label><br><br>
                    <legend>使用記録🗒</legend>
                    <label>使用シーン：<input type="text" name="siin" value="<?=$row["siin"]?>"></label><br>
                    <!-- <label>使用人数：<input type="text" name="nin" value="<?=$row["nin"]?>"></label><br> -->

                    <label>使用人数：<input type="radio" name="nin" value="1">1人</label>　　
                    <label><input type="radio" name="nin" value="2">２人</label>　　
                    <label><input type="radio" name="nin" value="3">３人</label>　　
                    <label><input type="radio" name="nin" value="4">４人</label>　　
                    <label><input type="radio" name="nin" value="5">５人以上</label><br> 

                    <label>使用相手：<input type="text" name="aite" value="<?=$row["aite"]?>"></label><br>

<input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="送信">
     <input type="hidden" name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>

<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
// function db_conn(){
//   try {
//       $db_name = "gs_db3";    //データベース名
//       $db_id   = "root";      //アカウント名
//       $db_pw   = "";      //パスワード：XAMPPはパスワード無しに修正してください。
//       $db_host = "localhost"; //DBホスト
//       return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
//   } catch (PDOException $e) {
//     exit('DB Connection Error:'.$e->getMessage());
//   }
// }

try {
  if($_SERVER["HTTP_HOST"] == 'localhost'){
      //localhostの場合
      $db_name = "gs_db3";    //データベース名
      $db_id   = "root";      //アカウント名
      $db_pw   = "";          //パスワード：XAMPPはパスワード無しに修正してください。
      $db_host = "localhost"; //DBホスト
  }else{ //localhost以外＊＊自分で書き直してください！！＊＊
      $db_name = "violetokapi13_gs_db3";  //データベース名
      $db_id   = "violetokapi13";  //アカウント名（さくらコントロールパネルに表示されています）
      $db_pw   = "1220taro_5";  //パスワード(さくらサーバー最初にDB作成する際に設定したパスワード)
      $db_host = "mysql57.violetokapi13.sakura.ne.jp"; //例）mysql**db.ne.jp...
  }
  return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
} catch (PDOException $e) {
  exit('DB Connection Error:'.$e->getMessage());
}





//SQLエラー
function sql_error($stmt){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

//リダイレクト
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}

//SessionCheck(スケルトン)
function sschk(){

}

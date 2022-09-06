<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>会食管理台帳</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">登録店一覧🍽</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="ranking.php">高評価店👏</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="ng.php">危険 NG店🙅</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>お店登録🍺</legend>
                    <label>店名：<input type="text" name="name"></label><br>
                    <label>ジャンル：<input type="text" name="jyan"></label><br>
                    <label>URL：<input type="text" name="url"></label><br>
                    <label>場所：<input type="text" name="age"></label><br><br>

                    <legend>お店評価🔥</legend>
                    <!-- <label>評価：<input type="text" name="hyo"></label><br> -->

                    <label>評価：
                    <input type="radio" name="hyo" value="1">⭐️</label>　　
                    <label><input type="radio" name="hyo" value="2">⭐️⭐️</label>　　
                    <label><input type="radio" name="hyo" value="3">⭐️⭐️⭐️</label>　　
                    <label><input type="radio" name="hyo" value="4">⭐️⭐️⭐️⭐️</label>　　
                    <label><input type="radio" name="hyo" value="5">⭐️⭐️⭐️⭐️⭐️</label><br> 


                    <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br><br>

                    <legend>使用記録🗒</legend>
                    <label>使用シーン：<input type="text" name="siin"></label><br>

                    <!-- <label>使用人数：<input type="text" name="nin"></label><br> -->
                    <label>使用人数：<input type="radio" name="nin" value="1">1人</label>　　
                    <label><input type="radio" name="nin" value="2">２人</label>　　
                    <label><input type="radio" name="nin" value="3">３人</label>　　
                    <label><input type="radio" name="nin" value="4">４人</label>　　
                    <label><input type="radio" name="nin" value="5">５人以上</label><br> 

                    <label>使用相手：<input type="text" name="aite"></label><br>

                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
        <!-- Main[End] -->


    </body>
</html>

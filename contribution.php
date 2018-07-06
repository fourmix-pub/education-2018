<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>投稿</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    <form action="display.php" method="post">
      <p>名前：<input type="text" name="namae"></p>
      <p>コメント<textarea name="coments" rows="4" cols="40"></textarea></p>
      <p><input type="submit" value="送信"></p>
    </form>
  </body>
</html>

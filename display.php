<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>投稿一覧</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    <?php
      print ($_POST['title']);
      print ($_POST['namae']);
      print ($_POST['coments']);
      ?>
      <a href="投稿" class="btn btn-primary">投稿</a>
      <a href="戻る" class="btn btn-primary">戻る</a>
  </body>
</html>

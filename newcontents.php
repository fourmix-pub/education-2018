<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
    <div class="card">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <h5 class="card-title">新規トピックス作成</h5>
        <p class="card-text">タイトル  <?php print($_POST ['title']); ?><br>
        コンテンツ  <?php print($_POST ['contents']); ?></p>
        <input type="submit" value="送信" class="btn btn-primary">
      </div>
    </div>
    </div>
  </body>
</html>

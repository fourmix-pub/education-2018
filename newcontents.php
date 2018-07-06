<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
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

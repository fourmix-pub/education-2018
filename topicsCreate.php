<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>新規トピックス作成</title>
  </head>
  <body>
    <div class="container">
    <div class="card">
      <div class="card-header">
        お題はなんですか？
      </div>
      <div class="card-body">
          <form action="newTopic.php" method=post>
            <p>タイトル<input type="text" name="title"></p>
            <p>お名前<input type="text" name="name"></p>
          <p>コンテンツ<input type="text" name="contents"></p>
          <input type="submit" value="作成" class="btn btn-primary">
        </form>
      </div>
    </div>
    </div>
  </div>
  </body>
</html>

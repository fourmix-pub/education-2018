<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>やること追加|やることリスト</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card text-center">
            <div class="card-header">
              やること追加
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 text-left">
                  <form action="/sotre-topic.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail2">やること</label>
                      <input type="text" name="toDo" class="form-control" id="exampleInputEmail2">
                    </div>
                    <button type="submit" class="btn btn-primary">作成</button>
                    <button type="submit" class="btn btn-danger"　onclick="location href='main.php'">戻る</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

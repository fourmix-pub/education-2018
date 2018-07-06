<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>話題作成|掲示板</title>
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
              話題作成
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 text-left">
                  <form action="/sotre-topic.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail2">名前</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">話題</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">内容</label>
                      <textarea name="content" class="form-control" id="exampleInputEmail3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">作成</button>
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

s<!DOCTYPE html>
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
              返信
            </div>
            <div class="card-body">
              <div class="row">a
                <div class="col-md-12 text-left">
                    <form action="/sotre-reply.php" method="post">
                      <div class="form-group">
                          <label for="exampleInputEmail1"></label>
                          <input type="hidden" name="id" class="form-control" id="exampleInputEmail1"></textarea>
                        </div>
                        <label for="exampleInputEmail2">名前</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail2">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">内容</label>
                        <textarea name="content" class="form-control" id="exampleInputEmail3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail4"></label>
                        <input type="hidden" name="comment_id" class="form-control" id="exampleInputEmail4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">送信</button>
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

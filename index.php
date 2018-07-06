<?php
require __DIR__."/Database.php";

$db = new Database();
$topics = $db->topics();
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>掲示板</title>
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
              掲示板
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="" class="btn btn-primary">お題作成</a>
                </div>
              </div>
              <hr>
              <?php foreach($topics as $topic):  ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-dark text-left" role="alert">
                      <a href="/topic.php?topic=<?= $topic['id'] ?>"><?= $topic['title'] ?></a>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

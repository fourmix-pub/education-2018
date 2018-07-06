<?php
require __DIR__.'/Database.php';
$topicId = $_GET['topic'];
$db = new Database();
$topic = $db->findTopic($topicId);
$comments = $db->topicComments($topicId);
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>話題｜掲示板</title>
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
              話題：<?= $topic['title'] ?>
            </div>
            <div class="card-body">
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="card text-left">
                    <div class="card-header">
                      <?= $topic['name'] ?>
                    </div>
                    <div class="card-body">
                      <p class="card-text">
                        <?= $topic['content'] ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <?php foreach ($comments as $comment): ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card text-left">
                      <div class="card-header">
                        <?= $comment['name'] ?>
                      </div>
                      <div class="card-body">
                        <p class="card-text">
                          <?= $comment['content'] ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <a href="/index.php" class="btn btn-primary btn-lg btn-block">話題一覧に戻る</a>
        </div>
      </div>
    </div>
  </body>
</html>

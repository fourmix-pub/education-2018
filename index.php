<?php
class Database
{
  protected $mysql;
  public function __construct()
  {
    $this->mysql = new mysqli('127.0.0.1', 'homestead', 'secret', 'homestead');
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  }
  public function topics()
  {
    $res->$this->topics->query("SELECT * FROM topics");
    return $res -> fetch_all(1);
  }
}
    $db= new Database();
    $topics = $db -> topics();
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
                  <a href="topicsCreate.php" class="btn btn-primary">お題作成</a>
                </div>
              </div>
              <hr>
              <?= foreach ($topics as $topic);?>
              <div class="row">
                <div class="col-md-12 text-left">
                  <div class="alert alert-dark" role="alert">
                <a href="#"> <?= $topic?></a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

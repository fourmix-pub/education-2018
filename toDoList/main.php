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
  public function lists()
  {
    $res->$this->topics->query("SELECT * FROM toDos");
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
    <title>やることリスト</title>
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
              やることリスト
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="topicsCreate.php" class="btn btn-primary"></a>
                </div>
              </div>
              <hr>
              <?= foreach ($toDos as $todo);?>
              <div class="row">
                <div class="col-md-12 text-left">
                  <div class="alert alert-dark" role="alert">
              <?= $list?>
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

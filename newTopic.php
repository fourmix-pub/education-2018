<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title> <?php print($_POST ['title']); ?></title>
  </head>
  <body>

    <div class="container">
      <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title"> <?php print($_POST ['title']); ?></h5>
          <p class="card-text">
          コンテンツ  <?php print($_POST ['contents']); ?></p>
      </div>
    </div>
  </div>
  </body>
</html>

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
        <?php print($_POST ['title']); ?>
        </div>
        <div class="card-body">
          <p class="card-text">
            <?php print($_POST ['name']); ?>：
        <?php print($_POST ['contents']); ?></p>
        <input type="button" onclick="location.href='newPost.php'" value="投稿">
      </div>
      <p class="card-text">
    </div>
  </div>
  </body>
</html>

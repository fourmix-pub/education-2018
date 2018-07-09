<?php
require __DIR__.'/Database.php';

$db = new Database();

if ($db->createComment(new Comment($_POST))) {
  header('Location: topic.php?topic='.$_POST['topic_id']);
  exit;
} else {
  header('Location: topic.php');
}

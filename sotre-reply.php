<?php
require __DIR__.'/Database.php';

$db = new Database();

if ($db->createReply(new Reply($_POST))) {
  header('Location: topic.php');
  exit;
} else {
  header('Location: topic.php');
}

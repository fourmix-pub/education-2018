<?php
require __DIR__.'/Database.php';

$db = new Database();

if ($db->createTopic(new Topic($_POST))) {
  header('Location: index.php');
  exit;
} else {
  header('Location: create-topic.php');
}

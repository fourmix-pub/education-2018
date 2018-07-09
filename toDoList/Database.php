<?php
require __DIR__.'/Models/toDo.php';

class Database
{
  protected $mysql;

  public function __construct()
  {
    $this->mysql = new mysqli('127.0.0.1', 'homestead', 'secret', 'homestead');
    $this->mysql->set_charset('utf8');
  }
public function createTopic(toDo $toDo): bool
{
  $stmt = $this->mysql->prepare("INSERT INTO topics(title,content,name) VALUES (?,?,?)");
  $stmt->bind_param('sss', $topic->title, $topic->content, $topic->name);
  $stmt->execute();
  $stmt->close();
  return true;
}

public function comp(toDo $toDo): bool
{
  $stmt = $this->mysql->prepare("UPDATE SET toDos comp_flg = '1' WHERE id = ?)") ;
  $stmt->bind_param('sit', $toDo->title, $toDo->id, $toDo->comp_flg);
  $stmt->execute();
  $stmt->close();
  return true;
}
}
?>

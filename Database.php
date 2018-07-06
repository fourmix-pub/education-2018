<?php

class Database
{
  protected $mysql;

  public function __construct()
  {
    $this->mysql = new mysqli('127.0.0.1', 'homestead', 'secret', 'homestead');
    $this->mysql->set_charset('utf8');
  }

  public function topics(): array
  {
    $res = $this->mysql->query("SELECT * FROM topics");
    return $res->fetch_all(1);
  }

  public function findTopic(int $id): array
  {
    $res = $this->mysql->query("SELECT * FROM topics WHERE id = {$id}");
    return $res->fetch_assoc();
  }

  public function topicComments(int $topicId): array
  {
    $res = $this->mysql->query("SELECT * FROM comments WHERE topic_id = {$topicId}");
    return $res->fetch_all(1);
  }

  public function commentReplies(int $commentId): array
  {
    $res = $this->mysql->query("SELECT * FROM replies WHERE comment_id = {$commentId}");
    return $res->fetch_all(1);
  }
}

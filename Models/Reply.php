<?php

class Topic
{
  public $id;
  public $comment_id;
  public $name;
  public $content;

  public function __construct($post)
  {
    $this->name = $post['id'];
    $this->comment_id = $post['comment_id'];
    $this->name = $post['name'];
    $this->content = $post['content'];
  }
}

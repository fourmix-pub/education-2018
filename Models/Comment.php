<?php

class Comment
{
  public $name;
  public $content;
  public $topic_id;

  public function __construct($post)
  {
    $this->name = $post['name'];
    $this->content = $post['content'];
    $this->topic_id = $post['topic_id'];
  }
}

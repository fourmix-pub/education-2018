<?php

class Topic
{
  public $name;
  public $title;
  public $content;

  public function __construct($post)
  {
    $this->name = $post['name'];
    $this->title = $post['title'];
    $this->content = $post['content'];
  }
}

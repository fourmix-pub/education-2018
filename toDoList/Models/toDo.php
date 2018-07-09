<?php

class ToDo
{
  public $id;
  public $title;
  public $comp_flg;

  public function __construct($post)
  {
    $this->id = $post['id'];
    $this->title = $post['title'];
    $this->comp_flg = $post['comp_flg'];
  }
}

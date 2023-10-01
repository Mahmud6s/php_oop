<?php

class Comment{
    public $comment;
    public $id;

    public function __construct($text, $userid){
        $this->comment = $text;
        $this->id = $userid;
    }
}
$NewComment = new Comment("This is a comment",1);

echo $NewComment->comment . "  from : " .$NewComment->id ;
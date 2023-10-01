<?php

class Song{
    public $songId;
    public $songTitle;
}

$numb = new Song();
$numb->songId = 1;
$numb->songTitle = 'balam';



class Playlist {
    public $name;
    public $songs = [];

    public function addSong($song){
        $this->songs[] = $song;
    }
}

$RockPlaylist = new Playlist();
$RockPlaylist->name = 'Rock';
$RockPlaylist->addSong($numb);
print_r($RockPlaylist);
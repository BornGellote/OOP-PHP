<?php

// Create a song class
class Song
{
    // Create songId and title public properties
    public $songId;
    public $title;
}

class Playlist
{
    public $name;
    public $songs = [];

    public function addSong($song) {

        $this->songs[] = $song;
    }
}










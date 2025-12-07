<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArtistForm extends Component
{
    public $action;
    public $method;
    public $artist;
    public $artpieces;

    public function __construct($action = null, $method = 'POST', $artist = null, $artpieces = [])
    {
        $this->action = $action;
        $this->method = $method;
        $this->artist = $artist;
        $this->artpieces = $artpieces;
    }

    public function render()
    {
        return view('components.artist-form');
    }
}

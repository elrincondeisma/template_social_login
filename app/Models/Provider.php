<?php
namespace App\Models;

class Provider
{
    public $name;
    public $slug;
    public $active;
    public $svg;


    public function __construct($name,$slug, $active, $svg)
    {
        $this->name = $name;
        $this->slug = $slug;
        $this->active = $active;
        $this->svg = $svg;
    }
}
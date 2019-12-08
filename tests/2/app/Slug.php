<?php

class Slug 
{
  public function __construct($original)
      {
        $this->original = $original;
      }
      
  public function render()
      {
        
        $slug = str_replace(" ", "-", $this->original);

        return strtolower($slug);
      }
}

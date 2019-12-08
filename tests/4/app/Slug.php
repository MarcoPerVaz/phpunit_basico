<?php

namespace App;

class Slug 
{

  public function __construct($original)
      {
        // $this->original = trim($original); /* Así o con la función getOriginal */
        $this->original = $original;
      }

  public function getOriginal()
      {
        return trim($this->original);
      }

  public function render()
      {
        
        // $slug = str_replace( " ", "-", trim($this->original) ); /* Aquí o en el constructor */
        // $slug = str_replace(" ", "-", $this->original);
        $slug = str_replace( " ", "-", $this->getOriginal() ); /*Para usar la función getOriginal */


        return strtolower($slug);
      }
      
}

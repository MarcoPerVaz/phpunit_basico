<?php
// Ejercicio 1
  // class Slug
  // {
  //   public function render($original)
  //   {
  //     $slug = str_replace(" ", "-", $original);

  //     return $slug;
  //   }
  // }

    // $slug = new Slug;

    // echo $slug->render("Cursos de Laravel");

// 
// Ejercicio 2
  // class Slug
  // {
  //   public function render($original)
  //   {
  //     $slug = str_replace(" ", "-", $original);

  //     return strtolower($slug);
  //   }
  // }

  //   $slug = new Slug;

  //   echo $slug->render("Cursos de Laravel");
// 
// Ejercicio 3
    // class Slug
    // {
    //   protected $original;

    //   public function __construct($original)
    //   {
    //     $this->original = $original;
    //   }

    //   public function render()
    //   {
    //     $slug = str_replace(" ", "-", $this->original);

    //     return strtolower($slug);
    //   }
    // }

    //   $slug = new Slug("Cursos de Laravel");

    //   echo $slug->render();
// 
// Ejercicio 4
require "Slug.php";

$slug = new Slug("Cursos de Laravel");

echo $slug->render();
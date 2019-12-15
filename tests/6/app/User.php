<?php

namespace App;

class User
{

  protected $name;
  protected $lastname;
  protected $email;

  public function setName( $name )
  {
    // $this->name = $name;
    $this->name = trim($name);

  }

  public function setLastName( $lastname )
  {
    // $this->lastname = $lastname;
    $this->lastname = trim($lastname);
  }

  public function setEmail( $email )
  {
    // $this->email = $email;
    $this->email = trim($email);
  }

  public function getName()
  {
    return $this->name;
  }

  public function getLastName()
  {
    return $this->lastname;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getFullName()
  {
    // return $this->name . ' ' . $this->lastname; /* Refactor */
    // return "$this->name $this->lastname"; /* Retorna nombre y apellido y un espacio entre ambos */
    return trim("$this->name $this->lastname"); /* Para quitar los espacios en blanco */

  }

}

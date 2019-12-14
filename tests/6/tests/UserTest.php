<?php

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase 
{

  /* Refactor */
    protected $user;

    public function setUp() : void
    {
      $this->user = new User;
    }
  /*  */
  public function test_i_can_the_name()
  {
    // $user = new User; /* Se pasa al método setUp */
    // $user->setName( "Marco" ); /* Refactor */
    
    // $this->assertEquals( $user->getName(), "Marco" ); /* Refactor */

    $this->user->setName( "Marco" );
    $this->assertEquals( $this->user->getName(), "Marco" );
  }

  public function test_i_can_the_lastname()
  {
    // $user = new User; /* Se pasa al método setUp */
    // $user->setLastName( "Perdomo" ); /* Refactor */
    
    // $this->assertEquals( $user->getLastName(), "Perdomo" ); /* Refactor */
    
    $this->user->setLastName( "Perdomo" );
    $this->assertEquals( $this->user->getLastName(), "Perdomo" );
  }
  
}
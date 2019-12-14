<?php

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase 
{

  public function test_i_can_the_name()
  {
    $user = new User;
    $user->setName( "Marco" );

    $this->assertEquals( $user->getName(), "Marco" );
  }
  
}
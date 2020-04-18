<?php

namespace App\Tests\Unit\Entity;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserTest extends KernelTestCase
{
    /** @test */
    public function shouldAddUserSuccessfully()
    {
        $user = new User('Foo Name', 'email@gmail.com');
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($user->getName(), 'Foo Name');
        $this->assertEquals($user->getEmail(), 'email@gmail.com');
    }
}
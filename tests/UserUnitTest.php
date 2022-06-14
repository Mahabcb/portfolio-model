<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();

        $user->setNom('nom')
            ->setPrenom('prenom')
            ->setEmail('true@mail.com')
            ->setPassword('password')
            ->setTelephone('telephone')
            ->setAPropos('à propos')
            ->setInstagram('instagram');

        $this->assertTrue($user->getEmail() ==='true@mail.com' );
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getTelephone() === 'telephone');
        $this->assertTrue($user->getAPropos() === 'à propos');
        $this->assertTrue($user->getInstagram() === 'instagram');
        $this->assertTrue($user->getPassword() === 'password');
    }

    public function testIsFalse(): void
    {
        $user = new User();

        $user->setNom('nom')
            ->setPrenom('prenom')
            ->setEmail('true@mail.com')
            ->setPassword('password')
            ->setTelephone('telephone')
            ->setAPropos('à propos')
            ->setInstagram('instagram');

        $this->assertFalse($user->getEmail() ==='false@mail.com' );
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getTelephone() === 'false');
        $this->assertFalse($user->getAPropos() === 'false');
        $this->assertFalse($user->getInstagram() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
    }

    public function testIsEmpty(): void
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getTelephone());
        $this->assertEmpty($user->getAPropos());
        $this->assertEmpty($user->getInstagram());
        $this->assertEmpty($user->getPassword());
    }  
    
}

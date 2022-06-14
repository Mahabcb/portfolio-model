<?php

namespace App\Tests;

use App\Entity\Categorie;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new Categorie();

        $user->setNom('nom')
            ->setDescription('description')
            ->setSlug('slug');

 
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getDescription() === 'description');
        $this->assertTrue($user->getSlug() === 'slug');
    }

    public function testIsFalse(): void
    {
        $user = new Categorie();

        $user->setNom('nom')
            ->setDescription('description')
            ->setSlug('slug');

        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getDescription() === 'false');
        $this->assertFalse($user->getSlug() === 'false');
    }

    public function testIsEmpty(): void
    {
        $user = new Categorie();

        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getDescription());
        $this->assertEmpty($user->getSlug());
        
    }  
    
}

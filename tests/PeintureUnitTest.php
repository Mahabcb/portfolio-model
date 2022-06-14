<?php

namespace App\Tests;

use App\Entity\Categorie;
use App\Entity\Peinture;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class PeinturesUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $peinture = new Peinture();
        $datetime = new DateTime();
        $user = new User;
        $categorie = new Categorie;

        $peinture->setNom('nom')
                ->setLargeur(20.20)
                ->setHauteur(20.20)
                ->setEnVente(true)
                ->setDateRealisation($datetime)
                ->setCreatedAt($datetime)
                ->setDescription('description')
                ->setPortfolio(true)
                ->setFile('file')
                ->setPrix(20.20)
                ->setUser($user)
                ->addCategorie($categorie)
                ->setSlug('slug');

        $this->assertTrue($peinture->getNom() === 'nom');       
        $this->assertTrue($peinture->getHauteur() == 20.20);
        $this->assertTrue($peinture->getLargeur() == 20.20);
        $this->assertTrue($peinture->getDateRealisation() === $datetime);
        $this->assertTrue($peinture->getCreatedAt() === $datetime);
        $this->assertTrue($peinture->getDescription() === 'description');
        $this->assertTrue($peinture->getUser() === $user);
        $this->assertContains($categorie, $peinture->getCategorie());
        $this->assertTrue($peinture->getSlug() === 'slug');
        $this->assertTrue($peinture->getFile() === 'file');
        $this->assertTrue($peinture->isPortfolio() === true);
    }

    public function testIsFalse(): void
    {
        $peinture = new Peinture();
        $datetime = new DateTime();
        $user = new User;
        $categorie = new Categorie;

        $peinture->setNom('nom')
                ->setLargeur(20.20)
                ->setHauteur(20.20)
                ->setEnVente(true)
                ->setDateRealisation($datetime)
                ->setCreatedAt($datetime)
                ->setDescription('description')
                ->setPortfolio(true)
                ->setFile('file')
                ->setPrix(20.20)
                ->setUser($user)
                ->addCategorie($categorie)
                ->setSlug('slug');

        $this->assertFalse($peinture->getNom() === 'false');       
        $this->assertFalse($peinture->getHauteur() === false);
        $this->assertFalse($peinture->getLargeur() === false);
        $this->assertFalse($peinture->getDateRealisation() === false);
        $this->assertFalse($peinture->getCreatedAt() === false);
        $this->assertFalse($peinture->getDescription() === 'false');
        $this->assertFalse($peinture->getUser() === false);
        $this->assertFalse($peinture->getCategorie() === false);
        $this->assertFalse($peinture->getSlug() === 'false');
        $this->assertFalse($peinture->getFile() === 'false');
        $this->assertFalse($peinture->isPortfolio() === false);
    }

    public function testIsEmpty(): void
    {
        $peinture = new Peinture();

        $this->assertEmpty($peinture->getNom());       
        $this->assertEmpty($peinture->getHauteur());
        $this->assertEmpty($peinture->getLargeur());
        $this->assertEmpty($peinture->getDateRealisation());
        $this->assertEmpty($peinture->getCreatedAt() );
        $this->assertEmpty($peinture->getDescription());
        $this->assertEmpty($peinture->getUser() );
        $this->assertEmpty($peinture->getCategorie());
        $this->assertEmpty($peinture->getSlug() );
        $this->assertEmpty($peinture->getFile() );
        $this->assertEmpty($peinture->isPortfolio());
    }
    
}

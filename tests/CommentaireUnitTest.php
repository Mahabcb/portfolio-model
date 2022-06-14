<?php

namespace App\Tests;

use App\Entity\BlogPost;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use DateTime;
use PHPUnit\Framework\TestCase;

class CommentairesUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $commentaire = new Commentaire;
        $datetime = new DateTime();
        $blogpost = new BlogPost;
        $peinture = new Peinture;

        $commentaire    ->setAuteur('auteur')
                        ->setEmail('test@mail.com')
                        ->setCreatedAt($datetime)
                        ->setContenu('contenu')
                        ->setBlogpost($blogpost)
                        ->setPeinture($peinture);

        $this->assertTrue($commentaire->getAuteur() === 'auteur');
        $this->assertTrue($commentaire->getEmail() === 'test@mail.com');
        $this->assertTrue($commentaire->getCreatedAt() === $datetime);
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getBlogpost() === $blogpost);
        $this->assertTrue($commentaire->getPeinture()=== $peinture);

    }

    public function testIsFalse()
    {
        $commentaire = new Commentaire;
        $datetime = new DateTime();
        $blogpost = new BlogPost;
        $peinture = new Peinture;

        $commentaire    ->setAuteur('auteur')
                        ->setEmail('test@mail.com')
                        ->setCreatedAt($datetime)
                        ->setContenu('contenu')
                        ->setBlogpost($blogpost)
                        ->setPeinture($peinture);

        $this->assertFalse($commentaire->getAuteur() === 'false');
        $this->assertFalse($commentaire->getEmail() === 'false');
        $this->assertFalse($commentaire->getCreatedAt() === false );
        $this->assertFalse($commentaire->getContenu() === 'false');
        $this->assertFalse($commentaire->getPeinture() === false);
        $this->assertFalse($commentaire->getBlogpost() === false);
    }

    public function testIsEmpty()
    {
        $commentaire = new Commentaire;

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getPeinture());
        $this->assertEmpty($commentaire->getBlogpost());


    }
}

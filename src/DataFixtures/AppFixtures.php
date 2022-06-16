<?php

namespace App\DataFixtures;

use App\Entity\Blogpost;
use App\Entity\Categorie;
use App\Entity\Peinture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory; 

class AppFixtures extends Fixture

{
    private $hash;

    public function __construct(UserPasswordHasherInterface $hash)
    {
        $this->hash = $hash;
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $user = new User();
        $password = $this->hash->hashPassword($user,'password');

        $user   ->setNom($faker->lastName())
                ->setPrenom($faker->firstName())
                ->setEmail($faker->email())
                ->setPassword($password)
                ->setTelephone($faker->phoneNumber())
                ->setAPropos($faker->sentence())
                ->setInstagram('instagram')
                ->setRoles(['USER']);

         $manager->persist($user);
        

        $blogpost = new Blogpost();

        $blogpost  ->setTitre($faker->title())
                    ->setContenu($faker->paragraph())
                    ->setDate($faker->dateTime())
                    ->setUser($user)
                    ->setSlug($faker->slug());
        
        $manager->persist($blogpost);

        //Categories et Peintures

        for($i= 0; $i < 5; $i++){
            $categorie = new Categorie();

            $categorie->setNom($faker->word())
                        ->setDescription($faker->words(10, true))
                        ->setSlug($faker->slug());

            $manager->persist($categorie);

            for($j=0 ; $j<3 ; $j++){
                $peinture = new Peinture();

                $peinture ->setNom(ucfirst($faker->words(3, true)))
                            ->setLargeur($faker->randomFloat(2, 10, 30))
                            ->setDescription($faker->text())
                            ->setHauteur($faker->randomFloat(2, 10, 30))
                            ->setEnVente($faker->boolean())
                            ->setPrix($faker->randomFloat(2, 100, 1000))
                            ->setDateRealisation($faker->dateTime())
                            ->setCreatedAt($faker->dateTime())
                            ->setPortfolio($faker->boolean())
                            ->setFile('/build/images/peinture.jpg')
                            ->addCategorie($categorie)
                            ->setUser($user)
                            ->setSlug($faker->slug());
                $manager->persist($peinture);
            }
        }

        $manager->flush();
    }
}

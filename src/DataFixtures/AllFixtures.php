<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
# 1. Importer l'entité Utilisateur
use App\Entity\Utilisateur;
# 2. Importer le gestionnaire de mot de passe
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\Article;
# 3. Importer le générateur de texte en Lorem Ipsum
use joshtronic\LoremIpsum;
# 4. Importer le slugger
use Cocur\Slugify\Slugify;

class AllFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordEncoder;


    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<10;$i++) {
            $user = new Utilisateur();
            $user->setName('Dupont' . $i);
            $user->setEmail("dupont$i@dupont.com");
            $password = $this->passwordEncoder->hashPassword($user, "123456$i");
            $user->setPassword($password);

            $manager->persist($user);
        }
        $lipsum = new LoremIpsum();
        $slugify = new Slugify();
        for($i=0;$i<30;$i++) {
            $article = new Article();
            $title = $lipsum->words(5);
            $article->setArticleTitle($title);
            $article->setArticleContent($lipsum->paragraphs(3));
            $article->setArticleSlug($slugify->slugify($title));
            $article->setArticleDateCreate(new \DateTime());
            $article->setArticleIsPublished(true);
            $use = $manager->getRepository(Utilisateur::class)->findOneBy(
                ['name' => 'Dupont' . rand(0, 9) ]
            );
            $article->setUtilisateur($use);


            $manager->persist($article);
        }


        $manager->flush();
    }
}

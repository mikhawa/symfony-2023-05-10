<?php

namespace App\Test\Controller;

use App\Entity\Commentaire;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentaireControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private CommentaireRepository $repository;
    private string $path = '/commentaire/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Commentaire::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Commentaire index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'commentaire[CommentaireTitle]' => 'Testing',
            'commentaire[CommentaireText]' => 'Testing',
            'commentaire[CommentaireDateCreate]' => 'Testing',
            'commentaire[CommentaireIsPublished]' => 'Testing',
            'commentaire[CommentaireManyToOneArticle]' => 'Testing',
            'commentaire[utilisateur]' => 'Testing',
        ]);

        self::assertResponseRedirects('/commentaire/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Commentaire();
        $fixture->setCommentaireTitle('My Title');
        $fixture->setCommentaireText('My Title');
        $fixture->setCommentaireDateCreate('My Title');
        $fixture->setCommentaireIsPublished('My Title');
        $fixture->setCommentaireManyToOneArticle('My Title');
        $fixture->setUtilisateur('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Commentaire');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Commentaire();
        $fixture->setCommentaireTitle('My Title');
        $fixture->setCommentaireText('My Title');
        $fixture->setCommentaireDateCreate('My Title');
        $fixture->setCommentaireIsPublished('My Title');
        $fixture->setCommentaireManyToOneArticle('My Title');
        $fixture->setUtilisateur('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'commentaire[CommentaireTitle]' => 'Something New',
            'commentaire[CommentaireText]' => 'Something New',
            'commentaire[CommentaireDateCreate]' => 'Something New',
            'commentaire[CommentaireIsPublished]' => 'Something New',
            'commentaire[CommentaireManyToOneArticle]' => 'Something New',
            'commentaire[utilisateur]' => 'Something New',
        ]);

        self::assertResponseRedirects('/commentaire/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getCommentaireTitle());
        self::assertSame('Something New', $fixture[0]->getCommentaireText());
        self::assertSame('Something New', $fixture[0]->getCommentaireDateCreate());
        self::assertSame('Something New', $fixture[0]->getCommentaireIsPublished());
        self::assertSame('Something New', $fixture[0]->getCommentaireManyToOneArticle());
        self::assertSame('Something New', $fixture[0]->getUtilisateur());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Commentaire();
        $fixture->setCommentaireTitle('My Title');
        $fixture->setCommentaireText('My Title');
        $fixture->setCommentaireDateCreate('My Title');
        $fixture->setCommentaireIsPublished('My Title');
        $fixture->setCommentaireManyToOneArticle('My Title');
        $fixture->setUtilisateur('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/commentaire/');
    }
}

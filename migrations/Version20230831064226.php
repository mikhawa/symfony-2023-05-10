<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230831064226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE article_date_update article_date_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE commentaire CHANGE commentaire_is_published commentaire_is_published TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD is_verified TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE article_date_update article_date_update DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE commentaire CHANGE commentaire_is_published commentaire_is_published TINYINT(1) DEFAULT 0');
        $this->addSql('ALTER TABLE utilisateur DROP is_verified');
    }
}

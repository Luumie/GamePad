<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201007115906 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE text_resultat ADD niveau_id INT NOT NULL');
        $this->addSql('ALTER TABLE text_resultat ADD CONSTRAINT FK_5199D1F0B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('CREATE INDEX IDX_5199D1F0B3E9C81 ON text_resultat (niveau_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE text_resultat DROP FOREIGN KEY FK_5199D1F0B3E9C81');
        $this->addSql('DROP INDEX IDX_5199D1F0B3E9C81 ON text_resultat');
        $this->addSql('ALTER TABLE text_resultat DROP niveau_id');
    }
}

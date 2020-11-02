<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201007091731 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achat CHANGE type type_id INT NOT NULL');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456C54C8C93 FOREIGN KEY (type_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_26A98456C54C8C93 ON achat (type_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456C54C8C93');
        $this->addSql('DROP INDEX IDX_26A98456C54C8C93 ON achat');
        $this->addSql('ALTER TABLE achat CHANGE type_id type INT NOT NULL');
    }
}

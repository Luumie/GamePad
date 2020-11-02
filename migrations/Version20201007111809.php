<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201007111809 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE passe_module ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE passe_module ADD CONSTRAINT FK_EAE57FE2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_EAE57FE2A76ED395 ON passe_module (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE passe_module DROP FOREIGN KEY FK_EAE57FE2A76ED395');
        $this->addSql('DROP INDEX IDX_EAE57FE2A76ED395 ON passe_module');
        $this->addSql('ALTER TABLE passe_module DROP user_id');
    }
}

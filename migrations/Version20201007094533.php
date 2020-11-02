<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201007094533 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE passe_module CHANGE resultat user_test_id INT NOT NULL');
        $this->addSql('ALTER TABLE passe_module ADD CONSTRAINT FK_EAE57FE246501A53 FOREIGN KEY (user_test_id) REFERENCES user_test (id)');
        $this->addSql('CREATE INDEX IDX_EAE57FE246501A53 ON passe_module (user_test_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE passe_module DROP FOREIGN KEY FK_EAE57FE246501A53');
        $this->addSql('DROP INDEX IDX_EAE57FE246501A53 ON passe_module');
        $this->addSql('ALTER TABLE passe_module CHANGE user_test_id resultat INT NOT NULL');
    }
}

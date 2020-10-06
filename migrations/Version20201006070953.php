<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006070953 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD username VARCHAR(20) NOT NULL, ADD entreprise VARCHAR(255) DEFAULT NULL, ADD logo VARCHAR(255) DEFAULT NULL, ADD presentation LONGTEXT DEFAULT NULL, ADD adresse_rue VARCHAR(255) DEFAULT NULL, ADD adresse_code VARCHAR(5) DEFAULT NULL, ADD adresse_ville VARCHAR(25) DEFAULT NULL, ADD internet VARCHAR(255) DEFAULT NULL, ADD create_date DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP username, DROP entreprise, DROP logo, DROP presentation, DROP adresse_rue, DROP adresse_code, DROP adresse_ville, DROP internet, DROP create_date');
    }
}

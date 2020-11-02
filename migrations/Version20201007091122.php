<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201007091122 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE text_resultat ADD id INT AUTO_INCREMENT NOT NULL, DROP id_text_resultat, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE text_resultat MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE text_resultat DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE text_resultat ADD id_text_resultat INT NOT NULL, DROP id');
    }
}

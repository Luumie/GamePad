<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201007113707 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE text_resultat ADD module_id INT NOT NULL');
        $this->addSql('ALTER TABLE text_resultat ADD CONSTRAINT FK_5199D1F0AFC2B591 FOREIGN KEY (module_id) REFERENCES module (id)');
        $this->addSql('CREATE INDEX IDX_5199D1F0AFC2B591 ON text_resultat (module_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE text_resultat DROP FOREIGN KEY FK_5199D1F0AFC2B591');
        $this->addSql('DROP INDEX IDX_5199D1F0AFC2B591 ON text_resultat');
        $this->addSql('ALTER TABLE text_resultat DROP module_id');
    }
}

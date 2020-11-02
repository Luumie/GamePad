<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201007112105 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE passe_module ADD module_id INT NOT NULL');
        $this->addSql('ALTER TABLE passe_module ADD CONSTRAINT FK_EAE57FE2AFC2B591 FOREIGN KEY (module_id) REFERENCES module (id)');
        $this->addSql('CREATE INDEX IDX_EAE57FE2AFC2B591 ON passe_module (module_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE passe_module DROP FOREIGN KEY FK_EAE57FE2AFC2B591');
        $this->addSql('DROP INDEX IDX_EAE57FE2AFC2B591 ON passe_module');
        $this->addSql('ALTER TABLE passe_module DROP module_id');
    }
}

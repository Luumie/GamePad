<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006074133 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achat (id_achat INT AUTO_INCREMENT NOT NULL, type INT NOT NULL, duree INT NOT NULL, nombre INT NOT NULL, description LONGTEXT NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_achat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id_categorie INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE module (id_module INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, type VARCHAR(40) NOT NULL, PRIMARY KEY(id_module)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id_niveau INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(10) NOT NULL, PRIMARY KEY(id_niveau)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passe_module (id_passe_module INT AUTO_INCREMENT NOT NULL, date_inscription DATETIME NOT NULL, date_passage DATETIME NOT NULL, resultat INT NOT NULL, erreur INT NOT NULL, PRIMARY KEY(id_passe_module)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id_test INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id_test)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE text_resultat (id_text_resultat INT AUTO_INCREMENT NOT NULL, niveau INT NOT NULL, text LONGTEXT NOT NULL, titre VARCHAR(100) NOT NULL, resume VARCHAR(255) NOT NULL, PRIMARY KEY(id_text_resultat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_has_achat (id_user_has_achat INT AUTO_INCREMENT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, nb_test_restant INT NOT NULL, PRIMARY KEY(id_user_has_achat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_test (id_user_test INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(100) NOT NULL, nom VARCHAR(100) NOT NULL, PRIMARY KEY(id_user_test)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE achat');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE module');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE passe_module');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE text_resultat');
        $this->addSql('DROP TABLE user_has_achat');
        $this->addSql('DROP TABLE user_test');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503015600 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(250) NOT NULL, type VARCHAR(250) NOT NULL, archive TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, lieu VARCHAR(30) NOT NULL, date DATE NOT NULL, prix INT NOT NULL, archive TINYINT(1) DEFAULT NULL, INDEX IDX_B26681EBCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE metier (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, archive TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_51A00D8C6DE44026 (description), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE raiting (id INT AUTO_INCREMENT NOT NULL, id_evenement INT DEFAULT NULL, raiting INT NOT NULL, INDEX IDX_3AE2A2098B13D439 (id_evenement), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_metier (id INT AUTO_INCREMENT NOT NULL, metier_id_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, domaine VARCHAR(255) NOT NULL, archive TINYINT(1) DEFAULT NULL, INDEX IDX_81BFFF7B448B3F5B (metier_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE raiting ADD CONSTRAINT FK_3AE2A2098B13D439 FOREIGN KEY (id_evenement) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sous_metier ADD CONSTRAINT FK_81BFFF7B448B3F5B FOREIGN KEY (metier_id_id) REFERENCES metier (id)');
        $this->addSql('ALTER TABLE annonce CHANGE archive archive TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EBCF5E72D');
        $this->addSql('ALTER TABLE raiting DROP FOREIGN KEY FK_3AE2A2098B13D439');
        $this->addSql('ALTER TABLE sous_metier DROP FOREIGN KEY FK_81BFFF7B448B3F5B');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE metier');
        $this->addSql('DROP TABLE raiting');
        $this->addSql('DROP TABLE sous_metier');
        $this->addSql('ALTER TABLE annonce CHANGE archive archive TINYINT(1) DEFAULT NULL');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503142624 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5A76ED395');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EBCF5E72D');
        $this->addSql('ALTER TABLE evenement CHANGE categorie_id categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sous_metier DROP FOREIGN KEY FK_81BFFF7B448B3F5B');
        $this->addSql('DROP INDEX IDX_81BFFF7B448B3F5B ON sous_metier');
        $this->addSql('ALTER TABLE sous_metier CHANGE metier_id_id metier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sous_metier ADD CONSTRAINT FK_81BFFF7BED16FA20 FOREIGN KEY (metier_id) REFERENCES metier (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_81BFFF7BED16FA20 ON sous_metier (metier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5A76ED395');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EBCF5E72D');
        $this->addSql('ALTER TABLE evenement CHANGE categorie_id categorie_id INT NOT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE sous_metier DROP FOREIGN KEY FK_81BFFF7BED16FA20');
        $this->addSql('DROP INDEX IDX_81BFFF7BED16FA20 ON sous_metier');
        $this->addSql('ALTER TABLE sous_metier CHANGE metier_id metier_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sous_metier ADD CONSTRAINT FK_81BFFF7B448B3F5B FOREIGN KEY (metier_id_id) REFERENCES metier (id)');
        $this->addSql('CREATE INDEX IDX_81BFFF7B448B3F5B ON sous_metier (metier_id_id)');
    }
}

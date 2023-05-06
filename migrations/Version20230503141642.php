<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503141642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_sousmetier (user_id INT NOT NULL, sous_metier_id INT NOT NULL, INDEX IDX_31B2719A76ED395 (user_id), INDEX IDX_31B2719F61F116F (sous_metier_id), PRIMARY KEY(user_id, sous_metier_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_sousmetier ADD CONSTRAINT FK_31B2719A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_sousmetier ADD CONSTRAINT FK_31B2719F61F116F FOREIGN KEY (sous_metier_id) REFERENCES sous_metier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE raiting DROP FOREIGN KEY FK_3AE2A2098B13D439');
        $this->addSql('DROP INDEX IDX_3AE2A2098B13D439 ON raiting');
        $this->addSql('ALTER TABLE raiting ADD evenement_id INT DEFAULT NULL, CHANGE id_evenement user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE raiting ADD CONSTRAINT FK_3AE2A209A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE raiting ADD CONSTRAINT FK_3AE2A209FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_3AE2A209A76ED395 ON raiting (user_id)');
        $this->addSql('CREATE INDEX IDX_3AE2A209FD02F13 ON raiting (evenement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_sousmetier DROP FOREIGN KEY FK_31B2719A76ED395');
        $this->addSql('ALTER TABLE user_sousmetier DROP FOREIGN KEY FK_31B2719F61F116F');
        $this->addSql('DROP TABLE user_sousmetier');
        $this->addSql('ALTER TABLE raiting DROP FOREIGN KEY FK_3AE2A209A76ED395');
        $this->addSql('ALTER TABLE raiting DROP FOREIGN KEY FK_3AE2A209FD02F13');
        $this->addSql('DROP INDEX IDX_3AE2A209A76ED395 ON raiting');
        $this->addSql('DROP INDEX IDX_3AE2A209FD02F13 ON raiting');
        $this->addSql('ALTER TABLE raiting ADD id_evenement INT DEFAULT NULL, DROP user_id, DROP evenement_id');
        $this->addSql('ALTER TABLE raiting ADD CONSTRAINT FK_3AE2A2098B13D439 FOREIGN KEY (id_evenement) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_3AE2A2098B13D439 ON raiting (id_evenement)');
    }
}

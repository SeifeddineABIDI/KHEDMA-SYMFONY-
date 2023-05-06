<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230504103035 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classification CHANGE archive archive TINYINT(1) NOT NULL');
        $this->addSql('DROP INDEX fk_client ON projet');
        $this->addSql('DROP INDEX fk_freelancer ON projet');
        $this->addSql('ALTER TABLE projet DROP freelancer_id, DROP client_id, CHANGE archive archive VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_93872075166D1F9C');
        $this->addSql('DROP INDEX project_id ON tache');
        $this->addSql('ALTER TABLE tache CHANGE description description VARCHAR(255) NOT NULL, CHANGE priority priority INT NOT NULL, CHANGE estimated_time estimated_time INT NOT NULL, CHANGE project_id projet_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_93872075C18272 FOREIGN KEY (projet_id) REFERENCES projet (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_93872075C18272 ON tache (projet_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classification CHANGE archive archive TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE projet ADD freelancer_id INT DEFAULT NULL, ADD client_id INT DEFAULT NULL, CHANGE archive archive VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE INDEX fk_client ON projet (client_id)');
        $this->addSql('CREATE INDEX fk_freelancer ON projet (freelancer_id)');
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_93872075C18272');
        $this->addSql('DROP INDEX IDX_93872075C18272 ON tache');
        $this->addSql('ALTER TABLE tache CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE priority priority INT DEFAULT NULL, CHANGE estimated_time estimated_time INT DEFAULT NULL, CHANGE projet_id project_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_93872075166D1F9C FOREIGN KEY (project_id) REFERENCES projet (id)');
        $this->addSql('CREATE INDEX project_id ON tache (project_id)');
    }
}

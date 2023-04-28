<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230423135958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement ADD raiting_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EBBA5A3BA FOREIGN KEY (raiting_id) REFERENCES raiting (id)');
        $this->addSql('CREATE INDEX IDX_B26681EBBA5A3BA ON evenement (raiting_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EBBA5A3BA');
        $this->addSql('DROP INDEX IDX_B26681EBBA5A3BA ON evenement');
        $this->addSql('ALTER TABLE evenement DROP raiting_id');
    }
}

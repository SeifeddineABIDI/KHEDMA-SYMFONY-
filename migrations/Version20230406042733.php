<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230406042733 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD password VARCHAR(255) NOT NULL, DROP role, DROP mdp, CHANGE cin cin VARCHAR(255) NOT NULL, CHANGE archive archive TINYINT(1) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE image image VARCHAR(255) NOT NULL, CHANGE github_UserName github_username VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD mdp VARCHAR(255) NOT NULL, DROP roles, CHANGE email email VARCHAR(255) NOT NULL, CHANGE cin cin INT NOT NULL, CHANGE archive archive INT NOT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE github_username github_UserName VARCHAR(255) DEFAULT NULL, CHANGE password role VARCHAR(255) NOT NULL');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230721093137 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE play_time_schedule (id INT AUTO_INCREMENT NOT NULL, hour1 TINYINT(1) DEFAULT NULL, hour2 TINYINT(1) DEFAULT NULL, hour3 TINYINT(1) DEFAULT NULL, hour4 TINYINT(1) DEFAULT NULL, hour5 TINYINT(1) DEFAULT NULL, hour6 TINYINT(1) DEFAULT NULL, hour7 TINYINT(1) DEFAULT NULL, hour8 TINYINT(1) DEFAULT NULL, hour9 TINYINT(1) DEFAULT NULL, hour10 TINYINT(1) DEFAULT NULL, hour11 TINYINT(1) DEFAULT NULL, hour12 TINYINT(1) DEFAULT NULL, hour13 TINYINT(1) DEFAULT NULL, hour14 TINYINT(1) DEFAULT NULL, hour15 TINYINT(1) DEFAULT NULL, hour16 TINYINT(1) DEFAULT NULL, hour17 TINYINT(1) DEFAULT NULL, hour18 TINYINT(1) DEFAULT NULL, hour19 TINYINT(1) DEFAULT NULL, hour20 TINYINT(1) DEFAULT NULL, hour21 TINYINT(1) DEFAULT NULL, hour22 TINYINT(1) DEFAULT NULL, hour23 TINYINT(1) DEFAULT NULL, hour24 TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD play_time_schedule_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6492E8A64C FOREIGN KEY (play_time_schedule_id) REFERENCES play_time_schedule (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6492E8A64C ON user (play_time_schedule_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6492E8A64C');
        $this->addSql('DROP TABLE play_time_schedule');
        $this->addSql('DROP INDEX UNIQ_8D93D6492E8A64C ON user');
        $this->addSql('ALTER TABLE user DROP play_time_schedule_id');
    }
}

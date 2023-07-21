<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230721112521 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE play_time_schedule CHANGE hour1 hour1 INT DEFAULT NULL, CHANGE hour2 hour2 INT DEFAULT NULL, CHANGE hour3 hour3 INT DEFAULT NULL, CHANGE hour4 hour4 INT DEFAULT NULL, CHANGE hour5 hour5 INT DEFAULT NULL, CHANGE hour6 hour6 INT DEFAULT NULL, CHANGE hour7 hour7 INT DEFAULT NULL, CHANGE hour8 hour8 INT DEFAULT NULL, CHANGE hour9 hour9 INT DEFAULT NULL, CHANGE hour10 hour10 INT DEFAULT NULL, CHANGE hour11 hour11 INT DEFAULT NULL, CHANGE hour12 hour12 INT DEFAULT NULL, CHANGE hour13 hour13 INT DEFAULT NULL, CHANGE hour14 hour14 INT DEFAULT NULL, CHANGE hour15 hour15 INT DEFAULT NULL, CHANGE hour16 hour16 INT DEFAULT NULL, CHANGE hour17 hour17 INT DEFAULT NULL, CHANGE hour18 hour18 INT DEFAULT NULL, CHANGE hour19 hour19 INT DEFAULT NULL, CHANGE hour20 hour20 INT DEFAULT NULL, CHANGE hour21 hour21 INT DEFAULT NULL, CHANGE hour22 hour22 INT DEFAULT NULL, CHANGE hour23 hour23 INT DEFAULT NULL, CHANGE hour24 hour24 INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE play_time_schedule CHANGE hour1 hour1 TINYINT(1) DEFAULT NULL, CHANGE hour2 hour2 TINYINT(1) DEFAULT NULL, CHANGE hour3 hour3 TINYINT(1) DEFAULT NULL, CHANGE hour4 hour4 TINYINT(1) DEFAULT NULL, CHANGE hour5 hour5 TINYINT(1) DEFAULT NULL, CHANGE hour6 hour6 TINYINT(1) DEFAULT NULL, CHANGE hour7 hour7 TINYINT(1) DEFAULT NULL, CHANGE hour8 hour8 TINYINT(1) DEFAULT NULL, CHANGE hour9 hour9 TINYINT(1) DEFAULT NULL, CHANGE hour10 hour10 TINYINT(1) DEFAULT NULL, CHANGE hour11 hour11 TINYINT(1) DEFAULT NULL, CHANGE hour12 hour12 TINYINT(1) DEFAULT NULL, CHANGE hour13 hour13 TINYINT(1) DEFAULT NULL, CHANGE hour14 hour14 TINYINT(1) DEFAULT NULL, CHANGE hour15 hour15 TINYINT(1) DEFAULT NULL, CHANGE hour16 hour16 TINYINT(1) DEFAULT NULL, CHANGE hour17 hour17 TINYINT(1) DEFAULT NULL, CHANGE hour18 hour18 TINYINT(1) DEFAULT NULL, CHANGE hour19 hour19 TINYINT(1) DEFAULT NULL, CHANGE hour20 hour20 TINYINT(1) DEFAULT NULL, CHANGE hour21 hour21 TINYINT(1) DEFAULT NULL, CHANGE hour22 hour22 TINYINT(1) DEFAULT NULL, CHANGE hour23 hour23 TINYINT(1) DEFAULT NULL, CHANGE hour24 hour24 TINYINT(1) DEFAULT NULL');
    }
}

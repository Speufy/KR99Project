<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230715082721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE infantry DROP FOREIGN KEY FK_B72173AB18D2742D');
        $this->addSql('ALTER TABLE cavalry DROP FOREIGN KEY FK_648F305818D2742D');
        $this->addSql('ALTER TABLE mage DROP FOREIGN KEY FK_B679396218D2742D');
        $this->addSql('ALTER TABLE flying DROP FOREIGN KEY FK_4A347AC318D2742D');
        $this->addSql('ALTER TABLE marksmen DROP FOREIGN KEY FK_2000437818D2742D');
        $this->addSql('DROP TABLE infantry');
        $this->addSql('DROP TABLE cavalry');
        $this->addSql('DROP TABLE mage');
        $this->addSql('DROP TABLE flying');
        $this->addSql('DROP TABLE marksmen');
        $this->addSql('ALTER TABLE army ADD t1_infantry INT DEFAULT NULL, ADD t2_infantry INT DEFAULT NULL, ADD t3_infantry INT DEFAULT NULL, ADD t4_infantry INT DEFAULT NULL, ADD t5_infantry INT DEFAULT NULL, ADD t1_cavalry INT DEFAULT NULL, ADD t2_cavalry INT DEFAULT NULL, ADD t3_cavalry INT DEFAULT NULL, ADD t4_cavalry INT DEFAULT NULL, ADD t5_cavalry INT DEFAULT NULL, ADD t1_mage INT DEFAULT NULL, ADD t2_mage INT DEFAULT NULL, ADD t3_mage INT DEFAULT NULL, ADD t4_mage INT DEFAULT NULL, ADD t5_mage INT DEFAULT NULL, ADD t1_fly INT DEFAULT NULL, ADD t2_fly INT DEFAULT NULL, ADD t3_fly INT DEFAULT NULL, ADD t4_fly INT DEFAULT NULL, ADD t5_fly INT DEFAULT NULL, ADD t1_marksmen INT DEFAULT NULL, ADD t2_marksmen INT DEFAULT NULL, ADD t3_marksmen INT DEFAULT NULL, ADD t4_marksmen INT DEFAULT NULL, ADD t5_marksmen INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE infantry (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_B72173AB18D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cavalry (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_648F305818D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE mage (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_B679396218D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE flying (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_4A347AC318D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE marksmen (id INT AUTO_INCREMENT NOT NULL, army_id INT DEFAULT NULL, tier INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_2000437818D2742D (army_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE infantry ADD CONSTRAINT FK_B72173AB18D2742D FOREIGN KEY (army_id) REFERENCES army (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE cavalry ADD CONSTRAINT FK_648F305818D2742D FOREIGN KEY (army_id) REFERENCES army (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE mage ADD CONSTRAINT FK_B679396218D2742D FOREIGN KEY (army_id) REFERENCES army (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE flying ADD CONSTRAINT FK_4A347AC318D2742D FOREIGN KEY (army_id) REFERENCES army (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE marksmen ADD CONSTRAINT FK_2000437818D2742D FOREIGN KEY (army_id) REFERENCES army (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE army DROP t1_infantry, DROP t2_infantry, DROP t3_infantry, DROP t4_infantry, DROP t5_infantry, DROP t1_cavalry, DROP t2_cavalry, DROP t3_cavalry, DROP t4_cavalry, DROP t5_cavalry, DROP t1_mage, DROP t2_mage, DROP t3_mage, DROP t4_mage, DROP t5_mage, DROP t1_fly, DROP t2_fly, DROP t3_fly, DROP t4_fly, DROP t5_fly, DROP t1_marksmen, DROP t2_marksmen, DROP t3_marksmen, DROP t4_marksmen, DROP t5_marksmen');
    }
}

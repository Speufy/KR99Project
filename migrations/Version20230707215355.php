<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230707215355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE army DROP FOREIGN KEY FK_C212F3699E6F5DF');
        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY FK_765AE0C999E6F5DF');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA399E6F5DF');
        $this->addSql('ALTER TABLE artefact DROP FOREIGN KEY FK_8D158D2D99E6F5DF');
        $this->addSql('ALTER TABLE heroe DROP FOREIGN KEY FK_EB50922199E6F5DF');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A65A76ED395');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP INDEX IDX_765AE0C999E6F5DF ON absence');
        $this->addSql('ALTER TABLE absence CHANGE player_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_765AE0C9A76ED395 ON absence (user_id)');
        $this->addSql('DROP INDEX IDX_C212F3699E6F5DF ON army');
        $this->addSql('ALTER TABLE army CHANGE player_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE army ADD CONSTRAINT FK_C212F36A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C212F36A76ED395 ON army (user_id)');
        $this->addSql('DROP INDEX IDX_8D158D2D99E6F5DF ON artefact');
        $this->addSql('ALTER TABLE artefact CHANGE player_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE artefact ADD CONSTRAINT FK_8D158D2DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8D158D2DA76ED395 ON artefact (user_id)');
        $this->addSql('DROP INDEX IDX_EB50922199E6F5DF ON heroe');
        $this->addSql('ALTER TABLE heroe ADD user_id INT DEFAULT NULL, DROP player_id');
        $this->addSql('ALTER TABLE heroe ADD CONSTRAINT FK_EB509221A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_EB509221A76ED395 ON heroe (user_id)');
        $this->addSql('DROP INDEX IDX_97A0ADA399E6F5DF ON ticket');
        $this->addSql('ALTER TABLE ticket ADD user_id INT DEFAULT NULL, DROP player_id');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA3A76ED395 ON ticket (user_id)');
        $this->addSql('ALTER TABLE user ADD ingame_id INT DEFAULT NULL, ADD power INT DEFAULT NULL, ADD grade VARCHAR(255) DEFAULT NULL, ADD ally VARCHAR(255) DEFAULT NULL, ADD merit INT DEFAULT NULL, ADD timezone INT DEFAULT NULL, ADD prime_time VARCHAR(255) DEFAULT NULL COMMENT \'(DC2Type:dateinterval)\', ADD country VARCHAR(255) DEFAULT NULL, ADD username VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, ingame_id INT DEFAULT NULL, power INT DEFAULT NULL, `rank` VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ally VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, merite INT DEFAULT NULL, role VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, timezone INT DEFAULT NULL, prime_time VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:dateinterval)\', country VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, pseudo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_98197A65A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE army DROP FOREIGN KEY FK_C212F36A76ED395');
        $this->addSql('DROP INDEX IDX_C212F36A76ED395 ON army');
        $this->addSql('ALTER TABLE army CHANGE user_id player_id INT NOT NULL');
        $this->addSql('ALTER TABLE army ADD CONSTRAINT FK_C212F3699E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C212F3699E6F5DF ON army (player_id)');
        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY FK_765AE0C9A76ED395');
        $this->addSql('DROP INDEX IDX_765AE0C9A76ED395 ON absence');
        $this->addSql('ALTER TABLE absence CHANGE user_id player_id INT NOT NULL');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C999E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_765AE0C999E6F5DF ON absence (player_id)');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3A76ED395');
        $this->addSql('DROP INDEX IDX_97A0ADA3A76ED395 ON ticket');
        $this->addSql('ALTER TABLE ticket ADD player_id INT NOT NULL, DROP user_id');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA399E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_97A0ADA399E6F5DF ON ticket (player_id)');
        $this->addSql('ALTER TABLE artefact DROP FOREIGN KEY FK_8D158D2DA76ED395');
        $this->addSql('DROP INDEX IDX_8D158D2DA76ED395 ON artefact');
        $this->addSql('ALTER TABLE artefact CHANGE user_id player_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE artefact ADD CONSTRAINT FK_8D158D2D99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8D158D2D99E6F5DF ON artefact (player_id)');
        $this->addSql('ALTER TABLE heroe DROP FOREIGN KEY FK_EB509221A76ED395');
        $this->addSql('DROP INDEX IDX_EB509221A76ED395 ON heroe');
        $this->addSql('ALTER TABLE heroe ADD player_id INT NOT NULL, DROP user_id');
        $this->addSql('ALTER TABLE heroe ADD CONSTRAINT FK_EB50922199E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_EB50922199E6F5DF ON heroe (player_id)');
        $this->addSql('ALTER TABLE user DROP ingame_id, DROP power, DROP grade, DROP ally, DROP merit, DROP timezone, DROP prime_time, DROP country, DROP username');
    }
}

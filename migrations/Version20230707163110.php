<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230707163110 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C999E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE army ADD CONSTRAINT FK_C212F3699E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE artefact ADD CONSTRAINT FK_8D158D2D99E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE heroe ADD CONSTRAINT FK_EB50922199E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE player CHANGE ingame_id ingame_id INT DEFAULT NULL, CHANGE power power INT DEFAULT NULL, CHANGE `rank` `rank` VARCHAR(255) DEFAULT NULL, CHANGE ally ally VARCHAR(255) DEFAULT NULL, CHANGE merite merite INT DEFAULT NULL, CHANGE role role VARCHAR(255) DEFAULT NULL, CHANGE timezone timezone INT DEFAULT NULL, CHANGE prime_time prime_time VARCHAR(255) DEFAULT NULL COMMENT \'(DC2Type:dateinterval)\', CHANGE country country VARCHAR(255) DEFAULT NULL, CHANGE pseudo pseudo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA399E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE army DROP FOREIGN KEY FK_C212F3699E6F5DF');
        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY FK_765AE0C999E6F5DF');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA399E6F5DF');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A65A76ED395');
        $this->addSql('ALTER TABLE player CHANGE ingame_id ingame_id INT NOT NULL, CHANGE power power INT NOT NULL, CHANGE `rank` `rank` VARCHAR(255) NOT NULL, CHANGE ally ally VARCHAR(255) NOT NULL, CHANGE merite merite INT NOT NULL, CHANGE role role VARCHAR(255) NOT NULL, CHANGE timezone timezone INT NOT NULL, CHANGE prime_time prime_time VARCHAR(255) NOT NULL COMMENT \'(DC2Type:dateinterval)\', CHANGE pseudo pseudo VARCHAR(255) NOT NULL, CHANGE country country VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE artefact DROP FOREIGN KEY FK_8D158D2D99E6F5DF');
        $this->addSql('ALTER TABLE heroe DROP FOREIGN KEY FK_EB50922199E6F5DF');
    }
}

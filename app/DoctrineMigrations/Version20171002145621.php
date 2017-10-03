<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171002145621 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE company ADD id INT AUTO_INCREMENT NOT NULL, ADD nameCompany VARCHAR(255) NOT NULL, ADD segment VARCHAR(255) NOT NULL, ADD country VARCHAR(2) NOT NULL, ADD city VARCHAR(255) NOT NULL, ADD addressCompany VARCHAR(255) NOT NULL, ADD hasBought TINYINT(1) DEFAULT NULL, ADD productInterest VARCHAR(255) NOT NULL, ADD amount INT NOT NULL, ADD price DOUBLE PRECISION NOT NULL, ADD contacted TINYINT(1) DEFAULT NULL, ADD note LONGTEXT NOT NULL, DROP Column 1, ADD PRIMARY KEY (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE company MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE company DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE company ADD Column 1 INT DEFAULT NULL, DROP id, DROP nameCompany, DROP segment, DROP country, DROP city, DROP addressCompany, DROP hasBought, DROP productInterest, DROP amount, DROP price, DROP contacted, DROP note');
    }
}

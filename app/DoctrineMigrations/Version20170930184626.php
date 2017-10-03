<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170930184626 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE company');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, nameCompany VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, segment VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, city VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, country VARCHAR(2) NOT NULL COLLATE utf8_unicode_ci, addressCompany VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, acquisitionStatus VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, productInterest VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, amount INT NOT NULL, price DOUBLE PRECISION NOT NULL, disposal VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, note LONGTEXT NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }
}

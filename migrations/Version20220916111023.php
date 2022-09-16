<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220916111023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_cuit (id BLOB NOT NULL --(DC2Type:uuid)
        , email VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, apellido VARCHAR(255) NOT NULL, numero_cui VARCHAR(11) NOT NULL, tipo_cui VARCHAR(10) NOT NULL, relacion_laboral VARCHAR(255) NOT NULL, tipo_cuenta VARCHAR(100) NOT NULL, puesto VARCHAR(10) NOT NULL, area_sigla VARCHAR(10) NOT NULL, area_activa BOOLEAN NOT NULL, domicilio_laboral VARCHAR(255) NOT NULL, rama_jerarquica CLOB NOT NULL --(DC2Type:json)
        , cuit VARCHAR(11) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user_cuit');
    }
}

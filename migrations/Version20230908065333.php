<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230908065333 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entidad (id INT AUTO_INCREMENT NOT NULL, tipo_entidad_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, centro_costo INT NOT NULL, demanda TINYINT(1) NOT NULL, modelo_nivel_actividad TINYINT(1) NOT NULL, modelo_colaboracion_internacional_activos_fijos TINYINT(1) NOT NULL, modelo_colaboracion_internacional_medios_transportes TINYINT(1) NOT NULL, modelo_colaboracion_internacional_proyectos TINYINT(1) NOT NULL, modelo_defensa_seguridad_proteccion TINYINT(1) NOT NULL, modelo_dinamica_demografica TINYINT(1) NOT NULL, modelo_inversiones TINYINT(1) NOT NULL, modelo_portadores_combustible TINYINT(1) NOT NULL, modelo_portadores_energia TINYINT(1) NOT NULL, modelo_portadores_servicios TINYINT(1) NOT NULL, modelo_sector_externo TINYINT(1) NOT NULL, modelo_transporte TINYINT(1) NOT NULL, INDEX IDX_4587B0CBFD2406C7 (tipo_entidad_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tipo_entidad (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entidad ADD CONSTRAINT FK_4587B0CBFD2406C7 FOREIGN KEY (tipo_entidad_id) REFERENCES tipo_entidad (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entidad DROP FOREIGN KEY FK_4587B0CBFD2406C7');
        $this->addSql('DROP TABLE entidad');
        $this->addSql('DROP TABLE tipo_entidad');
    }
}

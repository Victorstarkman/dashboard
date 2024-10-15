<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cotizacion Entity
 *
 * @property int $id
 * @property int $numero_cotizacion
 * @property \Cake\I18n\FrozenDate $fecha_cotizacion
 * @property int $id_empresa
 * @property int $id_proveedor
 * @property int $id_servicio
 * @property int $id_localidad
 * @property int $id_provincia
 * @property bool|null $existencia
 * @property string $costo
 * @property \Cake\I18n\FrozenDate|null $fecha_validez
 * @property string $precio
 * @property \Cake\I18n\FrozenDate|null $fecha_precio
 * @property string|null $iva
 * @property float|null $porc
 * @property float $precio_nc
 * @property float $porc_nc
 * @property int $cupo
 * @property int $contador_cupo
 * @property string $codigo
 * @property bool|null $liberado
 * @property int $nro_presupuesto
 * @property string $conting_capitado
 * @property bool $conting_ncapitado
 * @property int $n_licitacion
 * @property bool $despl_lote
 *
 * @property \App\Model\Entity\DomiciliosArray[] $domicilios_array
 * @property \App\Model\Entity\Licitacion[] $licitacion
 */
class Servicios1 extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'tipo' => true,
        'servicio' => true,
        'referencia' => true,
       
    ];
}

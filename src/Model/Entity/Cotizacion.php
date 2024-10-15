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
class Cotizacion extends Entity
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
        'numero_cotizacion' => true,
        'fecha_cotizacion' => true,
        'id_empresa' => true,
        'id_proveedor' => true,
        'id_servicio' => true,
        'id_localidad' => true,
        'id_provincia' => true,
        'existencia' => true,
        'costo' => true,
        'fecha_validez' => true,
        'precio' => true,
        'fecha_precio' => true,
        'iva' => true,
        'porc' => true,
        'precio_nc' => true,
        'porc_nc' => true,
        'cupo' => true,
        'contador_cupo' => true,
        'codigo' => true,
        'liberado' => true,
        'nro_presupuesto' => true,
        'conting_capitado' => true,
        'conting_ncapitado' => true,
        'n_licitacion' => true,
        'despl_lote' => true,
        'domicilios_array' => true,
        'licitacion' => true,
    ];
}

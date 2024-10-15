<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProveedoresInfo Entity
 *
 * @property int $id_proveedor
 * @property string|null $cuit
 * @property string $provincia
 * @property string $partido
 * @property string $ciudad
 * @property int $codigo_postal
 * @property float $lat
 * @property float $lng
 * @property string $razon_social
 * @property string $nombre
 * @property string $direccion
 * @property string $direccion_alternativa_1
 * @property string $provincia_alternativa_1
 * @property string $depto_alternativo_1
 * @property string $localidad_alternativa_1
 * @property int $postal_alternativo_1
 * @property string $direccion_alternativa_2
 * @property string $provincia_alternativa_2
 * @property string $depto_alternativo_2
 * @property string $localidad_alternativa_2
 * @property int $postal_alternativo_2
 * @property string $telefono
 * @property string $mail
 * @property string $mail_contacto_1
 * @property string $mail_contacto_2
 * @property string $contacto
 * @property string $contacto_1
 * @property string $contacto_2
 * @property string $telefono_contacto
 * @property string $telefono_contacto_1
 * @property string $telefono_contacto_2
 * @property string $horario_atencion
 * @property int $capacidad_diaria
 * @property bool $centro_propio
 * @property string $cond_pago
 * @property int|null $legales_proveedores_aptitud1
 * @property bool|null $Ausentismo_dom
 * @property string $rubro
 * @property int $estado
 * @property string $observaciones
 */
class ProveedoresInfo extends Entity
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
        'cuit' => true,
        'provincia' => true,
        'partido' => true,
        'ciudad' => true,
        'codigo_postal' => true,
        'lat' => true,
        'lng' => true,
        'razon_social' => true,
        'nombre' => true,
        'direccion' => true,
        'direccion_alternativa_1' => true,
        'provincia_alternativa_1' => true,
        'depto_alternativo_1' => true,
        'localidad_alternativa_1' => true,
        'postal_alternativo_1' => true,
        'direccion_alternativa_2' => true,
        'provincia_alternativa_2' => true,
        'depto_alternativo_2' => true,
        'localidad_alternativa_2' => true,
        'postal_alternativo_2' => true,
        'telefono' => true,
        'mail' => true,
        'mail_contacto_1' => true,
        'mail_contacto_2' => true,
        'contacto' => true,
        'contacto_1' => true,
        'contacto_2' => true,
        'telefono_contacto' => true,
        'telefono_contacto_1' => true,
        'telefono_contacto_2' => true,
        'horario_atencion' => true,
        'capacidad_diaria' => true,
        'centro_propio' => true,
        'cond_pago' => true,
        'legales_proveedores_aptitud1' => true,
        'Ausentismo_dom' => true,
        'rubro' => true,
        'estado' => true,
        'observaciones' => true,
    ];
}

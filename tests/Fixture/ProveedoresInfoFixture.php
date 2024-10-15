<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProveedoresInfoFixture
 */
class ProveedoresInfoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proveedores_info';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_proveedor' => 1,
                'cuit' => 'Lorem ipsum dolor sit amet',
                'provincia' => 'Lorem ipsum dolor sit amet',
                'partido' => 'Lorem ipsum dolor sit amet',
                'ciudad' => 'Lorem ipsum dolor sit amet',
                'codigo_postal' => 1,
                'lat' => 1,
                'lng' => 1,
                'razon_social' => 'Lorem ipsum dolor sit amet',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'direccion_alternativa_1' => 'Lorem ipsum dolor sit amet',
                'provincia_alternativa_1' => 'Lorem ipsum dolor sit amet',
                'depto_alternativo_1' => 'Lorem ipsum dolor sit amet',
                'localidad_alternativa_1' => 'Lorem ipsum dolor sit amet',
                'postal_alternativo_1' => 1,
                'direccion_alternativa_2' => 'Lorem ipsum dolor sit amet',
                'provincia_alternativa_2' => 'Lorem ipsum dolor sit amet',
                'depto_alternativo_2' => 'Lorem ipsum dolor sit amet',
                'localidad_alternativa_2' => 'Lorem ipsum dolor sit amet',
                'postal_alternativo_2' => 1,
                'telefono' => 'Lorem ipsum dolor sit amet',
                'mail' => 'Lorem ipsum dolor sit amet',
                'mail_contacto_1' => 'Lorem ipsum dolor sit amet',
                'mail_contacto_2' => 'Lorem ipsum dolor sit amet',
                'contacto' => 'Lorem ipsum dolor sit amet',
                'contacto_1' => 'Lorem ipsum dolor sit amet',
                'contacto_2' => 'Lorem ipsum dolor sit amet',
                'telefono_contacto' => 'Lorem ipsum dolor sit amet',
                'telefono_contacto_1' => 'Lorem ipsum dolor sit amet',
                'telefono_contacto_2' => 'Lorem ipsum dolor sit amet',
                'horario_atencion' => 'Lorem ipsum dolor sit amet',
                'capacidad_diaria' => 1,
                'centro_propio' => 1,
                'cond_pago' => 'Lorem ipsum dolor sit amet',
                'legales_proveedores_aptitud1' => 1,
                'Ausentismo_dom' => 1,
                'rubro' => 'Lorem ipsum dolor sit amet',
                'estado' => 1,
                'observaciones' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

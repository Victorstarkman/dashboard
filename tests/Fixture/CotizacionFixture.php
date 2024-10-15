<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CotizacionFixture
 */
class CotizacionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cotizacion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'numero_cotizacion' => 1,
                'fecha_cotizacion' => '2024-10-14',
                'id_empresa' => 1,
                'id_proveedor' => 1,
                'id_servicio' => 1,
                'id_localidad' => 1,
                'id_provincia' => 1,
                'existencia' => 1,
                'costo' => 1.5,
                'fecha_validez' => '2024-10-14',
                'precio' => 1.5,
                'fecha_precio' => '2024-10-14',
                'iva' => 1.5,
                'porc' => 1,
                'precio_nc' => 1,
                'porc_nc' => 1,
                'cupo' => 1,
                'contador_cupo' => 1,
                'codigo' => 'Lorem ipsum d',
                'liberado' => 1,
                'nro_presupuesto' => 1,
                'conting_capitado' => 1.5,
                'conting_ncapitado' => 1,
                'n_licitacion' => 1,
                'despl_lote' => 1,
            ],
        ];
        parent::init();
    }
}

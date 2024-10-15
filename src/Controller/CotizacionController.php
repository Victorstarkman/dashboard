<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cotizacion Controller
 *
 * @property \App\Model\Table\CotizacionTable $Cotizacion
 * @method \App\Model\Entity\Cotizacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CotizacionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProveedoresInfo', 'Servicios1'],
        ];
        $cotizaciones = $this->paginate($this->Cotizacion);
     
        $this->set(compact('cotizaciones'));
    }

   
}

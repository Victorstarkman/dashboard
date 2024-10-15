<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;


class Servicios1Table extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Especifica el nombre de la tabla correcta
        $this->setTable('servicios_1');  // Nombre real de la tabla en la base de datos
        $this->setPrimaryKey('id');  // Ajusta esto si la clave primaria tiene un nombre diferente
          // Relación con Cotizacion (hasMany)
          $this->hasMany('Cotizacion', [
            'foreignKey' => 'id_servicio',]);
            
        $this->setEntityClass('App\Model\Entity\Servicios1');
    }
}

<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProveedoresInfo Model
 *
 * @method \App\Model\Entity\ProveedoresInfo newEmptyEntity()
 * @method \App\Model\Entity\ProveedoresInfo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProveedoresInfo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProveedoresInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresInfo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProveedoresInfo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProveedoresInfo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProveedoresInfo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProveedoresInfo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProveedoresInfo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProveedoresInfo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProveedoresInfoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('proveedores_info');
    
        $this->setPrimaryKey('id_proveedor');
        $this->hasMany('Cotizacion', [
            'foreignKey' => 'id_proveedor',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('cuit')
            ->maxLength('cuit', 40)
            ->allowEmptyString('cuit');

        $validator
            ->scalar('provincia')
            ->maxLength('provincia', 1000)
            ->requirePresence('provincia', 'create')
            ->notEmptyString('provincia');

        $validator
            ->scalar('partido')
            ->maxLength('partido', 1000)
            ->requirePresence('partido', 'create')
            ->notEmptyString('partido');

        $validator
            ->scalar('ciudad')
            ->maxLength('ciudad', 1000)
            ->requirePresence('ciudad', 'create')
            ->notEmptyString('ciudad');

        $validator
            ->integer('codigo_postal')
            ->requirePresence('codigo_postal', 'create')
            ->notEmptyString('codigo_postal');

        $validator
            ->numeric('lat')
            ->requirePresence('lat', 'create')
            ->notEmptyString('lat');

        $validator
            ->numeric('lng')
            ->requirePresence('lng', 'create')
            ->notEmptyString('lng');

        $validator
            ->scalar('razon_social')
            ->maxLength('razon_social', 1000)
            ->requirePresence('razon_social', 'create')
            ->notEmptyString('razon_social');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 200)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 1000)
            ->requirePresence('direccion', 'create')
            ->notEmptyString('direccion');

        $validator
            ->scalar('direccion_alternativa_1')
            ->maxLength('direccion_alternativa_1', 100)
            ->requirePresence('direccion_alternativa_1', 'create')
            ->notEmptyString('direccion_alternativa_1');

        $validator
            ->scalar('provincia_alternativa_1')
            ->maxLength('provincia_alternativa_1', 100)
            ->requirePresence('provincia_alternativa_1', 'create')
            ->notEmptyString('provincia_alternativa_1');

        $validator
            ->scalar('depto_alternativo_1')
            ->maxLength('depto_alternativo_1', 100)
            ->requirePresence('depto_alternativo_1', 'create')
            ->notEmptyString('depto_alternativo_1');

        $validator
            ->scalar('localidad_alternativa_1')
            ->maxLength('localidad_alternativa_1', 100)
            ->requirePresence('localidad_alternativa_1', 'create')
            ->notEmptyString('localidad_alternativa_1');

        $validator
            ->integer('postal_alternativo_1')
            ->requirePresence('postal_alternativo_1', 'create')
            ->notEmptyString('postal_alternativo_1');

        $validator
            ->scalar('direccion_alternativa_2')
            ->maxLength('direccion_alternativa_2', 100)
            ->requirePresence('direccion_alternativa_2', 'create')
            ->notEmptyString('direccion_alternativa_2');

        $validator
            ->scalar('provincia_alternativa_2')
            ->maxLength('provincia_alternativa_2', 100)
            ->requirePresence('provincia_alternativa_2', 'create')
            ->notEmptyString('provincia_alternativa_2');

        $validator
            ->scalar('depto_alternativo_2')
            ->maxLength('depto_alternativo_2', 100)
            ->requirePresence('depto_alternativo_2', 'create')
            ->notEmptyString('depto_alternativo_2');

        $validator
            ->scalar('localidad_alternativa_2')
            ->maxLength('localidad_alternativa_2', 100)
            ->requirePresence('localidad_alternativa_2', 'create')
            ->notEmptyString('localidad_alternativa_2');

        $validator
            ->integer('postal_alternativo_2')
            ->requirePresence('postal_alternativo_2', 'create')
            ->notEmptyString('postal_alternativo_2');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 50)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 50)
            ->requirePresence('mail', 'create')
            ->notEmptyString('mail');

        $validator
            ->scalar('mail_contacto_1')
            ->maxLength('mail_contacto_1', 255)
            ->requirePresence('mail_contacto_1', 'create')
            ->notEmptyString('mail_contacto_1');

        $validator
            ->scalar('mail_contacto_2')
            ->maxLength('mail_contacto_2', 255)
            ->requirePresence('mail_contacto_2', 'create')
            ->notEmptyString('mail_contacto_2');

        $validator
            ->scalar('contacto')
            ->maxLength('contacto', 255)
            ->requirePresence('contacto', 'create')
            ->notEmptyString('contacto');

        $validator
            ->scalar('contacto_1')
            ->maxLength('contacto_1', 255)
            ->requirePresence('contacto_1', 'create')
            ->notEmptyString('contacto_1');

        $validator
            ->scalar('contacto_2')
            ->maxLength('contacto_2', 255)
            ->requirePresence('contacto_2', 'create')
            ->notEmptyString('contacto_2');

        $validator
            ->scalar('telefono_contacto')
            ->maxLength('telefono_contacto', 255)
            ->requirePresence('telefono_contacto', 'create')
            ->notEmptyString('telefono_contacto');

        $validator
            ->scalar('telefono_contacto_1')
            ->maxLength('telefono_contacto_1', 255)
            ->requirePresence('telefono_contacto_1', 'create')
            ->notEmptyString('telefono_contacto_1');

        $validator
            ->scalar('telefono_contacto_2')
            ->maxLength('telefono_contacto_2', 255)
            ->requirePresence('telefono_contacto_2', 'create')
            ->notEmptyString('telefono_contacto_2');

        $validator
            ->scalar('horario_atencion')
            ->maxLength('horario_atencion', 150)
            ->requirePresence('horario_atencion', 'create')
            ->notEmptyString('horario_atencion');

        $validator
            ->integer('capacidad_diaria')
            ->requirePresence('capacidad_diaria', 'create')
            ->notEmptyString('capacidad_diaria');

        $validator
            ->boolean('centro_propio')
            ->requirePresence('centro_propio', 'create')
            ->notEmptyString('centro_propio');

        $validator
            ->scalar('cond_pago')
            ->maxLength('cond_pago', 150)
            ->requirePresence('cond_pago', 'create')
            ->notEmptyString('cond_pago');

        $validator
            ->allowEmptyString('legales_proveedores_aptitud1');

        $validator
            ->boolean('Ausentismo_dom')
            ->allowEmptyString('Ausentismo_dom');

        $validator
            ->scalar('rubro')
            ->maxLength('rubro', 200)
            ->requirePresence('rubro', 'create')
            ->notEmptyString('rubro');

        $validator
            ->integer('estado')
            ->notEmptyString('estado');

        $validator
            ->scalar('observaciones')
            ->maxLength('observaciones', 2000)
            ->requirePresence('observaciones', 'create')
            ->notEmptyString('observaciones');

        return $validator;
    }
}

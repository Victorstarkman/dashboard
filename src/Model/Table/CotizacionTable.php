<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cotizacion Model
 *
 * @property \App\Model\Table\DomiciliosArrayTable&\Cake\ORM\Association\HasMany $DomiciliosArray
 * @property \App\Model\Table\LicitacionTable&\Cake\ORM\Association\BelongsToMany $Licitacion
 *
 * @method \App\Model\Entity\Cotizacion newEmptyEntity()
 * @method \App\Model\Entity\Cotizacion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cotizacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cotizacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cotizacion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cotizacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cotizacion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cotizacion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cotizacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cotizacion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cotizacion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cotizacion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cotizacion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CotizacionTable extends Table
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

        $this->setTable('cotizacion');
        $this->setPrimaryKey('id');
        
        $this->belongsTo('ProveedoresInfo', [
            'foreignKey' => 'id_proveedor',
            'joinType' => 'INNER',
        ]);

        // Define la relación con servicios_1 (belongsTo)
        $this->belongsTo('Servicios1', [
            'foreignKey' => 'id_servicio',
            'joinType' => 'INNER',
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
            ->integer('numero_cotizacion')
            ->requirePresence('numero_cotizacion', 'create')
            ->notEmptyString('numero_cotizacion');

        $validator
            ->date('fecha_cotizacion')
            ->requirePresence('fecha_cotizacion', 'create')
            ->notEmptyDate('fecha_cotizacion');

        $validator
            ->integer('id_empresa')
            ->requirePresence('id_empresa', 'create')
            ->notEmptyString('id_empresa');

        $validator
            ->integer('id_proveedor')
            ->requirePresence('id_proveedor', 'create')
            ->notEmptyString('id_proveedor');

        $validator
            ->integer('id_servicio')
            ->requirePresence('id_servicio', 'create')
            ->notEmptyString('id_servicio');

        $validator
            ->integer('id_localidad')
            ->requirePresence('id_localidad', 'create')
            ->notEmptyString('id_localidad');

        $validator
            ->integer('id_provincia')
            ->requirePresence('id_provincia', 'create')
            ->notEmptyString('id_provincia');

        $validator
            ->boolean('existencia')
            ->allowEmptyString('existencia');

        $validator
            ->decimal('costo')
            ->requirePresence('costo', 'create')
            ->notEmptyString('costo');

        $validator
            ->date('fecha_validez')
            ->allowEmptyDate('fecha_validez');

        $validator
            ->decimal('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        $validator
            ->date('fecha_precio')
            ->allowEmptyDate('fecha_precio');

        $validator
            ->decimal('iva')
            ->allowEmptyString('iva');

        $validator
            ->numeric('porc')
            ->allowEmptyString('porc');

        $validator
            ->numeric('precio_nc')
            ->notEmptyString('precio_nc');

        $validator
            ->numeric('porc_nc')
            ->notEmptyString('porc_nc');

        $validator
            ->integer('cupo')
            ->notEmptyString('cupo');

        $validator
            ->integer('contador_cupo')
            ->notEmptyString('contador_cupo');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 15)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->boolean('liberado')
            ->allowEmptyString('liberado');

        $validator
            ->integer('nro_presupuesto')
            ->requirePresence('nro_presupuesto', 'create')
            ->notEmptyString('nro_presupuesto');

        $validator
            ->decimal('conting_capitado')
            ->notEmptyString('conting_capitado');

        $validator
            ->boolean('conting_ncapitado')
            ->notEmptyString('conting_ncapitado');

        $validator
            ->integer('n_licitacion')
            ->requirePresence('n_licitacion', 'create')
            ->notEmptyString('n_licitacion');

        $validator
            ->boolean('despl_lote')
            ->notEmptyString('despl_lote');

        return $validator;
    }
}

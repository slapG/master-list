<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lnd Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\Lnd newEmptyEntity()
 * @method \App\Model\Entity\Lnd newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Lnd[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lnd get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lnd findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Lnd patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lnd[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lnd|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lnd saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lnd[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lnd[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lnd[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lnd[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LndTable extends Table
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

        $this->setTable('lnd');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employees', [
            'foreignKey' => 'lnd_id',
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
            ->scalar('training_program')
            ->maxLength('training_program', 255)
            ->allowEmptyString('training_program');

        $validator
            ->date('exclusive_from')
            ->allowEmptyDate('exclusive_from');

        $validator
            ->date('exclusive_to')
            ->allowEmptyDate('exclusive_to');

        $validator
            ->scalar('number_of_hours')
            ->maxLength('number_of_hours', 255)
            ->allowEmptyString('number_of_hours');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->allowEmptyString('type');

        $validator
            ->scalar('conducted_by')
            ->maxLength('conducted_by', 255)
            ->allowEmptyString('conducted_by');

        return $validator;
    }
}

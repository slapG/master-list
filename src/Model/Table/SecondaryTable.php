<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Secondary Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\Secondary newEmptyEntity()
 * @method \App\Model\Entity\Secondary newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Secondary[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Secondary get($primaryKey, $options = [])
 * @method \App\Model\Entity\Secondary findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Secondary patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Secondary[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Secondary|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Secondary saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Secondary[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Secondary[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Secondary[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Secondary[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SecondaryTable extends Table
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

        $this->setTable('secondary');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employees', [
            'foreignKey' => 'secondary_id',
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
            ->scalar('secondary_name')
            ->maxLength('secondary_name', 255)
            ->allowEmptyString('secondary_name');

        $validator
            ->scalar('basic_education')
            ->maxLength('basic_education', 255)
            ->allowEmptyString('basic_education');

        $validator
            ->date('start_from')
            ->allowEmptyDate('start_from');

        $validator
            ->date('end_to')
            ->allowEmptyDate('end_to');

        $validator
            ->date('year_graduated')
            ->allowEmptyDate('year_graduated');

        return $validator;
    }
}

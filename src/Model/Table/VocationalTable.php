<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vocational Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\Vocational newEmptyEntity()
 * @method \App\Model\Entity\Vocational newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vocational[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vocational get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vocational findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vocational patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vocational[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vocational|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vocational saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vocational[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vocational[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vocational[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vocational[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VocationalTable extends Table
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

        $this->setTable('vocational');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employees', [
            'foreignKey' => 'vocational_id',
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
            ->scalar('vocational_name')
            ->maxLength('vocational_name', 255)
            ->allowEmptyString('vocational_name');

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

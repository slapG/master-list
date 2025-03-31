<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Elementary Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\Elementary newEmptyEntity()
 * @method \App\Model\Entity\Elementary newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Elementary[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Elementary get($primaryKey, $options = [])
 * @method \App\Model\Entity\Elementary findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Elementary patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Elementary[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Elementary|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Elementary saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Elementary[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Elementary[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Elementary[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Elementary[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ElementaryTable extends Table
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

        $this->setTable('elementary');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employees', [
            'foreignKey' => 'elementary_id',
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
            ->scalar('elementary_name')
            ->maxLength('elementary_name', 255)
            ->allowEmptyString('elementary_name');

        $validator
            ->scalar('basic_education')
            ->maxLength('basic_education', 255)
            ->allowEmptyString('basic_education');

        $validator
            ->date('period_of_attendance')
            ->allowEmptyDate('period_of_attendance');

        $validator
            ->date('year_graduated')
            ->allowEmptyDate('year_graduated');

        return $validator;
    }
}

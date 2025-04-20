<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WorkExperience Model
 *
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\WorkExperience newEmptyEntity()
 * @method \App\Model\Entity\WorkExperience newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\WorkExperience[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WorkExperience get($primaryKey, $options = [])
 * @method \App\Model\Entity\WorkExperience findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\WorkExperience patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WorkExperience[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\WorkExperience|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WorkExperience saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WorkExperience[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\WorkExperience[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\WorkExperience[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\WorkExperience[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class WorkExperienceTable extends Table
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

        $this->setTable('work_experience');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
        ]);
        $this->hasMany('Employees', [
            'foreignKey' => 'work_experience_id',
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
            ->scalar('start_from')
            ->allowEmptyString('start_from');

        $validator
            ->scalar('upto')
            ->allowEmptyString('upto');

        $validator
            ->scalar('position')
            ->allowEmptyString('position');

        $validator
            ->scalar('department_name')
            ->requirePresence('department_name', 'create')
            ->notEmptyString('department_name');

        $validator
            ->integer('department_id')
            ->allowEmptyString('department_id');

        $validator
            ->scalar('monthly_salary')
            ->allowEmptyString('monthly_salary');

        $validator
            ->scalar('salary_grade')
            ->allowEmptyString('salary_grade');

        $validator
            ->scalar('status_of_appointment')
            ->allowEmptyString('status_of_appointment');

        $validator
            ->scalar('government_service')
            ->allowEmptyString('government_service');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('department_id', 'Departments'), ['errorField' => 'department_id']);

        return $rules;
    }
}

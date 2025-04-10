<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Organization Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\Organization newEmptyEntity()
 * @method \App\Model\Entity\Organization newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Organization[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Organization get($primaryKey, $options = [])
 * @method \App\Model\Entity\Organization findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Organization patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Organization[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Organization|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organization saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organization[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Organization[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Organization[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Organization[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrganizationTable extends Table
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

        $this->setTable('organization');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employees', [
            'foreignKey' => 'organization_id',
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
            ->scalar('name_of_organization')
            ->maxLength('name_of_organization', 255)
            ->allowEmptyString('name_of_organization');

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
            ->scalar('position')
            ->maxLength('position', 255)
            ->allowEmptyString('position');

        return $validator;
    }
}

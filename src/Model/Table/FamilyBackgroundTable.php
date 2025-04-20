<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FamilyBackground Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\FamilyBackground newEmptyEntity()
 * @method \App\Model\Entity\FamilyBackground newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FamilyBackground[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FamilyBackground get($primaryKey, $options = [])
 * @method \App\Model\Entity\FamilyBackground findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FamilyBackground patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FamilyBackground[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FamilyBackground|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FamilyBackground saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FamilyBackground[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FamilyBackground[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FamilyBackground[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FamilyBackground[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FamilyBackgroundTable extends Table
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

        $this->setTable('family_background');
        $this->setDisplayField('family_background');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employees', [
            'foreignKey' => 'family_background_id',
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
            ->scalar('family_background')
            ->maxLength('family_background', 255)
            ->allowEmptyString('family_background');

        $validator
            ->scalar('spouse_name')
            ->maxLength('spouse_name', 255)
            ->allowEmptyString('spouse_name');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 255)
            ->allowEmptyString('middle_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('occupation')
            ->maxLength('occupation', 255)
            ->allowEmptyString('occupation');

        $validator
            ->scalar('employer_business_name')
            ->maxLength('employer_business_name', 255)
            ->allowEmptyString('employer_business_name');

        $validator
            ->scalar('business_address')
            ->maxLength('business_address', 255)
            ->allowEmptyString('business_address');

        $validator
            ->scalar('telephone_number')
            ->maxLength('telephone_number', 255)
            ->allowEmptyString('telephone_number');

        $validator
            ->scalar('father_surname')
            ->maxLength('father_surname', 255)
            ->allowEmptyString('father_surname');

        $validator
            ->scalar('father_first_name')
            ->maxLength('father_first_name', 255)
            ->allowEmptyString('father_first_name');

        $validator
            ->scalar('father_middle_name')
            ->maxLength('father_middle_name', 255)
            ->allowEmptyString('father_middle_name');

        $validator
            ->scalar('mother_maiden_name')
            ->maxLength('mother_maiden_name', 255)
            ->allowEmptyString('mother_maiden_name');

        $validator
            ->scalar('mother_first_name')
            ->maxLength('mother_first_name', 255)
            ->allowEmptyString('mother_first_name');

        $validator
            ->scalar('mother_middle_name')
            ->maxLength('mother_middle_name', 255)
            ->allowEmptyString('mother_middle_name');

        $validator
            ->scalar('siblings')
            ->allowEmptyString('siblings');

        $validator
            ->scalar('bithdays')
            ->allowEmptyString('bithdays');

        return $validator;
    }
}

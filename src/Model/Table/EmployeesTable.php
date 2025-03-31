<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \App\Model\Table\FamilyBackgroundTable&\Cake\ORM\Association\BelongsTo $FamilyBackground
 * @property \App\Model\Table\ElementaryTable&\Cake\ORM\Association\BelongsTo $Elementary
 * @property \App\Model\Table\SecondaryTable&\Cake\ORM\Association\BelongsTo $Secondary
 * @property \App\Model\Table\VocationalTable&\Cake\ORM\Association\BelongsTo $Vocational
 * @property \App\Model\Table\CollegeTable&\Cake\ORM\Association\BelongsTo $College
 * @property \App\Model\Table\GraduateTable&\Cake\ORM\Association\BelongsTo $Graduate
 * @property \App\Model\Table\LndsTable&\Cake\ORM\Association\BelongsTo $Lnds
 * @property \App\Model\Table\OrganizationsTable&\Cake\ORM\Association\BelongsTo $Organizations
 * @property \App\Model\Table\WorkExperiencesTable&\Cake\ORM\Association\BelongsTo $WorkExperiences
 * @property \App\Model\Table\OtherInformationsTable&\Cake\ORM\Association\BelongsTo $OtherInformations
 * @property \App\Model\Table\SpecialitiesTable&\Cake\ORM\Association\BelongsTo $Specialities
 *
 * @method \App\Model\Entity\Employee newEmptyEntity()
 * @method \App\Model\Entity\Employee newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('first_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FamilyBackground', [
            'foreignKey' => 'family_background_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Elementary', [
            'foreignKey' => 'elementary_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Secondary', [
            'foreignKey' => 'secondary_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Vocational', [
            'foreignKey' => 'vocational_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('College', [
            'foreignKey' => 'college_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Graduate', [
            'foreignKey' => 'graduate_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Lnds', [
            'foreignKey' => 'lnds_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Organizations', [
            'foreignKey' => 'organizations_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('WorkExperiences', [
            'foreignKey' => 'work_experiences_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OtherInformations', [
            'foreignKey' => 'other_informations_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Specialities', [
            'foreignKey' => 'specialities_id',
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
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 255)
            ->requirePresence('middle_name', 'create')
            ->notEmptyString('middle_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('place_of_birth')
            ->maxLength('place_of_birth', 255)
            ->requirePresence('place_of_birth', 'create')
            ->notEmptyString('place_of_birth');

        $validator
            ->date('date_of_birth')
            ->requirePresence('date_of_birth', 'create')
            ->notEmptyDate('date_of_birth');

        $validator
            ->scalar('sex')
            ->maxLength('sex', 255)
            ->requirePresence('sex', 'create')
            ->notEmptyString('sex');

        $validator
            ->scalar('civil_status')
            ->maxLength('civil_status', 255)
            ->requirePresence('civil_status', 'create')
            ->notEmptyString('civil_status');

        $validator
            ->scalar('height')
            ->maxLength('height', 255)
            ->requirePresence('height', 'create')
            ->notEmptyString('height');

        $validator
            ->scalar('weight')
            ->maxLength('weight', 255)
            ->requirePresence('weight', 'create')
            ->notEmptyString('weight');

        $validator
            ->scalar('blood_type')
            ->maxLength('blood_type', 255)
            ->allowEmptyString('blood_type');

        $validator
            ->scalar('gsis_number')
            ->maxLength('gsis_number', 255)
            ->allowEmptyString('gsis_number');

        $validator
            ->scalar('pagibig_number')
            ->maxLength('pagibig_number', 255)
            ->allowEmptyString('pagibig_number');

        $validator
            ->scalar('philhealth_number')
            ->maxLength('philhealth_number', 255)
            ->allowEmptyString('philhealth_number');

        $validator
            ->scalar('sss_number')
            ->maxLength('sss_number', 255)
            ->allowEmptyString('sss_number');

        $validator
            ->scalar('tin_number')
            ->maxLength('tin_number', 255)
            ->allowEmptyString('tin_number');

        $validator
            ->scalar('agency_employee_number')
            ->maxLength('agency_employee_number', 255)
            ->requirePresence('agency_employee_number', 'create')
            ->notEmptyString('agency_employee_number');

        $validator
            ->scalar('citizenship')
            ->maxLength('citizenship', 255)
            ->requirePresence('citizenship', 'create')
            ->notEmptyString('citizenship');

        $validator
            ->scalar('residential_address')
            ->maxLength('residential_address', 255)
            ->requirePresence('residential_address', 'create')
            ->notEmptyString('residential_address');

        $validator
            ->scalar('permanent_address')
            ->maxLength('permanent_address', 255)
            ->requirePresence('permanent_address', 'create')
            ->notEmptyString('permanent_address');

        $validator
            ->scalar('telephone_number')
            ->maxLength('telephone_number', 255)
            ->requirePresence('telephone_number', 'create')
            ->notEmptyString('telephone_number');

        $validator
            ->scalar('mobile_number')
            ->maxLength('mobile_number', 255)
            ->requirePresence('mobile_number', 'create')
            ->notEmptyString('mobile_number');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->integer('family_background_id')
            ->notEmptyString('family_background_id');

        $validator
            ->integer('elementary_id')
            ->notEmptyString('elementary_id');

        $validator
            ->integer('secondary_id')
            ->notEmptyString('secondary_id');

        $validator
            ->integer('vocational_id')
            ->notEmptyString('vocational_id');

        $validator
            ->integer('college_id')
            ->notEmptyString('college_id');

        $validator
            ->integer('graduate_id')
            ->notEmptyString('graduate_id');

        $validator
            ->integer('lnds_id')
            ->notEmptyString('lnds_id');

        $validator
            ->integer('organizations_id')
            ->notEmptyString('organizations_id');

        $validator
            ->integer('work_experiences_id')
            ->notEmptyString('work_experiences_id');

        $validator
            ->integer('other_informations_id')
            ->notEmptyString('other_informations_id');

        $validator
            ->integer('specialities_id')
            ->notEmptyString('specialities_id');

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
        $rules->add($rules->existsIn('family_background_id', 'FamilyBackground'), ['errorField' => 'family_background_id']);
        $rules->add($rules->existsIn('elementary_id', 'Elementary'), ['errorField' => 'elementary_id']);
        $rules->add($rules->existsIn('secondary_id', 'Secondary'), ['errorField' => 'secondary_id']);
        $rules->add($rules->existsIn('vocational_id', 'Vocational'), ['errorField' => 'vocational_id']);
        $rules->add($rules->existsIn('college_id', 'College'), ['errorField' => 'college_id']);
        $rules->add($rules->existsIn('graduate_id', 'Graduate'), ['errorField' => 'graduate_id']);
        $rules->add($rules->existsIn('lnds_id', 'Lnds'), ['errorField' => 'lnds_id']);
        $rules->add($rules->existsIn('organizations_id', 'Organizations'), ['errorField' => 'organizations_id']);
        $rules->add($rules->existsIn('work_experiences_id', 'WorkExperiences'), ['errorField' => 'work_experiences_id']);
        $rules->add($rules->existsIn('other_informations_id', 'OtherInformations'), ['errorField' => 'other_informations_id']);
        $rules->add($rules->existsIn('specialities_id', 'Specialities'), ['errorField' => 'specialities_id']);

        return $rules;
    }
}

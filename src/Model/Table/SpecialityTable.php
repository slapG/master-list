<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Speciality Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\Speciality newEmptyEntity()
 * @method \App\Model\Entity\Speciality newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Speciality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Speciality get($primaryKey, $options = [])
 * @method \App\Model\Entity\Speciality findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Speciality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Speciality[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Speciality|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Speciality saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Speciality[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Speciality[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Speciality[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Speciality[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SpecialityTable extends Table
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

        $this->setTable('speciality');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employees', [
            'foreignKey' => 'speciality_id',
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
            ->scalar('speciality_laws')
            ->allowEmptyString('speciality_laws');

        $validator
            ->scalar('rating')
            ->allowEmptyString('rating');

        $validator
            ->scalar('date_of_examination')
            ->allowEmptyString('date_of_examination');

        $validator
            ->scalar('place_of_examination')
            ->allowEmptyString('place_of_examination');

        $validator
            ->scalar('license_number')
            ->allowEmptyString('license_number');

        $validator
            ->scalar('date_of_validity')
            ->allowEmptyString('date_of_validity');

        return $validator;
    }
}

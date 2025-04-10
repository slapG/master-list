<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OtherInformation Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\OtherInformation newEmptyEntity()
 * @method \App\Model\Entity\OtherInformation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OtherInformation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OtherInformation get($primaryKey, $options = [])
 * @method \App\Model\Entity\OtherInformation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OtherInformation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OtherInformation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OtherInformation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OtherInformation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OtherInformation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OtherInformation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OtherInformation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OtherInformation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OtherInformationTable extends Table
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

        $this->setTable('other_information');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Employees', [
            'foreignKey' => 'other_information_id',
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
            ->scalar('special_skill')
            ->allowEmptyString('special_skill');

        $validator
            ->scalar('non_academic_distinction')
            ->allowEmptyString('non_academic_distinction');

        $validator
            ->scalar('membership')
            ->allowEmptyString('membership');

        return $validator;
    }
}

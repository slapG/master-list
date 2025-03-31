<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Employee> $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('middle_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('place_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('sex') ?></th>
                    <th><?= $this->Paginator->sort('civil_status') ?></th>
                    <th><?= $this->Paginator->sort('height') ?></th>
                    <th><?= $this->Paginator->sort('weight') ?></th>
                    <th><?= $this->Paginator->sort('blood_type') ?></th>
                    <th><?= $this->Paginator->sort('gsis_number') ?></th>
                    <th><?= $this->Paginator->sort('pagibig_number') ?></th>
                    <th><?= $this->Paginator->sort('philhealth_number') ?></th>
                    <th><?= $this->Paginator->sort('sss_number') ?></th>
                    <th><?= $this->Paginator->sort('tin_number') ?></th>
                    <th><?= $this->Paginator->sort('agency_employee_number') ?></th>
                    <th><?= $this->Paginator->sort('citizenship') ?></th>
                    <th><?= $this->Paginator->sort('residential_address') ?></th>
                    <th><?= $this->Paginator->sort('permanent_address') ?></th>
                    <th><?= $this->Paginator->sort('telephone_number') ?></th>
                    <th><?= $this->Paginator->sort('mobile_number') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('family_background_id') ?></th>
                    <th><?= $this->Paginator->sort('elementary_id') ?></th>
                    <th><?= $this->Paginator->sort('secondary_id') ?></th>
                    <th><?= $this->Paginator->sort('vocational_id') ?></th>
                    <th><?= $this->Paginator->sort('college_id') ?></th>
                    <th><?= $this->Paginator->sort('graduate_id') ?></th>
                    <th><?= $this->Paginator->sort('lnds_id') ?></th>
                    <th><?= $this->Paginator->sort('organizations_id') ?></th>
                    <th><?= $this->Paginator->sort('work_experiences_id') ?></th>
                    <th><?= $this->Paginator->sort('other_informations_id') ?></th>
                    <th><?= $this->Paginator->sort('specialities_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->id) ?></td>
                    <td><?= h($employee->first_name) ?></td>
                    <td><?= h($employee->middle_name) ?></td>
                    <td><?= h($employee->last_name) ?></td>
                    <td><?= h($employee->address) ?></td>
                    <td><?= h($employee->place_of_birth) ?></td>
                    <td><?= h($employee->date_of_birth) ?></td>
                    <td><?= h($employee->sex) ?></td>
                    <td><?= h($employee->civil_status) ?></td>
                    <td><?= h($employee->height) ?></td>
                    <td><?= h($employee->weight) ?></td>
                    <td><?= h($employee->blood_type) ?></td>
                    <td><?= h($employee->gsis_number) ?></td>
                    <td><?= h($employee->pagibig_number) ?></td>
                    <td><?= h($employee->philhealth_number) ?></td>
                    <td><?= h($employee->sss_number) ?></td>
                    <td><?= h($employee->tin_number) ?></td>
                    <td><?= h($employee->agency_employee_number) ?></td>
                    <td><?= h($employee->citizenship) ?></td>
                    <td><?= h($employee->residential_address) ?></td>
                    <td><?= h($employee->permanent_address) ?></td>
                    <td><?= h($employee->telephone_number) ?></td>
                    <td><?= h($employee->mobile_number) ?></td>
                    <td><?= h($employee->email) ?></td>
                    <td><?= $employee->has('family_background') ? $this->Html->link($employee->family_background->family_background, ['controller' => 'FamilyBackground', 'action' => 'view', $employee->family_background->id]) : '' ?></td>
                    <td><?= $employee->has('elementary') ? $this->Html->link($employee->elementary->id, ['controller' => 'Elementary', 'action' => 'view', $employee->elementary->id]) : '' ?></td>
                    <td><?= $employee->has('secondary') ? $this->Html->link($employee->secondary->id, ['controller' => 'Secondary', 'action' => 'view', $employee->secondary->id]) : '' ?></td>
                    <td><?= $employee->has('vocational') ? $this->Html->link($employee->vocational->id, ['controller' => 'Vocational', 'action' => 'view', $employee->vocational->id]) : '' ?></td>
                    <td><?= $employee->has('college') ? $this->Html->link($employee->college->id, ['controller' => 'College', 'action' => 'view', $employee->college->id]) : '' ?></td>
                    <td><?= $employee->has('graduate') ? $this->Html->link($employee->graduate->id, ['controller' => 'Graduate', 'action' => 'view', $employee->graduate->id]) : '' ?></td>
                    <td><?= $employee->has('lnd') ? $this->Html->link($employee->lnd->id, ['controller' => 'Lnds', 'action' => 'view', $employee->lnd->id]) : '' ?></td>
                    <td><?= $employee->has('organization') ? $this->Html->link($employee->organization->id, ['controller' => 'Organizations', 'action' => 'view', $employee->organization->id]) : '' ?></td>
                    <td><?= $employee->has('work_experience') ? $this->Html->link($employee->work_experience->id, ['controller' => 'WorkExperiences', 'action' => 'view', $employee->work_experience->id]) : '' ?></td>
                    <td><?= $employee->has('other_information') ? $this->Html->link($employee->other_information->id, ['controller' => 'OtherInformations', 'action' => 'view', $employee->other_information->id]) : '' ?></td>
                    <td><?= $employee->specialities_id ? $this->Html->link($employee->specialities_id, ['controller' => 'OtherInformations', 'action' => 'view', $employee->specialities_id]) : '' ?></td>
                    <td><?= h($employee->created) ?></td>   
                    <td><?= h($employee->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

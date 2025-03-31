<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->first_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($employee->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Middle Name') ?></th>
                    <td><?= h($employee->middle_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($employee->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($employee->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Place Of Birth') ?></th>
                    <td><?= h($employee->place_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sex') ?></th>
                    <td><?= h($employee->sex) ?></td>
                </tr>
                <tr>
                    <th><?= __('Civil Status') ?></th>
                    <td><?= h($employee->civil_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Height') ?></th>
                    <td><?= h($employee->height) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= h($employee->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Blood Type') ?></th>
                    <td><?= h($employee->blood_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gsis Number') ?></th>
                    <td><?= h($employee->gsis_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pagibig Number') ?></th>
                    <td><?= h($employee->pagibig_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Philhealth Number') ?></th>
                    <td><?= h($employee->philhealth_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sss Number') ?></th>
                    <td><?= h($employee->sss_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tin Number') ?></th>
                    <td><?= h($employee->tin_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agency Employee Number') ?></th>
                    <td><?= h($employee->agency_employee_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Citizenship') ?></th>
                    <td><?= h($employee->citizenship) ?></td>
                </tr>
                <tr>
                    <th><?= __('Residential Address') ?></th>
                    <td><?= h($employee->residential_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Permanent Address') ?></th>
                    <td><?= h($employee->permanent_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone Number') ?></th>
                    <td><?= h($employee->telephone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile Number') ?></th>
                    <td><?= h($employee->mobile_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($employee->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Background') ?></th>
                    <td><?= $employee->has('family_background') ? $this->Html->link($employee->family_background->family_background, ['controller' => 'FamilyBackground', 'action' => 'view', $employee->family_background->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Elementary') ?></th>
                    <td><?= $employee->has('elementary') ? $this->Html->link($employee->elementary->id, ['controller' => 'Elementary', 'action' => 'view', $employee->elementary->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Secondary') ?></th>
                    <td><?= $employee->has('secondary') ? $this->Html->link($employee->secondary->id, ['controller' => 'Secondary', 'action' => 'view', $employee->secondary->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vocational') ?></th>
                    <td><?= $employee->has('vocational') ? $this->Html->link($employee->vocational->id, ['controller' => 'Vocational', 'action' => 'view', $employee->vocational->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('College') ?></th>
                    <td><?= $employee->has('college') ? $this->Html->link($employee->college->id, ['controller' => 'College', 'action' => 'view', $employee->college->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Graduate') ?></th>
                    <td><?= $employee->has('graduate') ? $this->Html->link($employee->graduate->id, ['controller' => 'Graduate', 'action' => 'view', $employee->graduate->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lnd') ?></th>
                    <td><?= $employee->has('lnd') ? $this->Html->link($employee->lnd->id, ['controller' => 'Lnds', 'action' => 'view', $employee->lnd->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Organization') ?></th>
                    <td><?= $employee->has('organization') ? $this->Html->link($employee->organization->id, ['controller' => 'Organizations', 'action' => 'view', $employee->organization->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Work Experience') ?></th>
                    <td><?= $employee->has('work_experience') ? $this->Html->link($employee->work_experience->id, ['controller' => 'WorkExperiences', 'action' => 'view', $employee->work_experience->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Other Information') ?></th>
                    <td><?= $employee->has('other_information') ? $this->Html->link($employee->other_information->id, ['controller' => 'OtherInformations', 'action' => 'view', $employee->other_information->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Specialities Id') ?></th>
                    <td><?= $this->Number->format($employee->specialities_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($employee->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($employee->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($employee->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

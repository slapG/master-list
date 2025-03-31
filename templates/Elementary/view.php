<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementary $elementary
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Elementary'), ['action' => 'edit', $elementary->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Elementary'), ['action' => 'delete', $elementary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementary->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Elementary'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Elementary'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="elementary view content">
            <h3><?= h($elementary->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Elementary Name') ?></th>
                    <td><?= h($elementary->elementary_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Basic Education') ?></th>
                    <td><?= h($elementary->basic_education) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($elementary->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Period Of Attendance') ?></th>
                    <td><?= h($elementary->period_of_attendance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year Graduated') ?></th>
                    <td><?= h($elementary->year_graduated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($elementary->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($elementary->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Employees') ?></h4>
                <?php if (!empty($elementary->employees)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Middle Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Place Of Birth') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Sex') ?></th>
                            <th><?= __('Civil Status') ?></th>
                            <th><?= __('Height') ?></th>
                            <th><?= __('Weight') ?></th>
                            <th><?= __('Blood Type') ?></th>
                            <th><?= __('Gsis Number') ?></th>
                            <th><?= __('Pagibig Number') ?></th>
                            <th><?= __('Philhealth Number') ?></th>
                            <th><?= __('Sss Number') ?></th>
                            <th><?= __('Tin Number') ?></th>
                            <th><?= __('Agency Employee Number') ?></th>
                            <th><?= __('Citizenship') ?></th>
                            <th><?= __('Residential Address') ?></th>
                            <th><?= __('Permanent Address') ?></th>
                            <th><?= __('Telephone Number') ?></th>
                            <th><?= __('Mobile Number') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Family Background Id') ?></th>
                            <th><?= __('Elementary Id') ?></th>
                            <th><?= __('Secondary Id') ?></th>
                            <th><?= __('Vocational Id') ?></th>
                            <th><?= __('College Id') ?></th>
                            <th><?= __('Graduate Id') ?></th>
                            <th><?= __('Speciality Id') ?></th>
                            <th><?= __('Lnds Id') ?></th>
                            <th><?= __('Organizations Id') ?></th>
                            <th><?= __('Work Experiences Id') ?></th>
                            <th><?= __('Other Informations Id') ?></th>
                            <th><?= __('Departments Id') ?></th>
                            <th><?= __('Specialities Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($elementary->employees as $employees) : ?>
                        <tr>
                            <td><?= h($employees->id) ?></td>
                            <td><?= h($employees->first_name) ?></td>
                            <td><?= h($employees->middle_name) ?></td>
                            <td><?= h($employees->last_name) ?></td>
                            <td><?= h($employees->address) ?></td>
                            <td><?= h($employees->place_of_birth) ?></td>
                            <td><?= h($employees->date_of_birth) ?></td>
                            <td><?= h($employees->sex) ?></td>
                            <td><?= h($employees->civil_status) ?></td>
                            <td><?= h($employees->height) ?></td>
                            <td><?= h($employees->weight) ?></td>
                            <td><?= h($employees->blood_type) ?></td>
                            <td><?= h($employees->gsis_number) ?></td>
                            <td><?= h($employees->pagibig_number) ?></td>
                            <td><?= h($employees->philhealth_number) ?></td>
                            <td><?= h($employees->sss_number) ?></td>
                            <td><?= h($employees->tin_number) ?></td>
                            <td><?= h($employees->agency_employee_number) ?></td>
                            <td><?= h($employees->citizenship) ?></td>
                            <td><?= h($employees->residential_address) ?></td>
                            <td><?= h($employees->permanent_address) ?></td>
                            <td><?= h($employees->telephone_number) ?></td>
                            <td><?= h($employees->mobile_number) ?></td>
                            <td><?= h($employees->email) ?></td>
                            <td><?= h($employees->family_background_id) ?></td>
                            <td><?= h($employees->elementary_id) ?></td>
                            <td><?= h($employees->secondary_id) ?></td>
                            <td><?= h($employees->vocational_id) ?></td>
                            <td><?= h($employees->college_id) ?></td>
                            <td><?= h($employees->graduate_id) ?></td>
                            <td><?= h($employees->speciality_id) ?></td>
                            <td><?= h($employees->lnds_id) ?></td>
                            <td><?= h($employees->organizations_id) ?></td>
                            <td><?= h($employees->work_experiences_id) ?></td>
                            <td><?= h($employees->other_informations_id) ?></td>
                            <td><?= h($employees->departments_id) ?></td>
                            <td><?= h($employees->specialities_id) ?></td>
                            <td><?= h($employees->created) ?></td>
                            <td><?= h($employees->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

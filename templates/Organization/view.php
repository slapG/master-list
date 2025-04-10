<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization $organization
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Organization'), ['action' => 'edit', $organization->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Organization'), ['action' => 'delete', $organization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organization->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Organization'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Organization'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organization view content">
            <h3><?= h($organization->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name Of Organization') ?></th>
                    <td><?= h($organization->name_of_organization) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number Of Hours') ?></th>
                    <td><?= h($organization->number_of_hours) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($organization->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($organization->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exclusive From') ?></th>
                    <td><?= h($organization->exclusive_from) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exclusive To') ?></th>
                    <td><?= h($organization->exclusive_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($organization->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($organization->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Employees') ?></h4>
                <?php if (!empty($organization->employees)) : ?>
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
                            <th><?= __('Lnd Id') ?></th>
                            <th><?= __('Organization Id') ?></th>
                            <th><?= __('Work Experience Id') ?></th>
                            <th><?= __('Other Information Id') ?></th>
                            <th><?= __('Speciality Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($organization->employees as $employees) : ?>
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
                            <td><?= h($employees->lnd_id) ?></td>
                            <td><?= h($employees->organization_id) ?></td>
                            <td><?= h($employees->work_experience_id) ?></td>
                            <td><?= h($employees->other_information_id) ?></td>
                            <td><?= h($employees->speciality_id) ?></td>
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

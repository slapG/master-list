<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WorkExperience $workExperience
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Work Experience'), ['action' => 'edit', $workExperience->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Work Experience'), ['action' => 'delete', $workExperience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workExperience->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Work Experiences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Work Experience'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="workExperiences view content">
            <h3><?= h($workExperience->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('From') ?></th>
                    <td><?= h($workExperience->from) ?></td>
                </tr>
                <tr>
                    <th><?= __('To') ?></th>
                    <td><?= h($workExperience->to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($workExperience->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $workExperience->has('department') ? $this->Html->link($workExperience->department->id, ['controller' => 'Departments', 'action' => 'view', $workExperience->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Monthly Salary') ?></th>
                    <td><?= h($workExperience->monthly_salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salary Grade') ?></th>
                    <td><?= h($workExperience->salary_grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Of Appointment') ?></th>
                    <td><?= h($workExperience->status_of_appointment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Government Service') ?></th>
                    <td><?= h($workExperience->government_service) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($workExperience->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($workExperience->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($workExperience->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

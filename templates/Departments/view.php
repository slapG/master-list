<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Department'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departments view content">
            <h3><?= h($department->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= h($department->department) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($department->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($department->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($department->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Work Experiences') ?></h4>
                <?php if (!empty($department->work_experiences)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('From') ?></th>
                            <th><?= __('To') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Department Id') ?></th>
                            <th><?= __('Monthly Salary') ?></th>
                            <th><?= __('Salary Grade') ?></th>
                            <th><?= __('Status Of Appointment') ?></th>
                            <th><?= __('Government Service') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($department->work_experiences as $workExperiences) : ?>
                        <tr>
                            <td><?= h($workExperiences->id) ?></td>
                            <td><?= h($workExperiences->from) ?></td>
                            <td><?= h($workExperiences->to) ?></td>
                            <td><?= h($workExperiences->position) ?></td>
                            <td><?= h($workExperiences->department_id) ?></td>
                            <td><?= h($workExperiences->monthly_salary) ?></td>
                            <td><?= h($workExperiences->salary_grade) ?></td>
                            <td><?= h($workExperiences->status_of_appointment) ?></td>
                            <td><?= h($workExperiences->government_service) ?></td>
                            <td><?= h($workExperiences->created) ?></td>
                            <td><?= h($workExperiences->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'WorkExperiences', 'action' => 'view', $workExperiences->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'WorkExperiences', 'action' => 'edit', $workExperiences->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WorkExperiences', 'action' => 'delete', $workExperiences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workExperiences->id)]) ?>
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

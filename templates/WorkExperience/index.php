<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\WorkExperience> $workExperience
 */
?>
<div class="workExperience index content">
    <?= $this->Html->link(__('New Work Experience'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Work Experience') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('start_from') ?></th>
                    <th><?= $this->Paginator->sort('upto') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('department_id') ?></th>
                    <th><?= $this->Paginator->sort('monthly_salary') ?></th>
                    <th><?= $this->Paginator->sort('salary_grade') ?></th>
                    <th><?= $this->Paginator->sort('status_of_appointment') ?></th>
                    <th><?= $this->Paginator->sort('government_service') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($workExperience as $workExperience): ?>
                <tr>
                    <td><?= $this->Number->format($workExperience->id) ?></td>
                    <td><?= h($workExperience->start_from) ?></td>
                    <td><?= h($workExperience->upto) ?></td>
                    <td><?= h($workExperience->position) ?></td>
                    <td><?= $workExperience->has('department') ? $this->Html->link($workExperience->department->id, ['controller' => 'Departments', 'action' => 'view', $workExperience->department->id]) : '' ?></td>
                    <td><?= h($workExperience->monthly_salary) ?></td>
                    <td><?= h($workExperience->salary_grade) ?></td>
                    <td><?= h($workExperience->status_of_appointment) ?></td>
                    <td><?= h($workExperience->government_service) ?></td>
                    <td><?= h($workExperience->created) ?></td>
                    <td><?= h($workExperience->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $workExperience->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $workExperience->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $workExperience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workExperience->id)]) ?>
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

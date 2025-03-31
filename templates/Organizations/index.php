<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Organization> $organizations
 */
?>
<div class="organizations index content">
    <?= $this->Html->link(__('New Organization'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Organizations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name_of_organization') ?></th>
                    <th><?= $this->Paginator->sort('exclusive_from') ?></th>
                    <th><?= $this->Paginator->sort('exclusive_to') ?></th>
                    <th><?= $this->Paginator->sort('number_of_hours') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organizations as $organization): ?>
                <tr>
                    <td><?= $this->Number->format($organization->id) ?></td>
                    <td><?= h($organization->name_of_organization) ?></td>
                    <td><?= h($organization->exclusive_from) ?></td>
                    <td><?= h($organization->exclusive_to) ?></td>
                    <td><?= h($organization->number_of_hours) ?></td>
                    <td><?= h($organization->position) ?></td>
                    <td><?= h($organization->created) ?></td>
                    <td><?= h($organization->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $organization->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organization->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organization->id)]) ?>
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

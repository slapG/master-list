<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Elementary> $elementary
 */
?>
<div class="elementary index content">
    <?= $this->Html->link(__('New Elementary'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Elementary') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('elementary_name') ?></th>
                    <th><?= $this->Paginator->sort('basic_education') ?></th>
                    <th><?= $this->Paginator->sort('period_of_attendance') ?></th>
                    <th><?= $this->Paginator->sort('year_graduated') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($elementary as $elementary): ?>
                <tr>
                    <td><?= $this->Number->format($elementary->id) ?></td>
                    <td><?= h($elementary->elementary_name) ?></td>
                    <td><?= h($elementary->basic_education) ?></td>
                    <td><?= h($elementary->period_of_attendance) ?></td>
                    <td><?= h($elementary->year_graduated) ?></td>
                    <td><?= h($elementary->created) ?></td>
                    <td><?= h($elementary->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $elementary->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $elementary->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $elementary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementary->id)]) ?>
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

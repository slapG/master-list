<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Graduate> $graduate
 */
?>
<div class="graduate index content">
    <?= $this->Html->link(__('New Graduate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Graduate') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('graduate_name') ?></th>
                    <th><?= $this->Paginator->sort('basic_education') ?></th>
                    <th><?= $this->Paginator->sort('start_from') ?></th>
                    <th><?= $this->Paginator->sort('end_to') ?></th>
                    <th><?= $this->Paginator->sort('year_graduated') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($graduate as $graduate): ?>
                <tr>
                    <td><?= $this->Number->format($graduate->id) ?></td>
                    <td><?= h($graduate->graduate_name) ?></td>
                    <td><?= h($graduate->basic_education) ?></td>
                    <td><?= h($graduate->start_from) ?></td>
                    <td><?= h($graduate->end_to) ?></td>
                    <td><?= h($graduate->year_graduated) ?></td>
                    <td><?= h($graduate->created) ?></td>
                    <td><?= h($graduate->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $graduate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $graduate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $graduate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $graduate->id)]) ?>
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

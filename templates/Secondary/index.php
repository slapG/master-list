<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Secondary> $secondary
 */
?>
<div class="secondary index content">
    <?= $this->Html->link(__('New Secondary'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Secondary') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('secondary_name') ?></th>
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
                <?php foreach ($secondary as $secondary): ?>
                <tr>
                    <td><?= $this->Number->format($secondary->id) ?></td>
                    <td><?= h($secondary->secondary_name) ?></td>
                    <td><?= h($secondary->basic_education) ?></td>
                    <td><?= h($secondary->start_from) ?></td>
                    <td><?= h($secondary->end_to) ?></td>
                    <td><?= h($secondary->year_graduated) ?></td>
                    <td><?= h($secondary->created) ?></td>
                    <td><?= h($secondary->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $secondary->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $secondary->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $secondary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secondary->id)]) ?>
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

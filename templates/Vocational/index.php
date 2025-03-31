<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vocational> $vocational
 */
?>
<div class="vocational index content">
    <?= $this->Html->link(__('New Vocational'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vocational') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('vocational_name') ?></th>
                    <th><?= $this->Paginator->sort('basic_education') ?></th>
                    <th><?= $this->Paginator->sort('from') ?></th>
                    <th><?= $this->Paginator->sort('to') ?></th>
                    <th><?= $this->Paginator->sort('year_graduated') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vocational as $vocational): ?>
                <tr>
                    <td><?= $this->Number->format($vocational->id) ?></td>
                    <td><?= h($vocational->vocational_name) ?></td>
                    <td><?= h($vocational->basic_education) ?></td>
                    <td><?= h($vocational->from) ?></td>
                    <td><?= h($vocational->to) ?></td>
                    <td><?= h($vocational->year_graduated) ?></td>
                    <td><?= h($vocational->created) ?></td>
                    <td><?= h($vocational->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vocational->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vocational->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vocational->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vocational->id)]) ?>
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

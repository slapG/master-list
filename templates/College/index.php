<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\College> $college
 */
?>
<div class="college index content">
    <?= $this->Html->link(__('New College'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('College') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('college_name') ?></th>
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
                <?php foreach ($college as $college): ?>
                <tr>
                    <td><?= $this->Number->format($college->id) ?></td>
                    <td><?= h($college->college_name) ?></td>
                    <td><?= h($college->basic_education) ?></td>
                    <td><?= h($college->from) ?></td>
                    <td><?= h($college->to) ?></td>
                    <td><?= h($college->year_graduated) ?></td>
                    <td><?= h($college->created) ?></td>
                    <td><?= h($college->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $college->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $college->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $college->id], ['confirm' => __('Are you sure you want to delete # {0}?', $college->id)]) ?>
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

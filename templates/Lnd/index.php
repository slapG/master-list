<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lnd> $lnd
 */
?>
<div class="lnd index content">
    <?= $this->Html->link(__('New Lnd'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lnd') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lnd as $lnd): ?>
                <tr>
                    <td><?= $this->Number->format($lnd->id) ?></td>
                    <td><?= h($lnd->created) ?></td>
                    <td><?= h($lnd->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lnd->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lnd->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lnd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lnd->id)]) ?>
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

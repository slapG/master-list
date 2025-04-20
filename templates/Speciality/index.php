<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Speciality> $speciality
 */
?>
<div class="speciality index content">
    <?= $this->Html->link(__('New Speciality'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Speciality') ?></h3>
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
                <?php foreach ($speciality as $speciality): ?>
                <tr>
                    <td><?= $this->Number->format($speciality->id) ?></td>
                    <td><?= h($speciality->created) ?></td>
                    <td><?= h($speciality->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $speciality->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $speciality->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $speciality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $speciality->id)]) ?>
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

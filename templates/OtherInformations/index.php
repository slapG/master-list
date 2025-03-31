<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\OtherInformation> $otherInformations
 */
?>
<div class="otherInformations index content">
    <?= $this->Html->link(__('New Other Information'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Other Informations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($otherInformations as $otherInformation): ?>
                <tr>
                    <td><?= $this->Number->format($otherInformation->id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $otherInformation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $otherInformation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $otherInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otherInformation->id)]) ?>
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

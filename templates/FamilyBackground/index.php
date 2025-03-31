<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\FamilyBackground> $familyBackground
 */
?>
<div class="familyBackground index content">
    <?= $this->Html->link(__('New Family Background'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Family Background') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('family_background') ?></th>
                    <th><?= $this->Paginator->sort('spouse_name') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('middle_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('occupation') ?></th>
                    <th><?= $this->Paginator->sort('employer_business_name') ?></th>
                    <th><?= $this->Paginator->sort('business_address') ?></th>
                    <th><?= $this->Paginator->sort('telephone_number') ?></th>
                    <th><?= $this->Paginator->sort('father_surname') ?></th>
                    <th><?= $this->Paginator->sort('father_first_name') ?></th>
                    <th><?= $this->Paginator->sort('father_middle_name') ?></th>
                    <th><?= $this->Paginator->sort('mother_maiden_name') ?></th>
                    <th><?= $this->Paginator->sort('mother_first_name') ?></th>
                    <th><?= $this->Paginator->sort('mother_middle_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($familyBackground as $familyBackground): ?>
                <tr>
                    <td><?= $this->Number->format($familyBackground->id) ?></td>
                    <td><?= h($familyBackground->family_background) ?></td>
                    <td><?= h($familyBackground->spouse_name) ?></td>
                    <td><?= h($familyBackground->first_name) ?></td>
                    <td><?= h($familyBackground->middle_name) ?></td>
                    <td><?= h($familyBackground->last_name) ?></td>
                    <td><?= h($familyBackground->occupation) ?></td>
                    <td><?= h($familyBackground->employer_business_name) ?></td>
                    <td><?= h($familyBackground->business_address) ?></td>
                    <td><?= h($familyBackground->telephone_number) ?></td>
                    <td><?= h($familyBackground->father_surname) ?></td>
                    <td><?= h($familyBackground->father_first_name) ?></td>
                    <td><?= h($familyBackground->father_middle_name) ?></td>
                    <td><?= h($familyBackground->mother_maiden_name) ?></td>
                    <td><?= h($familyBackground->mother_first_name) ?></td>
                    <td><?= h($familyBackground->mother_middle_name) ?></td>
                    <td><?= h($familyBackground->created) ?></td>
                    <td><?= h($familyBackground->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $familyBackground->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $familyBackground->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $familyBackground->id], ['confirm' => __('Are you sure you want to delete # {0}?', $familyBackground->id)]) ?>
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

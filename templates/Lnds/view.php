<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lnd $lnd
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lnd'), ['action' => 'edit', $lnd->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lnd'), ['action' => 'delete', $lnd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lnd->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lnds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lnd'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lnds view content">
            <h3><?= h($lnd->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Training Program') ?></th>
                    <td><?= h($lnd->training_program) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number Of Hours') ?></th>
                    <td><?= h($lnd->number_of_hours) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($lnd->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conducted By') ?></th>
                    <td><?= h($lnd->conducted_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lnd->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exclusive From') ?></th>
                    <td><?= h($lnd->exclusive_from) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exclusive To') ?></th>
                    <td><?= h($lnd->exclusive_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lnd->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lnd->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

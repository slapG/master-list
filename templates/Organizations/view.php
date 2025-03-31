<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization $organization
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Organization'), ['action' => 'edit', $organization->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Organization'), ['action' => 'delete', $organization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organization->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Organizations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Organization'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organizations view content">
            <h3><?= h($organization->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name Of Organization') ?></th>
                    <td><?= h($organization->name_of_organization) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number Of Hours') ?></th>
                    <td><?= h($organization->number_of_hours) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($organization->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($organization->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exclusive From') ?></th>
                    <td><?= h($organization->exclusive_from) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exclusive To') ?></th>
                    <td><?= h($organization->exclusive_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($organization->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($organization->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

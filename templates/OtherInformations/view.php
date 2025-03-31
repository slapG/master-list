<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OtherInformation $otherInformation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Other Information'), ['action' => 'edit', $otherInformation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Other Information'), ['action' => 'delete', $otherInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otherInformation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Other Informations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Other Information'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="otherInformations view content">
            <h3><?= h($otherInformation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($otherInformation->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Special Skill') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($otherInformation->special_skill)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Non Academic Distinction') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($otherInformation->non_academic_distinction)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Membership') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($otherInformation->membership)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import Departments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= $this->Form->create(null, ['type' => 'file', 'id' => 'importForm']) ?>
                    <?= $this->Form->control('excel_file', ['type' => 'file', 'label' => 'Upload Excel (.xlsx)', 'required' => true]) ?>
                <?= $this->Form->end() ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="submitImport" onclick="submitImport">Import</button>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', ['block' => true]) ?>
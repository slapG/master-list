<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0 shadow-lg rounded-lg" style="overflow: hidden;">
            <div class="modal-header text-white" style="background: linear-gradient(45deg,rgb(79, 213, 110),rgb(22, 112, 42)); border-top-left-radius: 0.3rem; border-top-right-radius: 0.3rem;">
                <h5 class="modal-title" id="importModalLabel"><i class="fas fa-user-plus mr-2"></i>Add New Department</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" style="opacity: 0.8; transition: opacity 0.3s;">
                    <span aria-hidden="true" style="font-size: 1.5rem;">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #f8f9fa; padding: 2rem;">
                <?= $this->Form->create(null, ['id' => 'addDepartmentForm']) ?> 
                <div class="form-group row">
                    <?= $this->Form->label('department', 'Department', ['class' => 'col-sm-3 col-form-label text-right font-weight-bold']) ?>
                    <div class="col-sm-7">
                        <?= $this->Form->control('department', [
                            'type' => 'text', 
                            'name' => 'department',
                            'label' => false,
                            'class' => 'form-control border rounded-pill',
                            'placeholder' => 'Enter department',
                            'style' => 'transition: box-shadow 0.3s;'
                        ]) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
            <div class="modal-footer" style="background-color: #e9ecef; border-bottom-left-radius: 0.3rem; border-bottom-right-radius: 0.3rem;">
                <button type="button" class="btn btn-outline-secondary rounded-pill" data-dismiss="modal" style="transition: background-color 0.3s;">
                    <i class="fas fa-times mr-1"></i> Close
                </button>
                <button type="button" class="btn btn-success rounded-pill" id="submitAdd" onclick="submitAdd()" style="transition: background-color 0.3s;">
                    <i class="fas fa-plus-circle mr-1"></i> Add Department
                </button>
            </div>
        </div>
    </div>
</div>

<?= $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', ['block' => true]) ?>

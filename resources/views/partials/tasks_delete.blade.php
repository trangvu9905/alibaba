<!-- Delete Task Modal Form HTML -->
<div class="modal fade" id="deleteTaskModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmDeleteTask">
                <div class="modal-header">
                    <h4 class="modal-title" id="delete-title" name="title">
                        Delete Task
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                       
                    </p>
                    <p class="text-warning">
                       Bạn có muốn xóa học viên 
                    </p>
                </div>
                <div class="modal-footer">
                    <input id="task_id" name="task_id" type="hidden" value="0">
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Thoát">
                            <button class="btn btn-danger" id="btn-delete" type="button">
                               Xóa học viên
                            </button>
                        </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
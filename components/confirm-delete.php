<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure, this task is to be deleted?</p>
                <p id="task"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form action="/todo.php" method="post">
                    <button type="submit" name="deleted" value="deleted" class="btn btn-danger">Delete</button>
                    <input 
                        type="hidden" 
                        name="id" 
                        id="id"
                    >
                </form>
            </div>
        </div>
    </div>
</div>
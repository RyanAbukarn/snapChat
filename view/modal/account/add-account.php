<div class="modal fade" id="add-account-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="first-name" class="col-form-label">First name</label>
                        <input autocomplete="off" type="text" class="form-control" id="first-name">
                    </div>
                    <div class="form-group">
                        <label for="last-name" class="col-form-label">Last name</label>
                        <input autocomplete="off" type="text" class="form-control" id="last-name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input autocomplete="off" type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="admin">
                            <label class="form-check-label" for="admin">
                                Admin
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="add-account-btn" class="btn btn-success" type="Book appointment"><i class="fa fa-plus"></i></button>
            </div>
        </div>
    </div>
</div>
</div>
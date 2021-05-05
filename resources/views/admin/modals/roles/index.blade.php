

<!-- Modal -->
<div class="modal fade" id="role-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div style="max-width: 70%;" class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('roles/store')}}">

                    @csrf

                    <div class="row">

                        <div class="form-group col-md-12">

                            <label for="name">Role</label>

                            <input type="text" name="role_name" class="form-control">

                        </div>

                        <div class="form-group col-md-12">
                            <label>Assign permissions</label>
                            <div class="row">

                                    <div class="col-md-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" aria-label="Checkbox for following text input" name="permission_name[]" value="Admin">
                                            <label>Admin</label>

                                        </div>
                                    </div>

                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" aria-label="Checkbox for following text input" name="permission_name[]" value="Admin">
                                        <label>User</label>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" aria-label="Checkbox for following text input" name="permission_name[]" value="Admin">
                                        <label>IT Officer</label>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" aria-label="Checkbox for following text input" name="permission_name[]" value="Admin">
                                        <label>Sales Manager</label>

                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="d-flex justify-content-between col-md-12">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

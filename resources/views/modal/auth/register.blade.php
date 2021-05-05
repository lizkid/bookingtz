

<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div style="max-width: 50%;" class="modal-dialog" role="document">
        <div style="" class="modal-content">
            <div class="modal-header">

                <div id="web-name">
                    <div>
                        <p>B</p>
                        <p>O</p>
                        <p>O</p>
                        <p>K</p>
                        <p>I</p>
                        <p>N</p>
                        <p>G</p>
                        <p>-</p>
                        <p>T</p>
                        <p>Z</p>
                    </div>
                </div>

                <button id="auth-close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div style="width: 70%; display: block; margin: auto;" class="modal-body">

                <form  >

                    <div class="row">

                        <div id="form-group" class="col-md-12">
                            <label id="label">First Name</label><span id="star">*</span>
                            <input id="register_fname" class="form-control mb-3" type="text" name="register_fname">
                        </div>

                        <div id="form-group"  class="col-md-12">
                            <label id="label">Last Name</label><span id="star">*</span>
                            <input id="register_lname" class="form-control mb-3" type="text" name="register_lname">
                        </div>

                        <div id="form-group" class="col-md-12">
                            <label id="label">Email</label><span id="star">*</span>
                            <input id="register_email" class="form-control mb-3" type="email" name="register_email">
                        </div>

                        <div id="form-group" class="col-md-12">
                            <label id="label">Password</label><span id="star">*</span>
                            <input id="register_password" class="form-control mb-3" type="password" name="register_password">
                        </div>

                        <div class="col-md-12">
                            <button id="register-btn" type="submit" class="btn btn-info  btn-block">Register</button>
                        </div>



                    </div>

                </form>

                <div class="mt-3">
                    <p style="width: 100%;text-align: center;border-bottom: 1px solid #a99c9c;line-height: 0.1em;margin: 20px 0 20px;">
                        <span style="background:#fff;padding:0 10px; color: #212529; ">or continue with</span>
                    </p>
                </div>

                <div style="color: #212529;" class="d-flex justify-content-between">
                    <a class="btn btn-light">Facebook</a>
                    <a class="btn btn-light">Google</a>
                </div>

                <div id="have-acc" class="d-flex justify-content-between">
                    <p style="color: #212529;">Already have an account?</p>
                    <a href="#">Login</a>
                </div>

            </div>
        </div>
    </div>
</div>

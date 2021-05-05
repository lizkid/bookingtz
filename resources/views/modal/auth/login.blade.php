

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                <form>

                    <div class="row">

                        <div id="form-group" class="col-md-12">
                            <label id="label">Email</label><span id="star">*</span>
                            <input id="login-email" class="form-control mb-3" type="login-email" name="email">
                        </div>

                        <div id="form-group" class="col-md-12">
                            <label id="label">Password</label><span id="star">*</span>
                            <input id="login-password" class="form-control mb-3" type="login-password" name="password">
                        </div>

                        <div class="col-md-12">
                            <a id="forgot"  href="#">Forgot password?</a>
                        </div>

                        <div class="col-md-12">
                            <button id="login-btn" type="submit" class="btn btn-info  btn-block">Login</button>
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

                <div id="no-acc" class="d-flex justify-content-between">
                    <p style="color: #212529;">No account yet?</p>
                    <a href="#">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>

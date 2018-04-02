    <form action="http://laraspace.dev/login" id="loginForm" method="post">
        <input type="hidden" name="_token" value="ju0AJjtVlV2LnL9lhkK9fOpg7DhuaMFVgR1mifUv">
        <div class="form-group">
            <input type="email" class="form-control form-control-danger" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-danger" placeholder="Enter Password"
                   name="password">
        </div>
        <div class="other-actions row">
            <div class="col-6">
                <div class="checkbox">
                    <label class="c-input c-checkbox">
                        <input type="checkbox" name="remember">
                        <span class="c-indicator"></span>
                        Remember Me
                    </label>
                </div>
            </div>
            <div class="col-6 text-right">
                <a href="/user/forgot_password" class="forgot-link">Forgot Password?</a>
            </div>
        </div>
        <button class="btn btn-theme btn-full">Login</button>
        <div class="form-group other-options">
            <div class="social-caption pull-left">
                <h6>
                    Or Login With
                </h6>
            </div>
            <div class="social-icons pull-right">
                <a href="/auth/facebook.html" class="btn btn-default text-primary btn-icon"><i
                            class="icon-fa icon-fa-facebook"></i></a>
                <a href="/auth/google.html" class="btn btn-default text-danger btn-icon"><i
                            class="icon-fa icon-fa-google"></i></a>
                <a href="/auth/github.html" class="btn btn-default btn-icon text-default"><i
                            class="icon-fa icon-fa-github"></i></a>
            </div>
        </div>
    </form>

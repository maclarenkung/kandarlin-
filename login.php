<?php require_once('./inc/inc_meta.php')?>

<body>
    <?php  require_once('./inc/inc_header.php')?>
    <div class="wrapper">
        <button class="click-login">click login</button>
        <button class="click-register">click register</button>
        
        <div class="sec-login fade">
            <div class="block-overlay" style="display:none;"></div>
            <div class="container">
                <a class="btn-close" href="javascript:void(0);">X</a>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-5">
                        <div class="group-content text-center">
                            <h1>LOGO</h1>
                        </div>
                        <div class="block-login">
                            <div class="group-content text-center">
                                <h4>Sign in</h4>
                            </div>
                            <form>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email or username">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="group-content text-center">
                                    <button type="submit " class="btn btn-primary">Sign up</button>
                                </div>
                                <div class="group-content text-center">
                                    <p><a class="click-to-register" href="javascript:void(0);">Sign up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="sec-register fade">
            <div class="block-overlay" style="display:none;"></div>
            <div class="container">
                <a class="btn-close" href="javascript:void(0);">X</a>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-5">
                        <div class="group-content text-center">
                            <h1>LOGO</h1>
                        </div>
                        <div class="block-register">
                            <div class="group-content text-center">
                                <h4>Create You Account</h4>
                            </div>
                            <form>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email Address">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Confirm Password">
                                </div>
                                <div class="group-content text-center">
                                    <button type="submit " class="btn btn-primary">Sign in</button>
                                </div>
                                <div class="form-check text-center">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree with the terms &
                                        conditions</label>
                                </div>
                                <div class="group-content text-center">
                                    <p>Already a member? <a class="click-to-login" href="javascript:void(0);">Sign in</a></p>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('./inc/inc_footer.php')?>
    <?php require_once('./inc/inc_script.php')?>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>

</html>
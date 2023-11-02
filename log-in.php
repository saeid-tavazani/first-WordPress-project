    <?php // Template Name: log-in
    ?>
    <?php wp_head(); ?>

    <?php get_template_part('inc/loader'); ?>



    <div id="log-reg">
        <div id="log-reg-div">


            <div class="text-center">
                <img src="img/logo mahway.ir.png" alt="">
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn-r" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                بازیابی رمز عبور
            </button>
            <span>/</span>
            <a href="Register.html">
                ثبت نام
            </a>

            <!-- Modal -->
            <div class="modal fade modal-r" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">بازیابی رمز عبور</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">

                <a href="#" class="btn btn-primary mb-3">ورود</a>
            </div>


        </div>
    </div>




    <?php get_footer(); ?>
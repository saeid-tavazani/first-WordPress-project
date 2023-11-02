    <?php // Template Name: Register
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
        <div class="form-floating mt-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <a href="Register.html">
          ورود
        </a>
        <div class="text-center mt-4">

          <a href="#" class="btn btn-primary mb-3">ثبت نام</a>
        </div>


      </div>
    </div>

    <?php wp_footer(); ?>
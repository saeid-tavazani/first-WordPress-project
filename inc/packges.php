<div class="container mt-4 px-5">
    <div class="row text-center justify-content-center pb-3">
        <?php $packges_title = get_theme_mod("packges_title", false); ?>
        <?php if ($packges_title != "") ?>
        <h2> <?php echo $packges_title ?></h2>
        <?php $packges = get_theme_mod('packges', false); ?>
        <?php if ($packges != null) :
            foreach ($packges as $service) :
                if ($service["title"] != "") :
                    echo '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-3 pd">';
                    echo '<div class="card-packges">';
                    echo  '<div><img src="' . $service["image"] . '" alt="' . $service["title"] . '" class="card-img-top"></div>';
                    echo  '<div class="card-body">';
                    echo  '<h5 class="card-title">' . $service["title"] . '</h5>';
                    echo  '<p class="card-text">';
                    echo $service["desc"];
                    echo  '</p></div></div></div>';
                endif;
            endforeach;
        endif;
        ?>
    </div>
</div>
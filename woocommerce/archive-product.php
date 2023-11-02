<?php get_header(); ?>
<div class="container box-filter" id="dp">
	<button class="btn btn-primary mx-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
		filter
	</button>


	<form class="filter-form m-0" id="searches" method="get" action="<?php bloginfo('url'); ?>">
		<fieldset>
			<select name="product_cat" id="cat" class="postform">
				<option value=''>تمام دسته ها</option>
				<?php $product_categories = get_terms('product_cat', $args);
				foreach ($product_categories as $cat) {
					echo '<option value="' . $cat->slug . '">' . $cat->name . '</option>';
				} ?>
			</select>
			<div class="div-serch">
				<input id="lsds" type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr_x('نام محصول مورد نظر ...', 'placeholder', 'woocommerce'); ?>" maxlength="50" required="required" />
				<input type="hidden" name="post_type" value="product" />
				<input class="searchsubmit" id="searchsubmit" type="submit" value="بگرد" />
			</div>
		</fieldset>
	</form>
	<div class="slect-prod mx-1 filter-form m-0">
		<?php do_action('woocommerce_before_shop_loop'); ?>
	</div>
	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasExampleLabel">filter</h5>
			<button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<?php get_product_search_form() ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php if (have_posts()) { ?>
			<?php while (have_posts()) {
				the_post(); ?>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" id="col-box">
					<div class="card-catg">
						<?php if (has_post_thumbnail()) { ?>
							<img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
						<?php } ?>
						<div class="card-body-catg">
							<h3><?php the_title(); ?></h3>
							<p class="card-text-catg">
								<?php echo get_the_excerpt(); ?>
							</p>
							<span>قیمت : <?php woocommerce_template_loop_price() ?> </span>
						</div>
						<div class="text-center p-2" id="sta-by">
							<a href="<?php the_permalink(); ?>" class="">start</a>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
		<div class="text-center m-5" id="nex-bac">
			<?php echo paginate_links(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
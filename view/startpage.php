<?php
/**
 * @file
 * Example view file
 */

/** @var WGR_ExamplePageModel $pageModel */
/** @var WGR_ExamplePageView $this */

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= $pageModel->pageTitle ?></title>

		<link rel="stylesheet" href="/css/style.css">
	</head>
	<body>
		<div class="l-header">
			<div class="l-constrained">
				<div class="header-logo">
					<img src="/images/logo.png">
				</div>
				<ul class="nav site-nav">
					<?php

					if ($pageModel->categories) {
						// Loop names of categories
						foreach ($pageModel->categories as $category) {
							?>
							<li>
								<a href="#" title="<?= $category->name ?>"><?= $category->name ?></a>
							</li>
							<?php
						}
					}

					?>
				</ul>
				<div>
					<input class="js-search-input" type="search" placeholder="Sök produkter">
				</div>
			</div>
		</div>
		<div class="startpage-hero">
			<!-- Hero image -->
		</div>
		<div class="startpage-banner">
			<div class="l-constrained">
				<h1><?= $pageModel->pageTitle ?></h1>
				<?= $pageModel->pageDesc ?>
			</div>
		</div>

		<div class="l-constrained">
			<?php

			if ($pageModel->products) {
				?>
				<h2>Nyheter</h2>
				<ul class="product-gallery">
					<?php

					// Loop names of products
					foreach ($pageModel->products as $product) {
						?>
						<li data-title="<?= $product->name ?>" class="product-item js-product is-visible">
							<div class="product-item__img">
								<img src="/images/products/<?= $product->imageFileName ?>">
							</div>
							<h3 class="product-item__title"><?= $product->name ?></h3>
							<div class="product-item__body">	
								<span class="product-item__price"><?= $product->price ?></span>
								<div class="product-item__buttons">
									<a href="#" class="btn">Info</a>
									<a href="#" class="btn btn--primary">Köp</a>
								</div>
							</div>
						</li>
						<?php
					}

					?>
				</ul>
				<?php

			}

			?>
		</div>

		<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script>
		WGR.example();
		</script>
	</body>
</html>

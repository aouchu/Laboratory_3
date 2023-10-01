<div class="row tm-gallery">
                <?php foreach($category as $cat): ?>
                    <?php if(isset($cate)): ?>
                    <?php if($cat['category'] == $cate): ?>
                        <div class="tm-gallery-page">
                            <?php foreach($products as $prod): ?>
                            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <figure>
                                    <img src="<?= $prod['image']; ?>" alt="Image" class="img-fluid tm-gallery-img" />
                                    <figcaption>
                                    <h4 class="tm-gallery-title"><?= $prod['name']; ?></h4>
                                    </hr>
                                    <p style='margin:0 'class="tm-gallery-price">PHP <?= $prod['price']; ?></p>
                                    <a href='/view/<?= $prod['id']; ?>'><button id="prod-open" type='Button'>View</button></a>
                                    </figcaption>
                                </figure>
                            </article>
                            <?php endforeach; ?>
                        </div>
                    <?php endif;?>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php if(!isset($cate) && !isset($ProdID)): ?>
                <div class="tm-gallery-page">
                            <?php foreach($products as $prod): ?>
                            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <figure>
                                    <img src="<?= $prod['image']; ?>" alt="Image" class="img-fluid tm-gallery-img" />
                                    <figcaption>
                                    <h4 class="tm-gallery-title"><?= $prod['name']; ?></h4>
                                    </hr>
                                    <p style='margin:0 'class="tm-gallery-price">PHP <?= $prod['price']; ?></p>
                                    <a href='/view/<?= $prod['id']; ?>'><button id="prod-open" type='Button'>View</button></a>
                                    </figcaption>
                                </figure>
                            </article>
                            <?php endforeach; ?>
                        </div>
                <?php endif; ?>
			</div>

        <?php if(isset($ProdID)): ?>
            <hr>
            <div>
                <?php foreach($vprod as $pr): ?>
                    <div class="flex">
                        <!-- Products' header -->
                        <h4 style="margin-left:5vh !important;font-size:8vh !important;" class="tm-gallery-title"><?= $pr['name']; ?></h4>
                        <!-- end -->
                    </div>
            <hr>
                <!-- Product Info -->
                    <div style='display:flex'>

                        <div style='width:30%;height:30%'>
                            <img src="<?= $pr['image']; ?>" alt="Image" class="img-fluid tm-gallery-img" />
                        </div>

                        <div style='width:50%'>
                            <pclass="tm-gallery-description"><?= $pr['description']; ?></p>
                        </div>
                    </div>
                    <div>
                        <p class="tm-gallery-price" style='margin-right:5vh;margin-bottom:0;text-align:right;font-size:5vh'>PHP <?= $pr['price']; ?></p>
                        <p style='text-align:right;margin-right:5vh;'>Qty <?= $pr['quantity']; ?></p>
                    </div>
                <!-- end -->
            <?php endforeach; ?>
            </div>
            <hr>
        <?php endif; ?>

			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="/img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Maecenas nulla neque</h4>
							<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
							<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>
<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
				<p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<?php $first = true; foreach($category as $cat): ?>
							<?php if($first): ?>
								<li class="tm-paging-item"><a href="/category/<?= $cat['category']; ?>" class="tm-paging-link active"><?= $cat['category']; ?></a></li>
								<?php $first = false; ?>
							<?php else: ?>
								<li class="tm-paging-item"><a href="/category/<?= $cat['category']; ?>" class="tm-paging-link"><?= $cat['category'];?></a></li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
				</nav>
			</div>
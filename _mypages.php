	<main role="main" class="main">
		<section class="sect_1 hero banner">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li><a href="/">Главная /</a></li>
						<li class="active"><?=$seo['menu']?></li>
					</ul>
				</div>
				<h1><?=$seo['h1']?></h1>
			</div>
		</section>
		<div class="pages-wrap">
			<div class="container">
				<div class="post-holder sect_3">
					<div class="holder">
						<div class="flex-wrapper">
							<div class="article">
								<div class="flex-wrapper product">
									<?php
									$pic = '';
									$pics = explode('|', $seo['logo']);
									if(is_array($pics) && count($pics)>0)
										foreach($pics AS $picc)
											if(strlen($picc)>0 && $pic == '')
												$pic = $picc;
									if($pic != ''){
										?>
									<div class="post_images">
										<div class="item" data-src="/<?=$pic?>">
											<img src="/<?=$pic?>" alt="Гражданский противогаз ГП-7ВМ-С">
										</div>
									</div>
										<?php
									}
									?>
									<div class="post_detail"></div>
								</div>
								<div class="item_inner_description"><?=$seo['text']?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
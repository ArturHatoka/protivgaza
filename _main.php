	<main role="main" class="main">
		<section class="sect_1 hero">
			<div class="hero_slider">
				<div class="owl-hero owl-carousel">
					<? include('_slider_on_main.php'); ?>
				</div>
			</div>
		</section>
		<section class="sect_2 catalog lined">
			<div class="container">
				<h2 style="text-align:center">Каталог</h2>
				<div class="flex-wrapper">
					<?
					$cats = mysql_query("SELECT ".MySQLprefix."_urls.url, ".MySQLprefix."_categories.logo, ".MySQLprefix."_categories.name FROM ".MySQLprefix."_categories, ".MySQLprefix."_urls WHERE ".MySQLprefix."_categories.p_id=0 AND ".MySQLprefix."_categories.id=".MySQLprefix."_urls.target_id AND ".MySQLprefix."_urls.target_type='categories' ORDER BY ".MySQLprefix."_categories.sort_id ASC");
					if($cats && mysql_num_rows($cats)>0)
						while($cat = mysql_fetch_assoc($cats)){
							?>
					<div class="s2_item">
						<a href="/<?=$cat['url']?>/">
							<span class="table-wrapper">
								<span class="cell-wrapper">
									<span class="img">
										<img class="svg" src="/<?=str_replace('|','',$cat['logo'])?>" alt="" />
									</span>
									<span class="title"><?=$cat['name']?></span>
									<span class="link">
										<img class="svg" src="/assets/app/img/svg/right-arrow.svg" alt="" />
									</span>
								</span>
							</span>
						</a>
					</div>
							<?
						}
					?>
				</div>
			</div>
		</section>
		<section class="sect_4 lined">
			<div class="container">
				<h2 style="text-align:center">Преимущества работы с нами</h2>
				<div class="flex-wrapper">
					<?=$additional[57]?>
				</div>
			</div>
		</section>
		<section class="sect_3 review lined">
			<div class="container">
				<h2 style="text-align:center">Сертификаты</h2>
				<div class="owl-carousel owl_reviews">
					<?
					$img_ = mysql_query("SELECT * FROM ".MySQLprefix."_photogal WHERE p_id=29 ORDER BY sort_id ASC");
					if($img_ && mysql_num_rows($img_)>0)
						while($img = mysql_fetch_assoc($img_)){
							?>
					<div class="item" data-src="/<?=$img['logo']?>"><img src="/<?=str_replace(".","_small.",$img['logo'])?>" alt="<?=$img['name']?>" /></div>
							<?
						}
					?>
				</div>
			</div>
		</section>
		<section class="sect_6 about2 lined">
			<div class="container">
				<h1 style="text-align:center"><?=$seo["h1"]?></h1>
				<?=$seo["text"]?>
			</div>
		</section>
	</main>
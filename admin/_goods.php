	<main role="main" class="main">
		<?
		$tree = '<li class="active">'.$seo['name'].'</li>';
		$tree_cat_ar[] = $seo['id'];
		$cat_ids = explode("|", substr($seo['cat_ids'],1,strlen($seo['cat_ids'])-2));
		$parent = $cat_ids[0];
		while($parent!=0){
			if(isset($par_data))
				unset($par_data);
			$par_r = mysql_query("SELECT ".MySQLprefix."_urls.url, ".MySQLprefix."_categories.id, ".MySQLprefix."_categories.name, ".MySQLprefix."_categories.p_id FROM ".MySQLprefix."_categories, ".MySQLprefix."_urls WHERE ".MySQLprefix."_categories.id=".$parent." AND ".MySQLprefix."_urls.target_type='categories' AND ".MySQLprefix."_urls.target_id=".MySQLprefix."_categories.id LIMIT 0, 1");
			if($par_r)
				if(mysql_num_rows($par_r)==1)
					$par_data = mysql_fetch_assoc($par_r);
			$tree = '<li><a href="'.$cur_city[0].'/'.$par_data['url'].'/">'.$par_data['name'].' /</a></li>'.$tree;
			$tree_cat_ar[] = $par_data['id'];
			$parent = $par_data['p_id'];
		}
		?>
		<section class="sect_1 hero banner">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li><a href="/">Главная /</a></li>
						<li><a href="<?=$cur_city[0]?>/<?=$katalog_a['url']?>/"><?=$katalog_a['menu']?>/</a></li>
						<?=$tree?>
					</ul>
				</div>
				<h1><?=$seo['h1']?></h1>
			</div>
		</section>
		<div class="pages-wrap">
			<div class="container">
				<div class="post-holder">
					<div class="holder">
						<div class="flex-wrapper">
							<? include('_left.php'); ?>
							<div class="catalog">
								<h2><?=$seo['h1']?></h2>
								<div class="flex-wrapper product">
									<?
									$good_pics = explode('|', $seo['logo']);
									if(is_array($good_pics) && count($good_pics)>0){
										for($gp=0; $gp<count($good_pics); $gp++)
											if(strlen($good_pics[$gp])==0)
												unset($good_pics[$gp]);
										$good_pic = array_values($good_pics);
									}
									?>
									<div class="post_images">
										<div class="item" data-src="/<?=$good_pic[0]?>">
											<img src="/<?=str_replace(".","_small.",$good_pic[0])?>" alt="<?=$seo['name']?>" />
										</div>
									</div>
									<div class="post_detail">
										<?=$seo['mods']?>
										<div class="price">
											<div class="flex-wrapper">
												<a data-toggle="modal" data-target="#modal-call" class="red_btn w-rel" data-id="<?=$seo['id']?>" data-name="<?=$seo['name']?>">Заказать</a>
											</div>
										</div>                                        
									</div>
								</div>
								<div class="product-description">
									<div class="tab_container">
										<div id="description" class="tab_content">
											<?=$seo['desc_full']?>
										</div>
									</div>
									<?
									$result = mysql_query("SELECT logo, id, name FROM ".MySQLprefix."_goods WHERE status=1 AND cat_ids LIKE '%|".$cat_ids[0]."|%' AND id!='".$seo['id']."' GROUP BY RAND() LIMIT 0, 3");
									if($result && mysql_num_rows($result)>0){
										?>
									<h2>Похожие товары</h2>
									<ul class="catalog-list">
										<?
										while($good = mysql_fetch_assoc($result)){
											$pic = 'admin/uploads/nophoto.png';
											$pics = explode('|', $good['logo']);
											if(is_array($pics) && count($pics)>0)
												foreach($pics AS $picc)
													if(strlen($picc)>0 && $pic == 'admin/uploads/nophoto.png')
														$pic = $picc;
											?>
										<li>
											<a href="/goods/<?=$good['id']?>/">
												<div class="wrap">
													<div class="images">
														<img src="/<?=str_replace(".","_small.",$pic)?>" alt="<?=$good['name']?>" />
													</div>
													<div class="title">
														<h4><?=$good['name']?></h4>
													</div>
													<div rel="<?=$good['id']?>" class="red_btn">Купить</div>
												</div>
											</a>
										</li>
											<?php
										}
										?>
									</ul>
										<?
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
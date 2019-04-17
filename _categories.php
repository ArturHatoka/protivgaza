	<main role="main" class="main">
		<?php
		if($url['target_id']>0){
			$tree = '<li class="active">'.$seo['name'].'</li>';
			$tree_cat_ar[] = $seo['id'];
			$parent = mysql_result(mysql_query("SELECT p_id FROM ".MySQLprefix."_categories WHERE id=".$seo['id']),0);
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
		}
		?>
		<section class="sect_1 hero banner">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li><a href="/">Главная /</a></li>
						<li><a href="<?=$cur_city[0]?>/<?=$katalog_a['url']?>/"><?=$katalog_a['menu']?>/</a></li>
						<?=$tree?>
						<?=(isset($_GET['searchline']) && strlen($_GET['searchline'])>3?'<li class="active"> &laquo;'.$_GET['searchline'].'&raquo;</li>':'')?>
					</ul>
				</div>
				<h1><?=$seo['h1']?><?=(isset($_GET['searchline']) && strlen($_GET['searchline'])>3?' &laquo;'.$_GET['searchline'].'&raquo;':'')?></h1>
			</div>
		</section>
		<div class="pages-wrap">
			<div class="container">
				<div class="post-holder">
					<div class="holder">
						<div class="flex-wrapper">
							<? include('_left.php'); ?>
							<div class="catalog">
								<h1><?=$seo['h1']?></h1>
								<?
								if(isset($_GET['searchline']) && strlen($_GET['searchline'])>3)
									$under_cats_main = "name LIKE '%".$_GET['searchline']."%'";
								elseif($urls[0]==$katalog_a['url'])
									$under_cats_main = "(cat_ids = '||' OR cat_ids LIKE '%|0|%')";
								else
									$under_cats_main = "cat_ids LIKE '%|".$seo['id']."|%'";
								?>
								<?php
								$result = mysql_query("SELECT ".MySQLprefix."_urls.url, ".MySQLprefix."_categories.logo, ".MySQLprefix."_categories.name FROM ".MySQLprefix."_categories, ".MySQLprefix."_urls WHERE ".MySQLprefix."_categories.p_id='".($urls[0]==$katalog_a['url']?0:$seo['id'])."' AND ".MySQLprefix."_categories.id=".MySQLprefix."_urls.target_id AND ".MySQLprefix."_urls.target_type='categories' GROUP BY ".MySQLprefix."_categories.id ORDER BY ".MySQLprefix."_categories.p_id ASC, ".MySQLprefix."_categories.sort_id ASC");
								if($result && mysql_num_rows($result)>0){
									?>
								<ul class="catalog-list">
									<?php
									while($good = mysql_fetch_assoc($result)){
										$pic = 'admin/img/folder.png';
										$pics = explode('|', $good['logo']);
										if(is_array($pics) && count($pics)>0)
											foreach($pics AS $picc)
												if(strlen($picc)>0 && $pic == 'admin/img/folder.png')
													$pic = $picc;
										?>
									<li>
										<a href="<?=$cur_city[0]?>/<?=$good['url']?>/">
											<div class="wrap">
												<div class="images">
													<img src="/<?=$pic?>" alt="<?=$good['name']?>" />
												</div>
												<div class="title">					
													<h4><?=$good['name']?></h4>
												</div>
												<div class="red_btn">Подробнее...</div>
											</div>
										</a>
									</li>
										<?php
									}
									?>
								</ul>
									<?
								}else{
									$onpage = 2000;
									$p = (isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p']>1)?$onpage*($_GET['p']-1):0;
									$sort = "sort_id ASC";
									$goods_cnt = mysql_result(mysql_query("SELECT count(*) FROM ".MySQLprefix."_goods WHERE status=1 AND ".$under_cats_main.(isset($_GET['brand'])&&$_GET['brand']>0?" AND brand='".$_GET['brand']."'":"")), 0);
									$result = mysql_query("SELECT logo, id, name FROM ".MySQLprefix."_goods WHERE status=1 AND ".$under_cats_main." ORDER BY ".$sort." LIMIT ".$p.", ".$onpage);
									if($result && mysql_num_rows($result)>0){
										?>
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
								}
								?>
								<?=$seo['text']?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
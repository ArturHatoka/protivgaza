	<main role="main" class="main">
		<section class="sect_1 hero banner">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li><a href="/">Главная /</a></li>
						<li class="active"><?=$seo['menu']?></li>
					</ul>
				</div>
				<h1><?=$seo['menu']?></h1>
			</div>
		</section>
		<div class="pages-wrap">
			<div class="container">
				<div class="post-holder sect_3">
					<div class="holder">
						<div class="flex-wrapper">
							<div>
								<section class="light items">
									<div class="container-fluid child_page margin_b_t_0">
										<div class="row">
											<?
											$result = mysql_query("SELECT ".MySQLprefix."_news.pic, ".MySQLprefix."_news.h1, ".MySQLprefix."_news.date_create, ".MySQLprefix."_news.comment, ".MySQLprefix."_urls.url FROM ".MySQLprefix."_news, ".MySQLprefix."_urls WHERE ".MySQLprefix."_news.shows=1 AND ".MySQLprefix."_news.id=".MySQLprefix."_urls.target_id AND ".MySQLprefix."_urls.target_type='news' AND ".MySQLprefix."_news.date_create<='".date('Y-m-d')." 23:59:59' ORDER BY ".MySQLprefix."_news.date_create DESC");
											if($result)
												while($anon = mysql_fetch_assoc($result)){
													$pic = '';
													$pics = explode('|', $anon['pic']);
													if(is_array($pics) && count($pics)>0)
														foreach($pics AS $picc)
															if(strlen($picc)>0 && $pic == '')
																$pic = $picc;
															?>
											<div class="col-sm-12 catalog_item_wrapper">
												<div class="publications_item">
													<a href="/<?=$anon['url']?>/">
														<h3><?=$anon['h1']?></h3>
													</a>
													<div class="info">
														<div class="img" style="background-image: url(/<?=str_replace(".","_small.",$pic)?>)"></div>
														<div class="left_angle"></div>
														<div class="right_angle"></div>
														<div class="txt">
															<p><?=textTrimm($anon['comment'],1500)?></p>
														</div>
													</div>
													<div class="btn_wrapper">
														<a href="/<?=$anon['url']?>/" class="button">Читать полностью</a>
													</div>
												</div>
											</div>
													<?
												}
											?>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<footer class="footer">
		<div class="line">
			<div class="container">
				<div class="f_logo">
					<a><img src="/<?=$additional[38]?>" alt="" /></a>
					<p></p>
				</div>
				<div class="f_links">
					<ul>
						<?
						$cats = mysql_query("SELECT ".MySQLprefix."_urls.url, ".MySQLprefix."_categories.logo, ".MySQLprefix."_categories.name FROM ".MySQLprefix."_categories, ".MySQLprefix."_urls WHERE ".MySQLprefix."_categories.p_id=0 AND ".MySQLprefix."_categories.id=".MySQLprefix."_urls.target_id AND ".MySQLprefix."_urls.target_type='categories' ORDER BY ".MySQLprefix."_categories.sort_id ASC");
						if($cats && mysql_num_rows($cats)>0)
							while($cat = mysql_fetch_assoc($cats)){
								?>
						<li><a href="/<?=$cat['url']?>/"><?=$cat['name']?></a></li>
								<?
							}
						?>
					</ul>
				</div>
				<div class="mobile">
					<ul class="phones">
						<? foreach($tel_cnt AS $tel_cnti){ ?>
						<li><a href="tel:<?=$tel_cnti?>"><?=$tel_cnti?></a></li>
						<? } ?>
					</ul>
					<div class="no_btn">
						<i class="fa fa-phone" aria-hidden="true"></i><a data-toggle="modal" data-target="#modal-call">Получить консультацию</a>
					</div>
					<div class="mail"><a href="mailto:<?=$additional[11]?>" class=""><?=$additional[11]?></a></div>
					<div class="address"></div>
					<div class="address_link"><a href="#" class="">Схема проезда</a></div>
					<!--noindex-->
					<?=$additional[14]?>
					<!--/noindex-->
				</div>
			</div>
		</div>
	</footer>
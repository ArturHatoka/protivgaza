	<header class="header">
		<div class="mobile_line">
			<div class="container">
				<div class="menu_btn">
					<i class="fa fa-bars" aria-hidden="true"></i>
					<i class="fa fa-times" aria-hidden="true"></i>
					<span>Меню</span>
				</div>
				<div class="right" style="padding-top:12px">
					<div class="phone_btn"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></div>
				</div>
			</div>
		</div>
		<div class="usuall_line">
			<div class="container">
				<a href="/" class="logo_1"><img src="/<?=$additional[5]?>" alt="" /></a>
				<div class="logo_2">
					<a class="logo"><img src="/assets/app/img/logo2.png" alt="" /></a>
					<a><img src="/assets/app/img/logo.png" alt="" style="margin-right:0px" /></a>
				</div>
				<div class="consult">
					<div class="top-links" style="float: left;">
						<div class="no_btn" data-toggle="modal" data-target="#modal-call" style="margin-top:15px">
							<i class="fa fa-phone" aria-hidden="true"></i><a>Заказать обратный звонок</a>
						</div>
						<br/>
					</div>
					<ul class="phones">
						<? $tel_cnt = explode("\r\n", $additional[4]); foreach($tel_cnt AS $tel_cnti){ ?>
						<li><a href="tel:<?=$tel_cnti?>"><?=$tel_cnti?></a></li>
						<? } ?>
					</ul>
				</div>
			</div>
		</div>
		<?
		$result = mysql_query("SELECT url, menu, id, p_id FROM ".MySQLprefix."_mypages WHERE place='top' AND shows=1 AND id!=77 ORDER BY p_id ASC, sort_id ASC");
		if($result)
			while($row = mysql_fetch_assoc($result)){
				$treeid[] = $row["id"];
				$treename[] = $row["menu"];
				$treeurl[] = $row["url"];
				$treepid[] = $row["p_id"];
				$treelevel[] = 0;
			}
		$count = count($treeid);
		for($i=0; $i<$count-1; $i++){
			$g = $i;
			for($j=1; $j<$count; $j++)
				if($treepid[$j] == $treeid[$i]){
					$jid = $treeid[$j];
					$jpid = $treepid[$j];
					$jname = $treename[$j];
					$jurl = $treeurl[$j];
					$jlevel = $treelevel[$i]+1;
					$k = $j;
					while ($k>$g+1){
						$treeid[$k] = $treeid[$k-1];
						$treepid[$k] = $treepid[$k-1];
						$treename[$k] = $treename[$k-1];
						$treeurl[$k] = $treeurl[$k-1];
						$treelevel[$k] = $treelevel[$k-1];
						$k = $k - 1;
					}
					$treeid[$g+1] = $jid;
					$treepid[$g+1] = $jpid;
					$treename[$g+1] = $jname;
					$treeurl[$g+1] = $jurl;
					$treelevel[$g+1] = $jlevel;
					$g++;
				}
		}
		?>
		<div class="desc_line">
			<div class="container">
				<ul class="menu">
					<?
					for($i=0; $i<$count; $i++){
						?>
					<li<?=(isset($treelevel[$i+1]) && $treelevel[$i+1] > $treelevel[$i]?' class="drop-li"':'')?>>
						<a <? if($treeurl[$i]==$urls[0] || $treeurl[$i]=='main' && $url['target_type']=='main'){ ?>class="active" <? }else{ ?>href="<?=(substr($treeurl[$i],0,4)=='http'?$treeurl[$i].'" target="_blank':($treeid[$i]==2?$cur_city[0]:'').'/'.($treeurl[$i]!='main'?$treeurl[$i].'/':''))?><? } ?>"><?=$treename[$i]?></a>
						<?
						if($treeid[$i]==2){
							?>
						<ul class="flex-wrapper sub_big_menu sub-menu">
							<?
							$cats = mysql_query("SELECT ".MySQLprefix."_urls.url, ".MySQLprefix."_categories.logo, ".MySQLprefix."_categories.name FROM ".MySQLprefix."_categories, ".MySQLprefix."_urls WHERE ".MySQLprefix."_categories.p_id=0 AND ".MySQLprefix."_categories.id=".MySQLprefix."_urls.target_id AND ".MySQLprefix."_urls.target_type='categories' ORDER BY ".MySQLprefix."_categories.sort_id ASC");
							if($cats && mysql_num_rows($cats)>0)
								while($cat = mysql_fetch_assoc($cats)){
									?>
							<li class="sbm_item">
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
							</li>
									<?
								}
							?>
						</ul>
							<?
						}
						if(isset($treelevel[$i+1]) && $treelevel[$i+1] > $treelevel[$i]){
							?>
						<ul class="sub-menu standard-sub-menu">
							<?
						}
						if(!isset($treelevel[$i+1]) || isset($treelevel[$i+1]) && $treelevel[$i+1] <= $treelevel[$i]){
							?>
					</li>
							<?
						}
						if(isset($treelevel[$i+1]) && $treelevel[$i+1] < $treelevel[$i]){
							for($m = 1; $m <= $treelevel[$i] - (isset($treelevel[$i+1])?$treelevel[$i+1]:0); $m++){
								?>
						</ul>
					</li>
								<?
							}
						}
					}
					?>
				</ul>
				<div class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></div>
			</div>
		</div>
		<div class="container search_form input">
			<form class="sisea-search-form search" action="/stranica-poiska/" method="get">
				<button type="submit" value="Поиск"  class="red_btn">Поиск</button>
				<div class="input_wrapper">
					<span class="icon">
						<i class="fa fa-search" aria-hidden="true"></i>
					</span>
					<input type="text" name="searchline" id="search" value="" placeholder="Поиск по каталогу" />
				</div>
			</form>
		</div>
	</header>
							<div class="sidebar">
								<?php
								$result = mysql_query("SELECT ".MySQLprefix."_urls.url, ".MySQLprefix."_categories.name, ".MySQLprefix."_categories.id, ".MySQLprefix."_categories.p_id FROM ".MySQLprefix."_categories, ".MySQLprefix."_urls WHERE ".MySQLprefix."_categories.id=".MySQLprefix."_urls.target_id AND ".MySQLprefix."_urls.target_type='categories' GROUP BY ".MySQLprefix."_categories.id ORDER BY ".MySQLprefix."_categories.p_id ASC, ".MySQLprefix."_categories.sort_id ASC");
								unset($treeid, $treename, $treeurl, $treepid, $treelevel);
								if($result)
									while($row = mysql_fetch_assoc($result)){
										$treeid[] = $row["id"];
										$treename[] = $row["name"];
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
								<ul class="left-menu">
									<?
									for($i=0; $i<$count; $i++){
										$levels[$treelevel[$i]] = $treeid[$i];
										?>
									<li class="level<?=($treelevel[$i]+1)?>">
										<a href="<?=$cur_city[0]?>/<?=$treeurl[$i]?>/"><?=$treename[$i]?></a>
										<?php
										if(isset($treelevel[$i+1]) && $treelevel[$i+1] > $treelevel[$i]){
											?>
										<ul>
											<?php
										}
										if(isset($treelevel[$i+1]) && $treelevel[$i+1] == $treelevel[$i]){
											?>
									</li>
											<?php
										}
										if(isset($treelevel[$i+1]) && $treelevel[$i+1] <= $treelevel[$i] || !isset($treelevel[$i+1])){
											?>
									</li>
											<?php
											for($m = 1; $m <= $treelevel[$i] - (isset($treelevel[$i+1])?$treelevel[$i+1]:0); $m++){
												?>
										</ul>
									</li>
												<?php
											}
										}
										for($m = $treelevel[$i]; $m >= 0; $m--)
											$treechilds[$levels[$m]][] = $treeid[$i];
									}
									?>
								</ul>
							</div>
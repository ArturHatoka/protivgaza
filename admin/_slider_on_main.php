			<?
			$slides = mysql_query("SELECT * FROM ".MySQLprefix."_slides ORDER BY id");
			$numbs = '';
			$numb = 0;
			if($slides && mysql_num_rows($slides)>0)
				while($slide = mysql_fetch_assoc($slides)){
					$numb++;
					$numbs .= '<a'.($numb==1?' class="on"':'').'></a>';
					?>
					<div class="item" style="background-image:url('/<?=$slide['logo']?>')">
						<div class="container">
							<div class="table-wrapper">
								<div class="cell-wrapper">
									<div class="text_box">
										<?=$slide['text']?>
										<div class="buttons">
											<a class="red_btn" data-toggle="modal" data-target="#modal-call">Оставить заявку</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?
				}
			?>
<?php
$HEVA_CMS = "3.1.5.20130222";
include("_mysql.php");
$search = mysql_query("SELECT id, name, cat_id FROM ".MySQLprefix."_goods WHERE status=1 AND name LIKE '%".$_POST['line']."%' GROUP BY id");
if($search)
	if(mysql_num_rows($search)>0){
		while($srch = mysql_fetch_assoc($search)){
			$tree = '<b>'.$srch['name'].'</b>';
				$parent = $srch['cat_id'];
				while($parent!=0){ 
				  unset($par_data);
				  $par_r = mysql_query("SELECT name, p_id FROM ".MySQLprefix."_categories WHERE id=".$parent." LIMIT 0, 1");
				  if($par_r)
				    if(mysql_num_rows($par_r)==1)
				      $par_data = mysql_fetch_assoc($par_r);
				  $tree = $par_data['name'].' - '.$tree;
				  $parent = $par_data['p_id'];
				}
				
			?>
<a style="display:block" class="res_a_w" rel="<?php echo $srch['id']; ?>"><?php echo $tree; ?></a>
			<?php
		}
	}
?>
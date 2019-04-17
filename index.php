<?php
$HEVA_CMS = "3.1.5.20130222";
if (ini_get('register_globals') == '1' || strtolower(ini_get('register_globals')) == 'on')
	die('Отключите register_globals в php.ini/.htaccess (угроза безопасности)');
session_start();
if (strpos($_SERVER['REQUEST_URI'], '_small.') > 0 && !file_exists("..".$_SERVER['REQUEST_URI'])){
	include("_small.php");
	die;
}
if(isset($_SESSION['user']))
	$user = $_SESSION['user'];
else{
	if (isset($_COOKIE['user']))
		$_SESSION['user'] = $user = $_COOKIE['user'];
	else{
		$_SESSION['user'] = $user = round(rand(10000000000,99999999999),0);
		setcookie("user", $user, time()+3600*24*30);
	}
}
ini_set('display_errors', 0);
include("_mysql.php");
include("_additional.php");
include("_url.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  	<? include("_head.php"); ?>
</head>
<body>
	<div id="top" class="up-btn">Наверх</div>
	<? include("_header.php"); ?>
	<? include("_".$url['target_type'].".php"); ?>
	<? include("_footer.php"); ?>
	<div class="modal fade " id="modal-call" role="dialog">
		<div class="modal-dialog clearfix">
			<div class="modal-content">
				<div class="modal-title">
					<button class="close" type="button" data-dismiss="modal" aria-hidden="true">
						<span></span>
						<span></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal_form">
						<h3>Оставить заявку</h3>
						<form class="callback" method="POST">
							<input type="text" name="name" placeholder="Ваше имя" />
							<input type="tel" name="phone" placeholder="Телефон" required="required" />
							<button type="submit" id="button_submit">Отправить</button>
						</form>
						<p>Отправляя заявку, я соглашаюсь с <a href="/politika-konfidenczialnosti/">правилами передачи персональных данных</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade " id="modal_menu" role="dialog">
		<div class="modal-dialog clearfix">
			<div class="modal-content">
				<div class="modal-body">
					<div class="table-wrapper">
						<div class="cell-wrapper">
							<ul class="menu collapsible">
								<? for($i=0; $i<$count; $i++) if($treelevel[$i]==0){ ?>
								<li><a href="<?=(substr($treeurl[$i],0,4)=='http'?$treeurl[$i].'" target="_blank':($treeid[$i]==2?$cur_city[0]:'').'/'.($treeurl[$i]!='main'?$treeurl[$i].'/':''))?>" title="<?=$treename[$i]?>"><?=$treename[$i]?></a>
								<? } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/assets/app/js/bootstrap.min.js"></script>
	<script src="/assets/app/js/lightgallery.min.js"></script>
	<script src="/assets/app/js/lg-thumbnail.min.js"></script>
	<script src="/assets/app/js/lg-fullscreen.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="/assets/app/js/common.js"></script>
	<script src="/assets/app/js/library.min.js"></script>
	<script>
		(function(a){var y=function(){var d=document.createElement("input");d.setAttribute("onpaste","");return"function"===typeof d.onpaste?"paste":"input"}()+".mask",l=navigator.userAgent,z=/iphone/i.test(l),A=/android/i.test(l),x;a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn",placeholder:"_"};a.fn.extend({caret:function(d,f){var a;if(0!==this.length&&!this.is(":hidden")){if("number"==typeof d)return f="number"===typeof f?f:d,this.each(function(){this.setSelectionRange? this.setSelectionRange(d,f):this.createTextRange&&(a=this.createTextRange(),a.collapse(!0),a.moveEnd("character",f),a.moveStart("character",d),a.select())});this[0].setSelectionRange?(d=this[0].selectionStart,f=this[0].selectionEnd):document.selection&&document.selection.createRange&&(a=document.selection.createRange(),d=0-a.duplicate().moveStart("character",-1E5),f=d+a.text.length);return{begin:d,end:f}}},unmask:function(){return this.trigger("unmask")},mask:function(d,f){var l,t,h,n,p,m;if(!d&& 0<this.length)return l=a(this[0]),l.data(a.mask.dataName)();f=a.extend({placeholder:a.mask.placeholder,completed:null},f);t=a.mask.definitions;h=[];n=m=d.length;p=null;a.each(d.split(""),function(a,f){"?"==f?(m--,n=a):t[f]?(h.push(new RegExp(t[f])),null===p&&(p=h.length-1)):h.push(null)});return this.trigger("unmask").each(function(){function q(g){for(;++g<m&&!h[g];);return g}function l(g,a){var b,c;if(!(0>g)){b=g;for(c=q(a);b<m;b++)if(h[b]){if(c<m&&h[b].test(k[c]))k[b]=k[c],k[c]=f.placeholder;else break; c=q(c)}r();e.caret(Math.max(p,g))}}function B(g){var a=g.which,b,c;if(8===a||46===a||z&&127===a){b=e.caret();c=b.begin;b=b.end;if(0===b-c){if(46!==a)for(;0<=--c&&!h[c];);else c=b=q(c-1);b=46===a?q(b):b}u(c,b);l(c,b-1);g.preventDefault()}else 27==a&&(e.val(v),e.caret(0,s()),g.preventDefault())}function C(g){var d=g.which,b=e.caret();if(!(g.ctrlKey||g.altKey||g.metaKey||32>d)&&d){0!==b.end-b.begin&&(u(b.begin,b.end),l(b.begin,b.end-1));b=q(b.begin-1);if(b<m&&(d=String.fromCharCode(d),h[b].test(d))){var c, w,n,p;c=b;for(w=f.placeholder;c<m;c++)if(h[c])if(n=q(c),p=k[c],k[c]=w,n<m&&h[n].test(p))w=p;else break;k[b]=d;r();b=q(b);A?setTimeout(a.proxy(a.fn.caret,e,b),0):e.caret(b);f.completed&&b>=m&&f.completed.call(e)}g.preventDefault()}}function u(g,a){var b;for(b=g;b<a&&b<m;b++)h[b]&&(k[b]=f.placeholder)}function r(){e.val(k.join(""))}function s(a){var d=e.val(),b=-1,c,l;for(pos=c=0;c<m;c++)if(h[c]){for(k[c]=f.placeholder;pos++<d.length;)if(l=d.charAt(pos-1),h[c].test(l)){k[c]=l;b=c;break}if(pos>d.length)break}else k[c]=== d.charAt(pos)&&c!==n&&(pos++,b=c);a?r():b+1<n?(e.val(""),u(0,m)):(r(),e.val(e.val().substring(0,b+1)));return n?c:p}var e=a(this),k=a.map(d.split(""),function(a,d){if("?"!=a)return t[a]?f.placeholder:a}),v=e.val();e.data(a.mask.dataName,function(){return a.map(k,function(a,d){return h[d]&&a!=f.placeholder?a:null}).join("")});e.attr("readonly")||e.one("unmask",function(){e.unbind(".mask").removeData(a.mask.dataName)}).bind("focus.mask",function(){clearTimeout(x);var a;v=e.val();a=s();x=setTimeout(function(){r(); a==d.length?e.caret(0,a):e.caret(a)},10)}).bind("blur.mask",function(){s();e.val()!=v&&e.change()}).bind("keydown.mask",B).bind("keypress.mask",C).bind(y,function(){setTimeout(function(){var a=s(!0);e.caret(a);f.completed&&a==e.val().length&&f.completed.call(e)},0)});s()})}})})(jQuery);
		$(document).ready(function() {
			$("input[type='tel']").mask("+7 (999) 999-99-99");
			$(".w-rel").click(function(){
				$("form.callback").append('<input type="hidden" name="goodid" value="'+$(this).attr('data-id')+'" /><input type="hidden" name="goodname" value="'+$(this).attr('data-name')+'" />');
			});
			$("form.callback").submit(function() {
				$.ajax({
					type: "POST",
					url: "/admin/_mail.php",
					data: $(this).serialize()
				}).done(function(answ) {
					$("form.callback").append(answ);
					$("form.callback button").hide();
					setTimeout(function() {
						$('button.close').click();
						$("form.callback button").show();
						$("form.callback input[name='goodid'], form.callback input[name='goodname'], form.callback p").remove();
						$("form.callback input").val('');
					}, 5000);
				});
				return false;
			});
		});
	</script>
	<script type="text/javascript">
		var top_show = 150;
		var delay = 1000;
		$(window).scroll(function () {
			if ($(this).scrollTop() > top_show) $('#top').fadeIn();
			else $('#top').fadeOut();
		});
		$(document).ready(function() {
			$('#top').click(function () {
				$('body, html').animate({scrollTop: 0}, delay);
			});
		});
	</script>
</body>
</html>
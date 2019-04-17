<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<style type="text/css">
	/*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */
		/* Document
		   ========================================================================== */
		/**
		 * 1. Correct the line height in all browsers.
		 * 2. Prevent adjustments of font size after orientation changes in
		 *    IE on Windows Phone and in iOS.
		 */
		html {
		  line-height: 1.15;
		  /* 1 */
		  -ms-text-size-adjust: 100%;
		  /* 2 */
		  -webkit-text-size-adjust: 100%;
		  /* 2 */ }

		/* Sections
		   ========================================================================== */
		/**
		 * Remove the margin in all browsers (opinionated).
		 */
		body {
		  margin: 0;
		  background-color: #fff;
		  display: block !important;
		  opacity: 1 !important; }

		/**
		 * Add the correct display in IE 9-.
		 */
		article,
		aside,
		footer,
		header,
		nav,
		section {
		  display: block; }

		/**
		 * Correct the font size and margin on `h1` elements within `section` and
		 * `article` contexts in Chrome, Firefox, and Safari.
		 */
		h1 {
		  font-size: 2em;
		  margin: 0.67em 0; }

		/* Grouping content
		   ========================================================================== */
		/**
		 * Add the correct display in IE 9-.
		 * 1. Add the correct display in IE.
		 */
		figcaption,
		figure,
		main {
		  /* 1 */
		  display: block; }

		/**
		 * Add the correct margin in IE 8.
		 */
		figure {
		  margin: 1em 40px; }

		/**
		 * 1. Add the correct box sizing in Firefox.
		 * 2. Show the overflow in Edge and IE.
		 */
		hr {
		  box-sizing: content-box;
		  /* 1 */
		  height: 0;
		  /* 1 */
		  overflow: visible;
		  /* 2 */ }

		/**
		 * 1. Correct the inheritance and scaling of font size in all browsers.
		 * 2. Correct the odd `em` font sizing in all browsers.
		 */
		pre {
		  font-family: monospace, monospace;
		  /* 1 */
		  font-size: 1em;
		  /* 2 */ }

		/* Text-level semantics
		   ========================================================================== */
		/**
		 * 1. Remove the gray background on active links in IE 10.
		 * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
		 */
		a {
		  background-color: transparent;
		  /* 1 */
		  -webkit-text-decoration-skip: objects;
		  /* 2 */ }

		/**
		 * 1. Remove the bottom border in Chrome 57- and Firefox 39-.
		 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
		 */
		abbr[title] {
		  border-bottom: none;
		  /* 1 */
		  text-decoration: underline;
		  /* 2 */
		  text-decoration: underline dotted;
		  /* 2 */ }

		/**
		 * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
		 */
		b,
		strong {
		  font-weight: inherit; }

		/**
		 * Add the correct font weight in Chrome, Edge, and Safari.
		 */
		b,
		strong {
		  font-weight: bolder; }

		/**
		 * 1. Correct the inheritance and scaling of font size in all browsers.
		 * 2. Correct the odd `em` font sizing in all browsers.
		 */
		code,
		kbd,
		samp {
		  font-family: monospace, monospace;
		  /* 1 */
		  font-size: 1em;
		  /* 2 */ }

		/**
		 * Add the correct font style in Android 4.3-.
		 */
		dfn {
		  font-style: italic; }

		/**
		 * Add the correct background and color in IE 9-.
		 */
		mark {
		  background-color: #ff0;
		  color: #000; }

		/**
		 * Add the correct font size in all browsers.
		 */
		small {
		  font-size: 80%; }

		/**
		 * Prevent `sub` and `sup` elements from affecting the line height in
		 * all browsers.
		 */
		sub,
		sup {
		  font-size: 75%;
		  line-height: 0;
		  position: relative;
		  vertical-align: baseline; }

		sub {
		  bottom: -0.25em; }

		sup {
		  top: -0.5em; }

		/* Embedded content
		   ========================================================================== */
		/**
		 * Add the correct display in IE 9-.
		 */
		audio,
		video {
		  display: inline-block; }

		/**
		 * Add the correct display in iOS 4-7.
		 */
		audio:not([controls]) {
		  display: none;
		  height: 0; }

		/**
		 * Remove the border on images inside links in IE 10-.
		 */
		img {
		  border-style: none; }

		/**
		 * Hide the overflow in IE.
		 */
		svg:not(:root) {
		  overflow: hidden; }

		/* Forms
		   ========================================================================== */
		/**
		 * 1. Change the font styles in all browsers (opinionated).
		 * 2. Remove the margin in Firefox and Safari.
		 */
		button,
		input,
		optgroup,
		select,
		textarea {
		  font-family: sans-serif;
		  /* 1 */
		  font-size: 100%;
		  /* 1 */
		  line-height: 1.15;
		  /* 1 */
		  margin: 0;
		  /* 2 */ }

		/**
		 * Show the overflow in IE.
		 * 1. Show the overflow in Edge.
		 */
		button,
		input {
		  /* 1 */
		  overflow: visible; }

		/**
		 * Remove the inheritance of text transform in Edge, Firefox, and IE.
		 * 1. Remove the inheritance of text transform in Firefox.
		 */
		button,
		select {
		  /* 1 */
		  text-transform: none; }

		/**
		 * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
		 *    controls in Android 4.
		 * 2. Correct the inability to style clickable types in iOS and Safari.
		 */
		button,
		html [type="button"],
		[type="reset"],
		[type="submit"] {
		  -webkit-appearance: button;
		  /* 2 */ }

		/**
		 * Remove the inner border and padding in Firefox.
		 */
		button::-moz-focus-inner,
		[type="button"]::-moz-focus-inner,
		[type="reset"]::-moz-focus-inner,
		[type="submit"]::-moz-focus-inner {
		  border-style: none;
		  padding: 0; }

		/**
		 * Restore the focus styles unset by the previous rule.
		 */
		button:-moz-focusring,
		[type="button"]:-moz-focusring,
		[type="reset"]:-moz-focusring,
		[type="submit"]:-moz-focusring {
		  outline: 1px dotted ButtonText; }

		/**
		 * Correct the padding in Firefox.
		 */
		fieldset {
		  padding: 0.35em 0.75em 0.625em; }

		/**
		 * 1. Correct the text wrapping in Edge and IE.
		 * 2. Correct the color inheritance from `fieldset` elements in IE.
		 * 3. Remove the padding so developers are not caught out when they zero out
		 *    `fieldset` elements in all browsers.
		 */
		legend {
		  box-sizing: border-box;
		  /* 1 */
		  color: inherit;
		  /* 2 */
		  display: table;
		  /* 1 */
		  max-width: 100%;
		  /* 1 */
		  padding: 0;
		  /* 3 */
		  white-space: normal;
		  /* 1 */ }

		/**
		 * 1. Add the correct display in IE 9-.
		 * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
		 */
		progress {
		  display: inline-block;
		  /* 1 */
		  vertical-align: baseline;
		  /* 2 */ }

		/**
		 * Remove the default vertical scrollbar in IE.
		 */
		textarea {
		  overflow: auto; }

		/**
		 * 1. Add the correct box sizing in IE 10-.
		 * 2. Remove the padding in IE 10-.
		 */
		[type="checkbox"],
		[type="radio"] {
		  box-sizing: border-box;
		  /* 1 */
		  padding: 0;
		  /* 2 */ }

		/**
		 * Correct the cursor style of increment and decrement buttons in Chrome.
		 */
		[type="number"]::-webkit-inner-spin-button,
		[type="number"]::-webkit-outer-spin-button {
		  height: auto; }

		/**
		 * 1. Correct the odd appearance in Chrome and Safari.
		 * 2. Correct the outline style in Safari.
		 */
		[type="search"] {
		  -webkit-appearance: textfield;
		  /* 1 */
		  outline-offset: -2px;
		  /* 2 */ }

		/**
		 * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
		 */
		[type="search"]::-webkit-search-cancel-button,
		[type="search"]::-webkit-search-decoration {
		  -webkit-appearance: none; }

		/**
		 * 1. Correct the inability to style clickable types in iOS and Safari.
		 * 2. Change font properties to `inherit` in Safari.
		 */
		::-webkit-file-upload-button {
		  -webkit-appearance: button;
		  /* 1 */
		  font: inherit;
		  /* 2 */ }

		/* Interactive
		   ========================================================================== */
		/*
		 * Add the correct display in IE 9-.
		 * 1. Add the correct display in Edge, IE, and Firefox.
		 */
		details,
		menu {
		  display: block; }

		/*
		 * Add the correct display in all browsers.
		 */
		summary {
		  display: list-item; }

		/* Scripting
		   ========================================================================== */
		/**
		 * Add the correct display in IE 9-.
		 */
		canvas {
		  display: inline-block; }

		/**
		 * Add the correct display in IE.
		 */
		template {
		  display: none; }

		/* Hidden
		   ========================================================================== */
		/**
		 * Add the correct display in IE 10-.
		 */
		[hidden] {
		  display: none; }

		* {
		  box-sizing: border-box;
		  font-style: normal;
		  font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
		  font-weight: 300;
		  table-layout: auto; }
		  * img {
			padding-bottom: 0; }

		.pv_wrap {
		  min-width: auto;
		  width: 100%;
		  height: 100%;
		  min-height: 100%;
		  max-height: 100%;
		  vertical-align: middle;
		  padding: 0 20px; }

		.pv_message_footer {
		  width: 100%; }

		.pv_message_body {
		  width: 100%;
		  margin-bottom: 10px; }
		  .pv_message_body .pv_message {
			width: 100%;
			display: block;
			resize: none;
			height: 152px !important;
			max-height: 152px !important;
			min-height: 152px !important;
			border: 1px solid #d7d9de;
			box-shadow: none;
			background: none;
			border-radius: 5px;
			font-weight: 300;
			resize: none;
			font-size: 14px;
			line-height: 18px;
			padding: 12px 16px;
			font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
			transition: border-color .2s, box-shadow .2s;
			overflow: auto; }
			.pv_message_body .pv_message:focus {
			  border-color: #4E9FFF;
			  outline: none; }
			.pv_message_body .pv_message.has_error {
			  border-color: red; }
			.pv_message_body .pv_message::-webkit-input-placeholder {
			  color: #7a7a7a;
			  opacity: 1; }
			.pv_message_body .pv_message::-moz-placeholder {
			  color: #7a7a7a;
			  opacity: 1; }
			.pv_message_body .pv_message:-moz-placeholder {
			  color: #7a7a7a;
			  opacity: 1; }
			.pv_message_body .pv_message:-ms-input-placeholder {
			  color: #7a7a7a;
			  opacity: 1; }
			.pv_message_body .pv_message.has_focus {
			  font-size: 16px !important;
			  line-height: 20px !important; }
			  .pv_message_body .pv_message.has_focus::-webkit-input-placeholder {
				visibility: hidden;
				display: none; }
			  .pv_message_body .pv_message.has_focus::-moz-placeholder {
				visibility: hidden;
				display: none; }
			  .pv_message_body .pv_message.has_focus:-moz-placeholder {
				visibility: hidden;
				display: none; }
			  .pv_message_body .pv_message.has_focus:-ms-input-placeholder {
				visibility: hidden;
				display: none; }

		.pv_backup_info {
		  padding-left: 30px;
		  background: url("https://133921.selcdn.ru/widget/svg/time-ico.svg") 0 50% no-repeat;
		  font-size: 12px;
		  line-height: 30px;
		  color: #000000;
		  font-weight: 300;
		  margin-bottom: 20px; }

		.pv_sub_title,
		.pv_short_desc {
		  margin: 0;
		  padding: 0;
		  text-align: center;
		  font-size: 14px;
		  line-height: 20px;
		  word-spacing: calc(-1px);
		  word-wrap: break-word; }

		.pv_form_head,
		.pv_message_head {
		  display: block;
		  margin: 0 auto 25px auto;
		  width: 100%; }
		  .pv_form_head .pv_form_title,
		  .pv_message_head .pv_form_title {
			margin: 0px 0 4px;
			padding: 0;
			text-align: center;
			font-size: 20px;
			font-weight: 300;
			line-height: 22px;
			color: #000;
			word-wrap: break-word; }
		  .pv_form_head .pv_form_image,
		  .pv_message_head .pv_form_image {
			position: relative; }
			.pv_form_head .pv_form_image:before,
			.pv_message_head .pv_form_image:before {
			  position: absolute;
			  content: '';
			  background: #21c615 url("https://133921.selcdn.ru/widget/svg/pv-ok-ico.svg") 50% 50% no-repeat;
			  background-size: 12px;
			  border: 2px solid #fff;
			  width: 25px;
			  height: 25px;
			  bottom: -6px;
			  right: 0px;
			  border-radius: 50%; }
			.pv_form_head .pv_form_image img,
			.pv_message_head .pv_form_image img {
			  display: block;
			  border-radius: 50%;
			  width: 80px;
			  height: 80px;
			  object-fit: cover; }

		.pv_message_head h3 {
		  margin-bottom: 0; }

		.pv_form_body {
		  width: 100%;
		  padding-bottom: 24px; }
		  .pv_form_body .icon {
			width: 14px;
			height: 14px;
			position: absolute;
			top: 14px;
			left: 12px;
			z-index: 9999; }
		  .pv_form_body .time_zone_select {
			display: none;
			background: #fff url("https://133921.selcdn.ru/widget/svg/caret-down.svg") 50% no-repeat;
			background-size: 10px; }
			.pv_form_body .time_zone_select .icon {
			  background: #fff url("https://133921.selcdn.ru/widget/svg/icon1.svg") 0 0 no-repeat;
			  background-size: cover; }
		  .pv_form_body .phone_input .icon {
			background: #fff url("https://133921.selcdn.ru/widget/svg/icon1.svg") -26px 0 no-repeat;
			background-size: cover;
			width: 14px;
			left: 18px; }
		  .pv_form_body .name_input .icon {
			background: #fff url("https://133921.selcdn.ru/widget/svg/icon1.svg") -14px 0 no-repeat;
			background-size: cover;
			width: 12px;
			left: 20px; }
		  .pv_form_body .city_input .icon {
			background: #fff url("https://133921.selcdn.ru/widget/svg/icon1.svg") -40px 0 no-repeat;
			background-size: cover;
			width: 10px;
			left: 20px; }
		  .pv_form_body .email_input .icon {
			background: #fff url(https://133921.selcdn.ru/widget/svg/icon1.svg) -43px 0 no-repeat;
			background-size: auto 12px;
			width: 20px;
			left: 16px;
			top: 15px; }
		  .pv_form_body .pv_form_input_wrapp {
			margin: 0 0 13px;
			width: 100%;
			padding: 0;
			position: relative; }
			.pv_form_body .pv_form_input_wrapp.time_zone_select {
			  margin: 0; }
			  .pv_form_body .pv_form_input_wrapp.time_zone_select.is_shown {
				margin-bottom: 13px; }
			.pv_form_body .pv_form_input_wrapp:last-child {
			  margin: 0; }
			.pv_form_body .pv_form_input_wrapp .pv_form_input {
			  display: block;
			  width: 100%;
			  margin: 0;
			  padding: 10px 20px 10px 40px;
			  line-height: 20px !important;
			  font-size: 14px !important;
			  color: #000;
			  border: 1px solid #d7d9de;
			  border-radius: 28px;
			  box-shadow: none;
			  outline: none !important;
			  background-color: #fff;
			  height: inherit !important; }
			  .pv_form_body .pv_form_input_wrapp .pv_form_input:focus {
				border-color: #4E9FFF; }
			  .pv_form_body .pv_form_input_wrapp .pv_form_input.has_error {
				border-color: red; }
			  .pv_form_body .pv_form_input_wrapp .pv_form_input.has_focus {
				font-size: 16px !important;
				line-height: 20px !important; }
				.pv_form_body .pv_form_input_wrapp .pv_form_input.has_focus::-webkit-input-placeholder {
				  visibility: hidden;
				  display: none; }
				.pv_form_body .pv_form_input_wrapp .pv_form_input.has_focus::-moz-placeholder {
				  visibility: hidden;
				  display: none; }
				.pv_form_body .pv_form_input_wrapp .pv_form_input.has_focus:-moz-placeholder {
				  visibility: hidden;
				  display: none; }
				.pv_form_body .pv_form_input_wrapp .pv_form_input.has_focus:-ms-input-placeholder {
				  visibility: hidden;
				  display: none; }
			.pv_form_body .pv_form_input_wrapp .tz_picker {
			  -webkit-appearance: button;
			  -moz-appearance: button;
			  appearance: button;
			  padding-right: 36px;
			  background: transparent; }

		.pv_back_btn {
		  opacity: 0;
		  visibility: hidden;
		  position: absolute;
		  top: 25px;
		  left: 25px;
		  width: 15px;
		  height: 15px;
		  transition: opacity .2s, visibility .2s;
		  z-index: 9; }
		  .pv_back_btn svg {
			display: block;
			fill: #788ca4;
			width: 15px;
			height: 15px; }

		.pv_thank_you {
		  padding: 120px 0px 34px;
		  background-repeat: no-repeat;
		  background-position: 50% 0px;
		  background-color: none;
		  transition: opacity .3s;
		  background-size: 100px 100px; }
		  .pv_thank_you .pv_title {
			text-align: center; }
		  .pv_thank_you .pv_short_desc {
			text-align: center;
			margin: 0; }

		.pv_image img {
		  max-width: 100%;
		  width: auto; }

		.pv_title {
		  margin: 0 0 15px;
		  font-size: 20px;
		  line-height: 22px;
		  font-weight: 300;
		  font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
		  border: 0 none;
		  text-align: center;
		  word-wrap: break-word; }
		  .pv_title.pv_step_4_heading {
			margin-bottom: 4px; }

		.mobwid_user_agreement_block {
		  position: fixed !important;
		  height: 100vh !important;
		  width: 100% !important;
		  top: 0 !important;
		  left: 0 !important;
		  z-index: 9999 !important;
		  padding: 60px 14px 100px !important;
		  background-color: #fff !important;
		  -webkit-box-sizing: border-box !important;
		  box-sizing: border-box !important;
		  overflow: auto !important;
		  -webkit-overflow-scrolling: touch;
		  display: none !important; }

		.mobwid_user_agreement_block.is_active {
		  display: block !important; }

		.mobwid_user_agreement_close {
		  font-style: normal !important;
		  position: absolute !important;
		  top: 20px !important;
		  right: 30px !important;
		  cursor: pointer !important;
		  padding: 10px !important;
		  width: 30px !important;
		  height: 30px !important;
		  box-sizing: border-box !important;
		  line-height: 10px !important;
		  font-size: 20px !important;
		  display: block !important; }

		.pv_ca {
		  outline: 0;
		  padding: 12px 0;
		  width: 100%;
		  max-width: 170px;
		  text-align: center;
		  overflow: hidden;
		  border-radius: 65px;
		  display: block;
		  font-weight: 500;
		  position: relative;
		  cursor: pointer;
		  text-decoration: none !important;
		  width: 100%;
		  max-width: 100%;
		  margin-bottom: 16px;
		  background-color: #4E9FFF;
		  color: #fff; }

		.nav_head {
		  display: block !important;
		  position: relative;
		  padding: 0px 10px 0;
		  z-index: 1;
		  width: calc(100% + 60px);
		  margin: 0 -30px; }
		  .nav_head a {
			display: inline-block;
			padding: 15px;
			cursor: pointer;
			user-select: none;
			outline: none !important; }
		  .nav_head .js-close-iframe {
			float: right; }
		  .nav_head .js-step-back {
			float: left; }
		  .nav_head svg {
			width: 14px;
			fill: #7f7f7f;
			height: 14px; }
		  .nav_head .arrow_back {
			float: left; }
		  .nav_head .close {
			float: right; }

		.pv_wrap {
		  background-color: #fff;
		  padding: 00px 30px 20px; }

		.pv_step {
		  visibility: hidden;
		  display: none;
		  max-width: 500px;
		  margin: 0 auto;
		  padding-top: 40px; }
		  .pv_step.active_step {
			visibility: visible;
			display: block; }

		.pv_img_manager,
		.pv_form_image {
		  max-width: 80px;
		  margin: 0 auto 20px auto; }

		.head_img {
		  display: block;
		  width: 100%;
		  border-radius: 50%; }

		.mobwid_agreement_block {
		  font-size: 10px;
		  padding: 0 0 12px 0px;
		  text-align: center;
		  padding: 0; }

		#productview {
		  height: 100%;
		  min-height: 100vh;
		  max-height: 100vh;
		  overflow-y: auto; }
		  #productview[data-step="thank_you"] .pv_wrap {
			padding-top: 0;
			display: table-cell;
			vertical-align: middle;
			height: 100vh;
			padding-bottom: 0;
			min-width: 100vw; }
		  #productview[data-step="thank_you"] .nav_head {
			display: none !important; }
		  #productview[data-step="agreement"] .nav_head .js-close-iframe svg {
			display: none;
			width: 24px;
			height: 24px; }
	</style>
	<script type="text/javascript" src="/admin/js/jquery-1.4.4.min.js"></script>
	<script>
		(function(a){var y=function(){var d=document.createElement("input");d.setAttribute("onpaste","");return"function"===typeof d.onpaste?"paste":"input"}()+".mask",l=navigator.userAgent,z=/iphone/i.test(l),A=/android/i.test(l),x;a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn",placeholder:"_"};a.fn.extend({caret:function(d,f){var a;if(0!==this.length&&!this.is(":hidden")){if("number"==typeof d)return f="number"===typeof f?f:d,this.each(function(){this.setSelectionRange? this.setSelectionRange(d,f):this.createTextRange&&(a=this.createTextRange(),a.collapse(!0),a.moveEnd("character",f),a.moveStart("character",d),a.select())});this[0].setSelectionRange?(d=this[0].selectionStart,f=this[0].selectionEnd):document.selection&&document.selection.createRange&&(a=document.selection.createRange(),d=0-a.duplicate().moveStart("character",-1E5),f=d+a.text.length);return{begin:d,end:f}}},unmask:function(){return this.trigger("unmask")},mask:function(d,f){var l,t,h,n,p,m;if(!d&& 0<this.length)return l=a(this[0]),l.data(a.mask.dataName)();f=a.extend({placeholder:a.mask.placeholder,completed:null},f);t=a.mask.definitions;h=[];n=m=d.length;p=null;a.each(d.split(""),function(a,f){"?"==f?(m--,n=a):t[f]?(h.push(new RegExp(t[f])),null===p&&(p=h.length-1)):h.push(null)});return this.trigger("unmask").each(function(){function q(g){for(;++g<m&&!h[g];);return g}function l(g,a){var b,c;if(!(0>g)){b=g;for(c=q(a);b<m;b++)if(h[b]){if(c<m&&h[b].test(k[c]))k[b]=k[c],k[c]=f.placeholder;else break; c=q(c)}r();e.caret(Math.max(p,g))}}function B(g){var a=g.which,b,c;if(8===a||46===a||z&&127===a){b=e.caret();c=b.begin;b=b.end;if(0===b-c){if(46!==a)for(;0<=--c&&!h[c];);else c=b=q(c-1);b=46===a?q(b):b}u(c,b);l(c,b-1);g.preventDefault()}else 27==a&&(e.val(v),e.caret(0,s()),g.preventDefault())}function C(g){var d=g.which,b=e.caret();if(!(g.ctrlKey||g.altKey||g.metaKey||32>d)&&d){0!==b.end-b.begin&&(u(b.begin,b.end),l(b.begin,b.end-1));b=q(b.begin-1);if(b<m&&(d=String.fromCharCode(d),h[b].test(d))){var c, w,n,p;c=b;for(w=f.placeholder;c<m;c++)if(h[c])if(n=q(c),p=k[c],k[c]=w,n<m&&h[n].test(p))w=p;else break;k[b]=d;r();b=q(b);A?setTimeout(a.proxy(a.fn.caret,e,b),0):e.caret(b);f.completed&&b>=m&&f.completed.call(e)}g.preventDefault()}}function u(g,a){var b;for(b=g;b<a&&b<m;b++)h[b]&&(k[b]=f.placeholder)}function r(){e.val(k.join(""))}function s(a){var d=e.val(),b=-1,c,l;for(pos=c=0;c<m;c++)if(h[c]){for(k[c]=f.placeholder;pos++<d.length;)if(l=d.charAt(pos-1),h[c].test(l)){k[c]=l;b=c;break}if(pos>d.length)break}else k[c]=== d.charAt(pos)&&c!==n&&(pos++,b=c);a?r():b+1<n?(e.val(""),u(0,m)):(r(),e.val(e.val().substring(0,b+1)));return n?c:p}var e=a(this),k=a.map(d.split(""),function(a,d){if("?"!=a)return t[a]?f.placeholder:a}),v=e.val();e.data(a.mask.dataName,function(){return a.map(k,function(a,d){return h[d]&&a!=f.placeholder?a:null}).join("")});e.attr("readonly")||e.one("unmask",function(){e.unbind(".mask").removeData(a.mask.dataName)}).bind("focus.mask",function(){clearTimeout(x);var a;v=e.val();a=s();x=setTimeout(function(){r(); a==d.length?e.caret(0,a):e.caret(a)},10)}).bind("blur.mask",function(){s();e.val()!=v&&e.change()}).bind("keydown.mask",B).bind("keypress.mask",C).bind(y,function(){setTimeout(function(){var a=s(!0);e.caret(a);f.completed&&a==e.val().length&&f.completed.call(e)},0)});s()})}})})(jQuery);
		var curHASH = '';
		function checkHash(){
			if(curHASH != document.location.hash.substr(1)){
				curHASH = document.location.hash.substr(1);
				$('.pv_step').each(function(){
					if($(this).attr('data-step') == curHASH)
						$(this).addClass('active_step');
					else
						$(this).removeClass('active_step');
				});
			}
			window.setTimeout(function(){checkHash()}, 500);
		}
		$(window).load(function(){
			$(".pv_form_input.pv_phone").mask("(999)999-99-99");
			$('.js-close-iframe').click(function(){
				window.parent.closeIframe();
			});
			$('.js-step-back').click(function(){
				if(document.location.hash == '#contact')
					document.location.hash = '#question';
				if(document.location.hash == '#thank_you')
					window.parent.closeIframe();
			});
			$('.pv_question_send').click(function(){
				if($('.pv_message').val().length<5)
					return false;
				document.location.hash = '#contact';
			});
			$('.pv_step_contact_form .pv_submit').click(function(){
				if($('.pv_step_contact_form .pv_phone').val().length!=14)
					alert('Телефон указан не верно!');
				else{
					$.post('/admin/_phone_collector.php', {
						mess: $('.pv_message').val(), 
						phn: $('.pv_step_contact_form .pv_phone').val(), 
						page: window.parent.location.href
					}, function(ok){
						if(ok != 'OK')
							alert('Ошиька! Попробуйте еще раз');
						else
							document.location.hash = '#thank_you';
					});
				}
			});
			$('.pv_step3 .pv_submit').click(function(){
				if($('.pv_step3 .pv_phone').val().length!=14)
					alert('Телефон указан не верно!');
				else{
					$.post('/admin/_phone_collector.php', {
						name: $('.pv_name').val(), 
						phn: $('.pv_step3 .pv_phone').val(), 
						page: window.parent.location.href
					}, function(ok){
						if(ok != 'OK')
							alert('Ошиька! Попробуйте еще раз');
						else
							document.location.hash = '#thank_you';
					});
				}
			});
			checkHash();
		});
	</script>
</head>
<body style="display: none; opacity: 0">
	<div id="productview" class="is_loaded is_open" style="visibility: visible; opacity: 1;" data-step="question">
		<div class="pv_wrap" data-element="body">
			<div class="nav_head">
				<a  class="js-step-back" data-button="back">
					<svg class="arrow_back" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 306 306" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-left"><polygon points="247.35,35.7 211.65,0 58.65,153 211.65,306 247.35,270.3 130.05,153 		"></polygon></g></g></svg>
				</a>
				<a  class="js-close-iframe" data-button="close">
					<svg class="close" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve"><g><g id="close"><polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"></polygon></g></g></svg>
				</a>
			</div>
			<div class="as1 pv_step pv_step2" data-step="question">
				<div class="pv_message_head">
					<div class="pv_img_manager">
						<img class="head_img" src="/admin/img/13.png" alt="">
					</div>
					<h3 class="pv_title pv_step2_title" data-element="title" style="color:#000;">
						Напишите ваш вопрос и я вам помогу.
					</h3>
				</div>
				<div class="pv_form_input_wrapp time_zone_select message"></div>
				<div class="pv_message_body">
					<textarea data-form-field="question" data-required="true" data-minlength="10" data-name="question" name="pv_message" class="pv_message" placeholder="Пример вопроса: Добрый день! Подскажите, пожалуйста, сроки выполнения заказа."></textarea>
				</div>
				<div class="pv_message_footer">
					<div class="pv_backup_info">
						Получить ответ в ближайшее время
					</div>
					<div class="pv_ca is_multiple js_question_btn_color pv_question_send" data-element="button" data-nextstep="contact" style="color:#fff; background-color:#dc292f;">
						Отправить 
					</div>
				</div>
			</div>
			<div class="pv_step pv_contact_form pv_step_contact_form" data-step="contact">
				<div class="pv_form_head">
					<div class="pv_form_image">
						<img class="head_img" src="/admin/img/13.png" alt="">
					</div>
					<h3 class="pv_form_title pv_step_contact_form_heading" data-element="title">
						Спасибо. Ваш вопрос принят.
					</h3>
					<p class="pv_sub_title pv_step_contact_form_text" data-element="subtitle">
						Оставьте ваши контактные данные.
					</p>
				</div>
				<div class="pv_form_body">
					<div class="pv_form_input_wrapp phone_input">
						<div class="icon"></div>
						<input type="tel" name="pv_phone_number" class="pv_form_input pv_phone" data-form-field="phone" data-name="phone" data-required="true" value="" placeholder="Телефон *">
					</div>
					<div style="font-size: 14px;color: #757575;">*<span style="font-size: 12px;"> Обязательное поле</span><div></div></div>
				</div>
				<div class="pv_ca is_multiple pv_next_step js_question_btn_color pv_submit" data-nextstep="thank_you" data-element="button" data-type="submit" style="color:#fff; background-color:#dc292f;">
					Отправить 
				</div>
			</div>
			<div class="pv_step pv_contact_form pv_step3" data-step="call">
				<div class="pv_form_head">
					<div class="pv_form_image">
						<img class="head_img" src="/admin/img/13.png" alt="">
					</div>
					<h3 class="pv_form_title pv_step_3_heading" data-element="title">
						Хотите мы вам позвоним?
					</h3>
					<p class="pv_sub_title pv_step_3_text" data-element="subtitle">
						Введите ваши контактные данные, мы свяжемся с вами в ближайшее время.
					</p>
				</div>
				<div class="pv_form_body">
					<div class="pv_form_input_wrapp time_zone_select callback">
						<div class="icon"></div>
					</div>
					<div class="pv_form_input_wrapp phone_input">
						<div class="icon"></div>
						<input type="tel" name="pv_phone_number" class="pv_form_input pv_phone" data-form-field="phone" data-name="phone" data-required="true" value="" placeholder="Телефон *">
					</div>
					<div class="pv_form_input_wrapp name_input">
						<div class="icon"></div>
						<input type="text" name="pv_name" class="pv_form_input text_pv pv_name" data-form-field="name" data-name="name" data-minlength="2" value="" placeholder="Имя ">
					</div>
					<div style="font-size: 14px;color: #757575;">*<span style="font-size: 12px;"> Обязательное поле</span><div></div></div>
				</div>
				<div class="pv_ca is_multiple pv_next_step js_question_btn_color pv_submit" data-nextstep="thank_you" data-element="button" data-type="submit" style="color:#fff; background-color:#dc292f;">
					Отправить 
				</div>
				<div class="mobwid_agreement_block" style="font-size: 10px; padding: 0 0 12px 0px; text-align:center; width: 100%; display: none">
					Нажимая на "Отправить", вы даете <br>
					<div class="mobwid_user_agreement pv_next_step" data-nextstep="agreement" data-element="button" data-validation="false" style="text-decoration: underline; cursor: pointer;">
						согласие на обработку своих персональных данных
					</div>
				</div>
			</div>
			<div class="pv_step pv_step4" data-step="thank_you">
				<div class="pv_thank_you" style="background-image: url(/admin/img/thank-you.svg)">
					<h3 class="pv_title pv_step_4_heading" style="color:#000;" data-element="title">
						Спасибо, что обратились к нам.
					</h3>
					<p class="pv_short_desc pv_step_4_text" style="color:#000;" data-element="subtitle">
						В ближайшее время мы свяжемся с вами!
					</p>
				</div>
				<a href="#" class="pv_ca js-close-iframe js_question_btn_color" data-element="button" style="background-color:#dc292f;">Закрыть</a>
			</div>
		</div>
	</div>
	<script>
		try {
			if (typeof document.activeElement.scrollIntoViewIfNeeded === "function") {
				window.addEventListener("resize", () => {
					if (document.activeElement.tagName === "INPUT" || document.activeElement.tagName === "TEXTAREA") {
						window.setTimeout(() => {
							document.activeElement.scrollIntoViewIfNeeded();
						}, 0);
					}
				});
			}
		} catch (e) { }
	</script>
</body>
</html>
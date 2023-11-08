var currentURL      = window.location.href; 
/*** Add Switcher */
function addSwitcher()
{
	var dzSwitcher = `
	<div class="styleswitcher">
	  <div class="switcher-btn-bx">
		<a class="switch-btn closed">
		  <span class="fa fa-gear fa-lg fa-spin"></span>
		</a>
	  </div>
	  <div class="styleswitcher-inner">
		<a href="javascript:void(0);" class="site-button mb-2" onclick="deleteAllCookie()">Delete All Cookie</a>
		<h6 class="switcher-title">Layout</h6>
		<ul class="layout-view theme-panel-save" val="layout">
		  <li class="active wide-layout"><a href="javascript:void(0);" dir="wide-layout">Wide</a></li>
		  <li class="boxed"><a href="javascript:void(0);" dir="boxed">Boxed</a></li>
		</ul>
		<h6 class="switcher-title">Nav</h6>
		<ul class="nav-view theme-panel-save" val="navMode">
		  <li class="active nav-light"><a href="javascript:void(0);" dir="nav-light">Light</a></li>
		  <li class="nav-dark"><a href="javascript:void(0);" dir="nav-dark">Dark</a></li>
		</ul>
		<h6 class="switcher-title">Header</h6>
		<ul class="header-view theme-panel-save" val="header">
		  <li class="active header-fixed"><a href="javascript:void(0);" dir="sticky-header">Fixed</a></li>
		  <li class="header-static"><a href="javascript:void(0);" dir="sticky-no">Static</a></li>
		</ul>
		<h6 class="switcher-title">Color Skin</h6>
		<ul class="color-skins theme-panel-save" val="themeFullColor">
		  <li>
			<a class="theme-skin skin-1" href="javascript:void(0);" dir="css/skin/skin-1" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo.png,images/logo-color.png" title="default Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-2" href="javascript:void(0);" dir="css/skin/skin-2" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo2.png,images/logo-color2.png" title="pink Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-3" href="javascript:void(0);" dir="css/skin/skin-3" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo3.png,images/logo-color3.png" title="sky Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-4" href="javascript:void(0);" dir="css/skin/skin-4" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo4.png,images/logo-color4.png" title="green Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-5" href="javascript:void(0);" dir="css/skin/skin-5" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo5.png,images/logo-color5.png" title="red Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-6" href="javascript:void(0);" dir="css/skin/skin-6" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo6.png,images/logo-color6.png" title="orange Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-7" href="javascript:void(0);" dir="css/skin/skin-7" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo7.png,images/logo-color7.png" title="purple Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-8" href="javascript:void(0);" dir="css/skin/skin-8" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo8.png,images/logo-color8.png" title="blue Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-9" href="javascript:void(0);" dir="css/skin/skin-9" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo9.png,images/logo-color9.png" title="blue Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-10" href="javascript:void(0);" dir="css/skin/skin-10" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo10.png,images/logo-color10.png" title="blue Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-11" href="javascript:void(0);" dir="css/skin/skin-11" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo11.png,images/logo-color11.png" title="blue Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-12" href="javascript:void(0);" dir="css/skin/skin-12" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo12.png,images/logo-color12.png" title="blue Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-13" href="javascript:void(0);" dir="css/skin/skin-13" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo13.png,images/logo-color13.png" title="blue Theme"></a>
		  </li>
		  <li>
			<a class="theme-skin skin-14" href="javascript:void(0);" dir="css/skin/skin-14" data-logo-selector=".logo-dark img,.logo-color img" data-logo-image="images/logo14.png,images/logo-color14.png" title="blue Theme"></a>
		  </li>
		</ul>
		<div class="boxed-options">
			<h6 class="switcher-title">Background Image</h6>
			<ul class="background-switcher theme-panel-save" val="bgImage">
			  <li>
				<img width="35" height="35" alt="" dir="images/background/bg1.jpg" src="images/switcher/switcher-bg/bg1.jpg">
			  </li>
			  <li>
				<img width="35" height="35" alt="" dir="images/background/bg2.jpg" src="images/switcher/switcher-bg/bg2.jpg">
			  </li>
			  <li>
				<img width="35" height="35" alt="" dir="images/background/bg3.jpg" src="images/switcher/switcher-bg/bg3.jpg">
			  </li>
			  <li>
				<img width="35" height="35" alt="" dir="images/background/bg4.jpg" src="images/switcher/switcher-bg/bg4.jpg">
			  </li>
			</ul>
			<h6 class="switcher-title">Background Pattern</h6>
			<ul class="pattern-switcher theme-panel-save" val="bgPatten">
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt1.jpg" src="images/switcher/switcher-patterns/bg1.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt2.jpg" src="images/switcher/switcher-patterns/bg2.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt3.jpg" src="images/switcher/switcher-patterns/bg3.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt4.jpg" src="images/switcher/switcher-patterns/bg4.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt5.jpg" src="images/switcher/switcher-patterns/bg5.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt6.jpg" src="images/switcher/switcher-patterns/bg6.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt7.jpg" src="images/switcher/switcher-patterns/bg7.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt8.jpg" src="images/switcher/switcher-patterns/bg8.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt9.jpg" src="images/switcher/switcher-patterns/bg9.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt10.jpg" src="images/switcher/switcher-patterns/bg10.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt11.jpg" src="images/switcher/switcher-patterns/bg11.jpg">
			  </li>
			  <li>
				<img width="19" height="19" alt="" dir="images/pattern/pt12.jpg" src="images/switcher/switcher-patterns/bg12.jpg">
			  </li>
			</ul>
		</div>
	  </div>
	</div>
	`;
	
	var dzDemos = `
		<div class="dz-demo-panel">
			<div class="demo-btn-bx"><a class="demo-btn-right" href="javascript:void(0);">Check Demo</a></div>
			<div class="dz-demo-inner">
				<div class="dz-demo-header">
					<h3 class="text-white">Home Pages</h3>
					<a class="dz-demo-close" href="javascript:void(0)">
						<span><i class="fa fa-times"></i></span>
					</a>
				</div>
				<div class="dz-demo-content">
					<ul>
						<li>
							<a href="cargo-home-style-1.html?color-full=color_1">
								<img src="images/demos/cargo-home-style-1.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-style-2.html?color-full=color_2">
								<img src="images/demos/cargo-home-style-2.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-style-3.html?color-full=color_3">
								<img src="images/demos/cargo-home-style-3.jpg"/>
							</a>
						</li>
						<li>	
							<a href="cargo-home-style-4.html?color-full=color_4">
								<img src="images/demos/cargo-home-style-4.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-style-5.html?color-full=color_7">
								<img src="images/demos/cargo-home-style-5.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-style-6.html?color-full=color_4">
								<img src="images/demos/cargo-home-style-6.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-style-7.html?color-full=color_3">
								<img src="images/demos/cargo-home-style-7.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-style-8.html?color-full=color_8">
								<img src="images/demos/cargo-home-style-8.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-style-9.html?color-full=color_2">
								<img src="images/demos/cargo-home-style-9.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-style-10.html?color-full=color_6">
								<img src="images/demos/cargo-home-style-10.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-one-page-11.html?color-full=color_1">
								<img src="images/demos/cargo-home-style-11.jpg"/>
							</a>
						</li>
						<li>
							<a href="cargo-home-one-page-12.html?color-full=color_3">
								<img src="images/demos/cargo-home-style-12.jpg"/>
							</a>
						</li>
						<li>
							<a href="construct-home-style-1.html?color-full=color_10">
								<img src="images/demos/construct-home-style-1.jpg"/>
							</a>
						</li>
						<li>
							<a href="construct-home-style-2.html?color-full=color_11">
								<img src="images/demos/construct-home-style-2.jpg"/>
							</a>
						</li>
						<li>
							<a href="construct-home-style-3.html?color-full=color_10">
								<img src="images/demos/construct-home-style-3.jpg"/>
							</a>
						</li>
						<li>
							<a href="construct-home-style-4.html?color-full=color_11">
								<img src="images/demos/construct-home-style-4.jpg"/>
							</a>
						</li>
						<li>
							<a href="education-home-style-1.html?color-full=color_13">
								<img src="images/demos/education-home-style-1.jpg"/>
							</a>
						</li>
						<li>
							<a href="education-home-style-2.html?color-full=color_13">
								<img src="images/demos/education-home-style-2.jpg"/>
							</a>
						</li>
						<li>
							<a href="education-home-style-3.html?color-full=color_13">
								<img src="images/demos/education-home-style-3.jpg"/>
							</a>
						</li>
						<li>
							<a href="education-home-style-4.html?color-full=color_13">
								<img src="images/demos/education-home-style-4.jpg"/>
							</a>
						</li>
						<li>
							<a href="garden-home-style-1.html?color-full=color_9">
								<img src="images/demos/garden-home-style-1.jpg"/>
							</a>
						</li>
						<li>
							<a href="garden-home-style-2.html?color-full=color_9">
								<img src="images/demos/garden-home-style-2.jpg"/>
							</a>
						</li>
						<li>
							<a href="garden-home-style-3.html?color-full=color_9">
								<img src="images/demos/garden-home-style-3.jpg"/>
							</a>
						</li>
						<li>
							<a href="garden-home-style-4.html?color-full=color_9">
								<img src="images/demos/garden-home-style-4.jpg"/>
							</a>
						</li>
						<li>
							<a href="garden-home-one-page-5.html?color-full=color_9">
								<img src="images/demos/garden-home-style-5.jpg"/>
							</a>
						</li>
						<li>
							<a href="gym-home-style-1.html?color-full=color_5">
								<img src="images/demos/gym-home-style-1.jpg"/>
							</a>
						</li>
						<li>
							<a href="gym-home-style-2.html?color-full=color_14">
								<img src="images/demos/gym-home-style-2.jpg"/>
							</a>
						</li>
						<li>
							<a href="gym-home-style-3.html?color-full=color_5">
								<img src="images/demos/gym-home-style-3.jpg"/>
							</a>
						</li>
						<li>
							<a href="gym-home-style-4.html?color-full=color_14">
								<img src="images/demos/gym-home-style-4.jpg"/>
							</a>
						</li>
						<li>
							<a href="sports-home-style-1.html?color-full=color_11">
								<img src="images/demos/sports-home-style-1.jpg"/>
							</a>
						</li>
						<li>
							<a href="sports-home-style-2.html?color-full=color_11">
								<img src="images/demos/sports-home-style-2.jpg"/>
							</a>
						</li>
						<li>
							<a href="sports-home-style-3.html?color-full=color_11">
								<img src="images/demos/sports-home-style-3.jpg"/>
							</a>
						</li>
						<li>
							<a href="sports-home-style-4.html?color-full=color_11">
								<img src="images/demos/sports-home-style-4.jpg"/>
							</a>
						</li>
						<li>
							<a href="yoga-home-style-1.html?color-full=color_12">
								<img src="images/demos/yoga-home-style-1.jpg"/>
							</a>
						</li>
						<li>
							<a href="yoga-home-style-2.html?color-full=color_12">
								<img src="images/demos/yoga-home-style-2.jpg"/>
							</a>
						</li>
						<li>
							<a href="yoga-home-style-3.html?color-full=color_12">
								<img src="images/demos/yoga-home-style-3.jpg"/>
							</a>
						</li>
						<li>
							<a href="yoga-home-style-4.html?color-full=color_12">
								<img src="images/demos/yoga-home-style-4.jpg"/>
							</a>
						</li>
					</ul>
				</div>	
			</div>
		</div>
	`;
	
	
	
	//alert(dzSwitcher);
	
	if($("#dzSwitcher").length == 0) {
		jQuery('body').append(dzSwitcher);
		jQuery('body').append(dzDemos);
	}
}

jQuery(window).on('load',function(){
	
	
	
	//=== Switcher panal slide function	=====================//
	jQuery('.styleswitcher').animate({
		'left': '-230px'
	});
	jQuery('.styleswitcher-right').animate({
		'right': '-230px',
		'left': 'auto'
	});
	//jQuery('.switch-btn').addClass('closed');
	//=== Switcher panal slide function END	=====================//
	
});
	
$(function(){	
	

	"use strict";
	
	addSwitcher();
	
	//=== Switcher panal slide function	=====================//
	jQuery('.switch-btn').on('click',function () {	
		if (jQuery(this).hasClass('open')) {
			jQuery(this).addClass('closed');
			jQuery(this).removeClass('open');
			jQuery('.styleswitcher').animate({
				'left': '-230px'
			});
			jQuery('.styleswitcher-right').animate({
				'right': '-230px',
				'left': 'auto'
			});
		} else {
			if (jQuery(this).hasClass('closed')) {
			jQuery(this).addClass('open');
			jQuery(this).removeClass('closed');
			jQuery('.styleswitcher').animate({
				'left': '0'
			});
			jQuery('.styleswitcher-right').animate({
				'right': '0',
				'left': 'auto'
			});
			}
		}	
	});
	jQuery('.demo-btn-right').on('click',function () {	
		jQuery('.dz-demo-panel').toggleClass('show');
	});
	jQuery('.dz-demo-close').on('click',function () {	
		jQuery('.dz-demo-panel').removeClass('show');
	});
	//=== Switcher panal slide function END	=====================//
	
	//=== Color css change function	=====================//
	
	/* url color set */
		var getUrlParameter = function getUrlParameter(sParam) {
			var sPageURL = window.location.search.substring(1),
				sURLVariables = sPageURL.split('&'),
				sParameterName,
				i;

			for (i = 0; i < sURLVariables.length; i++) {
				sParameterName = sURLVariables[i].split('=');

				if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
				}
			}
			return false;
		};
		
		var themeColor =  getUrlParameter('color-full');
		if(themeColor){
			var index = themeColor?.split('_')[1];
			const logoUrls = document.querySelectorAll('.color-skins li a');
			var logoImage = $(logoUrls[index - 1]).attr('data-logo-image');
			var logoSelector = $(logoUrls[index - 1]).attr('data-logo-selector');
			if(logoUrls && index){
				setCookie('themeFullColor_value','css/skin/skin-'+index,1);
				setCookie('themeFullColor_logo_selector',logoSelector,1);
				setCookie('themeFullColor_logo_image',logoImage,1);
			}
		}
		/* url color set */
		
	// Color changer
		
	jQuery(document).on('click', '.color-skins li a', function(){
		jQuery('.color-skins li').removeClass('active');
		jQuery(this).parent('li').addClass('active');
		
		jQuery(".skin").attr("href", jQuery(this).attr('dir') + '.css');
		
		var logoSelectorArr = jQuery(this).data('logo-selector').split(',');
		var logoSrcArr		= jQuery(this).data('logo-image').split(',');
		var arrCount = logoSelectorArr.length;
		
		for(var i=0; i<arrCount; i++){
			if(currentURL.indexOf('garden') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/garden/'));
			}else if(currentURL.indexOf('construct') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/construct/'));
			}else if(currentURL.indexOf('yoga') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/yoga/'));
			}else if(currentURL.indexOf('education') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/education/'));
			}else if(currentURL.indexOf('gym') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/gym/'));
			}else if(currentURL.indexOf('sports') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/sports/'));
			}else{
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i]);
			}
		}
		
		return false;
	});
		
	//=== Color css change function	=====================//	
	
	//=== Background image change function	=====================//
	jQuery('.background-switcher li img').on('click',function(){
		jQuery('.pattern-switcher li').removeClass('active');
		jQuery('.background-switcher li').removeClass('active');
		jQuery(this).parent().addClass('active');
		var imgbg = jQuery(this).attr('dir');
		jQuery('#bg').css({backgroundImage: "url("+imgbg+")"});
	});
	//=== Background image change function	End=====================//
	
	
	//=== Background pattern change function	=====================//
	jQuery('.pattern-switcher li img').on('click',function(){
		jQuery('.pattern-switcher li').removeClass('active');
		jQuery('.background-switcher li').removeClass('active');
		jQuery(this).parent().addClass('active');
		var imgbg = jQuery(this).attr('dir');
		jQuery('#bg').css({backgroundImage: "url("+imgbg+")"});
		jQuery("#bg").css( "background-size", "auto")
	});
	//=== Background pattern change function End=====================//
	

	//=== Layout boxed & fullscreen change function	=====================//
	jQuery('.layout-view li a').on('click', function(){
		jQuery('.layout-view li').removeClass('active');
		jQuery(this).parent().addClass('active');	
		jQuery("body").removeClass('wide-layout').removeClass('boxed');
		jQuery("body").addClass($(this).attr('dir'));
		if($(this).attr('dir') === 'boxed'){
			$('.boxed-options').slideDown();
		}else{
			$('.boxed-options').slideUp();
		}
	});
	
	if(getCookie('layout_value').length === 0 || getCookie('layout_value').length == 1){
		$('.boxed-options').slideUp();
	}
	
	//=== Layout boxed & fullscreen change function	END=====================//
	


	//=== Nav light & dark change function	END=====================//
	jQuery('.nav-view li a').on('click', function(){
		jQuery('.nav-view li').removeClass('active');
		jQuery(this).parent().addClass('active');
		jQuery(".header-nav").removeClass('nav-dark').removeClass('nav-light');
		jQuery(".header-nav").addClass($(this).attr('dir'));
	});
	
	//=== Nav light & dark change function	END=====================//	
	
	jQuery('.header-view li a').on('click', function(){
		jQuery('.header-view li').removeClass('active');
		jQuery(this).parent().addClass('active');
		jQuery(".main-bar-wraper").removeClass('sticky-no').removeClass('sticky-header');	
		jQuery(".main-bar-wraper").addClass($(this).attr('dir'));
	});
	
});


jQuery(document).ready(function(){
	jQuery('.theme-panel-save li a, .theme-panel-save li img').on('click', function() {

		var optionValue =  jQuery(this).attr('dir');
		var optionData =  jQuery(this).parent().parent().attr('val');

		if(optionData == 'bgImage'){
			deleteCookie('bgPatten_value');
		}else if(optionData == 'bgPatten'){
			deleteCookie('bgImage_value');
		}else if(optionData == 'themeFullColor'){
			var themeLogoSelector =  jQuery(this).data('logo-selector');
			var themeLogoImage =  jQuery(this).data('logo-image');
			setCookie(optionData+'_logo_selector',themeLogoSelector,1);
			setCookie(optionData+'_logo_image',themeLogoImage,1);
		}
		setCookie(optionData+'_value',optionValue,1);
	});

	setThemePanel();
});


var themeOption = ['themeFullColor','layout','navMode','header','bgImage','bgPatten'];


function setThemePanel(){
	jQuery.each(themeOption, function(index, themeOptionItem) {
		themeOptionItemValue = getCookie(themeOptionItem+'_value');
		if(themeOptionItemValue != ''){
				if(themeOptionItem == 'themeFullColor'){
					jQuery(".skin").attr("href", themeOptionItemValue+".css");
					/* To Selected */
					jQuery('.color-skins [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
				}else if(themeOptionItem == 'layout'){
					jQuery("body").addClass(themeOptionItemValue);	
					if(themeOptionItemValue === 'boxed'){
						$('.boxed-options').slideDown();
					}else{
						$('.boxed-options').slideUp();
					}
					/* To Selected */
					jQuery('.layout-view li').removeClass('active');
					jQuery('.layout-view [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
				}else if(themeOptionItem == 'navMode'){
					jQuery(".header-nav").addClass(themeOptionItemValue);	
					/* To Selected */
					jQuery('.nav-view li').removeClass('active');
					jQuery('.nav-view [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
				}else if(themeOptionItem == 'header'){
					jQuery(".main-bar-wraper").addClass(themeOptionItemValue);
					/* To Selected */
					jQuery('.header-view li').removeClass('active');
					jQuery('.header-view [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
				}else if(themeOptionItem == 'bgImage'){
					jQuery('#bg').css({backgroundImage: "url("+themeOptionItemValue+")"});
					/* To Selected */
					jQuery('.background-switcher li').removeClass('active');
					jQuery('.background-switcher [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
				}else if(themeOptionItem == 'bgPatten'){
					jQuery('#bg').css({backgroundImage: "url("+themeOptionItemValue+")"});
					jQuery("#bg").css( "background-size", "auto");
					/* To Selected */
					jQuery('.pattern-switcher li').removeClass('active');
					jQuery('.pattern-switcher [dir="'+themeOptionItemValue+'"]').parent().addClass('active');
				}
		}
	});
	
	var tf_logo_selector = getCookie('themeFullColor_logo_selector');
	if(tf_logo_selector != '')
	{
		var tf_logo_image = getCookie('themeFullColor_logo_image');
		var logoSelectorArr = tf_logo_selector.split(',');
		var logoSrcArr		= tf_logo_image.split(',');
		var arrCount = logoSelectorArr.length;
		for(var i=0; i<arrCount; i++){
			if(currentURL.indexOf('garden') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/garden/'));
			}else if(currentURL.indexOf('construct') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/construct/'));
			}else if(currentURL.indexOf('yoga') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/yoga/'));
			}else if(currentURL.indexOf('education') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/education/'));
			}else if(currentURL.indexOf('gym') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/gym/'));
			}else if(currentURL.indexOf('sports') > -1){
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i].replace('images/','images/sports/'));
			}else{
				jQuery(logoSelectorArr[i]).attr('src',logoSrcArr[i]);
			}
		}
	}
}



function setCookie(cname, cvalue, exhours) {
		var d = new Date();
		d.setTime(d.getTime() + (30*60*1000)); /* 30 Minutes*/
		var expires = "expires="+ d.toString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function deleteCookie(cname) {
		var d = new Date();
		d.setTime(d.getTime() + (1)); /* 1/1000 second*/
		var expires = "expires="+ d.toString();
		document.cookie = cname + "=;" + expires + ";path=/";
}

function deleteAllCookie() {
	jQuery.each(themeOption, function(index, themeOptionItem) {
			deleteCookie(themeOptionItem+'_value');
			deleteCookie(themeOptionItem+'_logo_selector');
			deleteCookie(themeOptionItem+'_logo_image');
	});
	location.reload();
}
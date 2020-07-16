<?php
/*
 * Template Name: Homepage
*/
?>
<?php get_header();?>
<?php while (have_posts()) : the_post();?>
<div id="preloader"><div class="circles"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>
		<div id="wrap">
			<nav id="nav-logo-menu-btn-2" class="navbar navbar-expand-lg light">
    			<div class="container">
        			<div class="row align-items-center">
            			<div class="col-auto">
            			<?php if(get_field('header_logo', 'option') != "" ):?>
                			<a class="navbar-brand smooth" href="<?php echo get_site_url();?>" target="_self">
                    			<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif" data-src="<?php echo get_field('header_logo', 'option')?>" height="50px" class="lazy mw-100" alt="">
                			</a>
                			<?php endif;?>
            			</div>
            			<div class="col-auto hidden-lg ml-auto">
                			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target=".main-menu-collapse" aria-controls="navbarMenuContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            			</div>
            			<div class="col-lg-auto collapse navbar-collapse main-menu-collapse mr-auto">
                			<ul class="navbar-nav">
                    			<li class="nav-item active">
                        			<a class="nav-link smooth" href="#header-carousel-5" target="_self">Trang chủ</a>
                    			</li>
                    			<li class="nav-item">
                        			<a class="nav-link smooth" href="#benefits-3col-3" target="_self">Về chúng tôi</a>
                    			</li>
                    			<li class="nav-item">
									<a class="nav-link" href="<?php echo get_site_url();?>/smart-city/" target="_self">Dự án </a>
									<span class="caret" data-toggle="collapse" data-target="#menu-main-menu" aria-expanded="false" aria-controls="menu-main-menu"></span>
                    				<?php wp_nav_menu(array(
            						    'theme_location'  => 'main_menu',
            						    'container'       => '',
										'menu_class'		=>'sub-menu dropdown-menu',
            						    'link_after'        => '<span class="arrow"><i class="fas fa-chevron-down"></i></span>'
            						));?>
                        			
                    			</li>
                    			<li class="nav-item">
                        			<a class="nav-link smooth" href="#footer-logo-text-4" target="_self">Liên hệ</a>
                    			</li>
                			</ul>
            			</div>
            			<div class="col-auto collapse navbar-collapse main-menu-collapse">
                			<div class="">
                    			<a class="btn btn-primary smooth fx-btn-glow" href="tel:<?php echo get_field('phone_number', 'option'); ?>" style="font-size: 20px;" target="_self"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 320 512" class="icon icon-pos-left" style="fill: rgb(255, 255, 255);"><path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z"></path></svg><strong class=""><?php echo get_field('phone_number', 'option'); ?></strong></a>
                			</div>
            			</div>
        			</div>
    			</div>
    			<div class="bg-wrap">
        			<div class="bg lazy"></div>
    			</div>
			</nav><section id="header-carousel-5" class="section-carousel overall carousel-nav-none carousel-dots-aside-bottom light">
    			<div class="header-carousel-single-autoheight owl-drag">
    			<?php 
                $images = get_field('slider_images');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $images ): ?>
                        <?php foreach( $images as $image_url ): ?>
                                <img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif" data-src="<?php echo $image_url;?>" alt="image" class="lazy item w-100"> 
                        <?php endforeach; ?>
                <?php endif; ?>
    			</div>
    			<div class="bg-wrap">
        			<div class="bg lazy"></div>
    			</div>
			</section><section id="inner-media" class="pt-50 pb-50 light text-center border-bottom-container">
    			<div class="container">
        			<div class="row">
        			
            			<div class="col-md-10 ml-auto mr-auto" style="">
              			<a href="<?php echo get_site_url();?>/smart-city/" class="btn btn-lg fx-btn-pill fx-btn-wave fx-btn-zoom mb-50 btn-primary smooth" style="padding: 25px 70px; font-size: 22px;" target="_self"><strong class="">TÌM HIỂU THÊM</strong></a>
                			<div class="video-iframe embed-responsive embed-responsive-16by9">
                    			<?php echo get_field('video_iframe');?>
                			</div>
            			</div>
        			</div>
    			</div>
    			<div class="bg-wrap">
        			<div class="bg lazy"></div>
    			</div>
			</section><section id="action-text-btn-2" class="pt-50 pb-50 dark text-center text-sm-left text-md-left">
    			<div class="container">
        			<div class="row align-items-center">
            			<div class="col-md-auto mr-auto mb-50 mb-md-0" style="z-index: 10;">
                			<h3 class="text-primary fx-text-shadow slim_relative" style="overflow: visible; color: rgb(253, 205, 172);">
                				<strong class=""><?php echo get_field('title_1');?></strong>
                			</h3>
                			<h4 class="fx-text-glow slim_relative" style=""><?php echo get_field('title_2');?></h4>
            			</div>
            			<div class="col-md-auto">
                			<a href="<?php echo get_site_url();?>/smart-city/" class="btn btn-lg fx-btn-pill fx-btn-wave fx-btn-zoom smooth btn-primary" target="_self"><strong class="">ĐĂNG KÝ NGAY<svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" class="icon icon-pos-right dark svg-default"><path d="m4.82528129 7h11.17471871v2h-11.16842704l3.23949485 3.2394949-1.41421356 1.4142135-4.24264069-4.24264067-1.41421356-1.41421357 5.65685425-5.65685425 1.41421356 1.41421357z" fill-rule="evenodd" transform="matrix(-1 0 0 1 17 0)" class=""></path></svg></strong></a>
            			</div>
        			</div>
    			</div>
    			<div class="bg-wrap">
        			<div class="bg lazy"></div>
    			</div>
			</section><section id="benefits-3col-3" class="pt-50 text-center light pt-sm-75 pt-md-75 pb-30">
    			<div class="container">
        			<div class="row">
            			<div class="col-lg-12">
                			<h3 class="slim_relative"><strong class=""><span class="text-uppercase"><?php echo get_field('title');?></span></strong></h3>
                			<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 100 20" width="100" class="svg-secondary mb-30"><path d="m0 9h100v2h-100z" fill-rule="evenodd" class=""></path></svg>
                
            			</div>
            			<div class="col-md-4">
                			<div class="content-box padding-x2 mb-30 mb-sm-0 mb-md-0">
                  			<div class="content-box bg-default dark mb-30 padding-x2" style="background: linear-gradient(135deg, rgb(240, 174, 29), rgb(198, 132, 38));">
                    			<svg xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 20 20" width="64" enable-background="new 0 0 64 64" class="icon svg-default"><path d="m16.5 20h-14c-.827 0-1.5-.673-1.5-1.5v-14c0-.827.673-1.5 1.5-1.5h1c.276 0 .5.224.5.5s-.224.5-.5.5h-1c-.276 0-.5.224-.5.5v14c0 .276.224.5.5.5h14c.276 0 .5-.224.5-.5v-14c0-.276-.224-.5-.5-.5h-1c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1c.827 0 1.5.673 1.5 1.5v14c0 .827-.673 1.5-1.5 1.5z"></path><path d="m13.501 5s0 0-.001 0h-8c-.276 0-.5-.224-.5-.5 0-1.005.453-1.786 1.276-2.197.275-.138.547-.213.764-.254.213-1.164 1.235-2.049 2.459-2.049s2.246.885 2.459 2.049c.218.041.489.116.764.254.816.408 1.268 1.178 1.276 2.17.001.009.001.018.001.027 0 .276-.224.5-.5.5zm-7.441-1h6.88c-.096-.356-.307-.617-.638-.79-.389-.203-.8-.21-.805-.21-.276 0-.497-.224-.497-.5 0-.827-.673-1.5-1.5-1.5s-1.5.673-1.5 1.5c0 .276-.224.5-.5.5-.001 0-.413.007-.802.21-.331.173-.542.433-.638.79z" class=""></path><path d="m9.5 3c-.132 0-.261-.053-.353-.147s-.147-.222-.147-.353.053-.261.147-.353c.093-.093.222-.147.353-.147s.261.053.353.147c.093.093.147.222.147.353s-.053.26-.147.353c-.093.093-.222.147-.353.147z"></path><path d="m8 14c-.128 0-.256-.049-.354-.146l-1.5-1.5c-.195-.195-.195-.512 0-.707s.512-.195.707 0l1.146 1.146 4.146-4.146c.195-.195.512-.195.707 0s.195.512 0 .707l-4.5 4.5c-.098.098-.226.146-.354.146z"></path></svg>
                  			</div>
                    			<h4 class="mb-20 text-primary fx-text-thin-shadow slim_relative"><strong class="">Thông tin minh bạch</strong></h4>
                			</div>
            			</div>
            			<div class="col-md-4">
                			<div class="content-box padding-x2 mb-30 mb-sm-0 mb-md-0" style="">
                  			<div class="content-box bg-default dark mb-30 padding-x2" style="background: linear-gradient(135deg, rgb(240, 174, 29), rgb(198, 132, 38));">
                    			<svg xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 20 20" width="64" enable-background="new 0 0 64 64" class="icon svg-default"><path d="m15.129 7.25c-.138-.239-.444-.321-.683-.183l-4.92 2.841-3.835-2.685c-.226-.158-.538-.103-.696.123s-.103.538.123.696l4.096 2.868c.001.001.002.001.003.002.008.006.017.011.025.016.003.002.005.003.008.005.008.005.017.009.025.014.003.001.005.003.008.004.01.005.02.009.03.013.007.003.013.005.02.007.004.001.008.003.012.004.007.002.014.004.022.006.004.001.008.002.011.003.007.002.014.003.022.005.004.001.008.002.012.002.007.001.014.002.021.003.005.001.01.001.015.002.006.001.012.001.018.002.009.001.018.001.027.001h.006s0 0 .001 0c.019 0 .037-.001.056-.003h.003c.018-.002.036-.005.054-.01.002 0 .003-.001.005-.001.017-.004.034-.009.051-.015.003-.001.005-.002.008-.003.016-.006.031-.013.047-.02.003-.002.006-.003.01-.005.006-.003.011-.006.017-.009l5.196-3c.239-.138.321-.444.183-.683z" class=""></path><path d="m16.32 17.113c1.729-1.782 2.68-4.124 2.68-6.613 0-2.37-.862-4.608-2.438-6.355l.688-.688.646.646c.098.098.226.146.354.146s.256-.049.354-.146c.195-.195.195-.512 0-.707l-2-2c-.195-.195-.512-.195-.707 0s-.195.512 0 .707l.646.646-.688.688c-1.747-1.576-3.985-2.438-6.355-2.438s-4.608.862-6.355 2.438l-.688-.688.646-.646c.195-.195.195-.512 0-.707s-.512-.195-.707 0l-2 2c-.195.195-.195.512 0 .707.098.098.226.146.354.146s.256-.049.354-.146l.646-.646.688.688c-1.576 1.747-2.438 3.985-2.438 6.355 0 2.489.951 4.831 2.68 6.613l-2.034 2.034c-.195.195-.195.512 0 .707.098.098.226.146.354.146s.256-.049.354-.146l2.06-2.06c1.705 1.428 3.836 2.206 6.087 2.206s4.382-.778 6.087-2.206l2.059 2.059c.098.098.226.146.354.146s.256-.049.354-.146c.195-.195.195-.512 0-.707l-2.034-2.034zm-6.32 1.872v-.485c0-.276-.224-.5-.5-.5s-.5.224-.5.5v.485c-4.29-.25-7.735-3.695-7.985-7.985h.485c.276 0 .5-.224.5-.5s-.224-.5-.5-.5h-.485c.25-4.29 3.695-7.735 7.985-7.985v.485c0 .276.224.5.5.5s.5-.224.5-.5v-.485c4.29.25 7.735 3.695 7.985 7.985h-.485c-.276 0-.5.224-.5.5s.224.5.5.5h.485c-.25 4.29-3.695 7.735-7.985 7.985z"></path></svg>
                  			</div>
                    			<h4 class="mb-20 fx-text-thin-shadow text-primary slim_relative"><strong class="">Tiết kiệm thời gian, tiền bạc</strong></h4>
                			</div>
            			</div>
            			<div class="col-md-4">
                			<div class="content-box padding-x2 mb-30 mb-sm-0 mb-md-0">
                  			<div class="content-box bg-default dark mb-30 padding-x2" style="background: linear-gradient(135deg, rgb(240, 174, 29), rgb(198, 132, 38));">  
                  			<svg xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 20 20" width="64" enable-background="new 0 0 64 64" class="icon svg-default"><path d="m18.5 5h-3.001c.315-.418.501-.938.501-1.5 0-1.378-1.122-2.5-2.5-2.5-1.39 0-2.556 1.101-3.127 1.758-.346.397-.644.823-.873 1.235-.229-.412-.527-.837-.873-1.235-.571-.656-1.737-1.758-3.127-1.758-1.378 0-2.5 1.122-2.5 2.5 0 .562.187 1.082.501 1.5h-3.001c-.276 0-.5.224-.5.5v3c0 .276.224.5.5.5h.5v9.5c0 .827.673 1.5 1.5 1.5h14c.827 0 1.5-.673 1.5-1.5v-9.5h.5c.276 0 .5-.224.5-.5v-3c0-.276-.224-.5-.5-.5zm-7.373-1.586c.782-.899 1.647-1.414 2.373-1.414.827 0 1.5.673 1.5 1.5s-.673 1.5-1.5 1.5h-3.378c.173-.442.523-1.032 1.005-1.586zm-.127 15.586h-3v-13h3zm-7-15.5c0-.827.673-1.5 1.5-1.5.726 0 1.591.515 2.373 1.414.482.554.832 1.144 1.005 1.586h-3.378c-.827 0-1.5-.673-1.5-1.5zm-3 2.5h6v2h-6zm1 12.5v-9.5h5v10h-4.5c-.276 0-.5-.224-.5-.5zm15 0c0 .276-.224.5-.5.5h-4.5v-10h5zm1-10.5h-6v-2h6z" class=""></path></svg>
                  			</div>
                    			<h4 class="mb-20 text-primary fx-text-thin-shadow slim_relative"><b class="">Ưu đãi hấp dẫn</b></h4>
                    
                    
                			</div>
            			</div>
        			</div>
    			</div>
    			<div class="bg-wrap">
        			<div class="bg lazy"></div>
    			</div>
			</section><section id="subscribe-block" class="pt-50 pb-50 text-center light pt-sm-75 pt-md-75 pb-sm-75 pb-md-75">
    			<div class="container">
        			<div class="row">
            			<div class="col-md-6 ml-auto mr-auto">
                			<div class="content-box padding-x3 bg-default shadow" data-style="background-image: url('<?php echo get_template_directory_uri();?>/images/background/envelope-bg.png'); background-size: contain; background-position: center top; background-repeat: no-repeat;">
                    			<h3 class="mb-20 slim_relative" style=""><strong><?php echo get_field('register_title');?></strong></h3>
                    			<?php echo do_shortcode(get_field('form'));?>
                    			<p class="small mb-0">*Thông tin của quý khách luôn được bảo mật tuyệt đối.</p>
                			</div>
            			</div>
        			</div>
    			</div>
    			<div class="bg-wrap">
        			<div class="bg lazy"></div>
    			</div>
			</section><footer id="footer-logo-text-4" class="pt-75 pb-75 text-center dark" style="">
    			<div class="container">
        			<div class="row">
            			<div class="col-md-8 mr-auto ml-auto" style="">
            				<?php if(get_field('footer_logo', 'option') != "" ):?>
                			<img class="lazy mw-100 mb-20" src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif" data-src="<?php echo get_field('footer_logo', 'option'); ?>" height="70px" alt="logo" style="position: relative;">
                			<?php endif;?>
                			<h4 class="lead" style="position: relative;"><span class="text-uppercase">
                			<strong class=""><?php echo get_field('footer_line_1', 'option'); ?></strong></span>
                			</h4>
              			<p class="text-secondary mb-30 slim_relative" style="position: relative;"><?php echo get_field('footer_line_2', 'option'); ?></p>
              			<a class="btn btn-primary smooth fx-btn-zoom" href="tel:<?php echo get_field('phone_number', 'option'); ?>" style="font-size: 24px;" target="_self"><svg xmlns="http://www.w3.org/2000/svg" width="26px" height="26px" viewBox="0 0 320 512" class="icon icon-pos-left" style="fill: rgb(255, 255, 255);"><path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z" class=""></path></svg><strong class=""><?php echo get_field('phone_number', 'option'); ?></strong></a>
            			</div>
          			<div class="col-12" style="">
            			<div class="inline-group mt-30 mb-20 mb-md-0 text-center">                    
                    			<a href="<?php echo get_field('facebook', 'option'); ?>" class="smooth" target="_self"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 16 16" width="30" class="icon svg-default" style=""><path d="m8.54611842 16h-7.66304125c-.48785295 0-.88307717-.3954695-.88307717-.8831324v-14.23379728c0-.48778708.3952863-.88307032.88307717-.88307032h14.23390773c.4876667 0 .8830151.39528324.8830151.88307032v14.23379728c0 .487725-.3954105.8831324-.8830151.8831324h-4.0772165v-6.19608178h2.0797387l.3114113-2.41472301h-2.39115v-1.54164808c0-.69911803.1941355-1.1755439 1.1966615-1.1755439l1.2786739-.00055875v-2.15974763c-.2211418-.0294274-.980176-.09517343-1.8632531-.09517343-1.84357263 0-3.10573228 1.12531866-3.10573228 3.19187953v1.78079226h-2.08507782v2.41472301h2.08507782z" fill="#4460a0" fill-rule="evenodd" class=""></path></svg></a>
                    			<a href="<?php echo get_field('youtube', 'option'); ?>" class="smooth" target="_self"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 17 17" width="30" class="icon svg-default" style=""><path d="m8.301 6.422c.437 0 .769-.161 1.006-.484.181-.237.265-.617.265-1.12v-1.66c0-.503-.084-.873-.265-1.11-.238-.321-.57-.483-1.006-.483-.428 0-.76.161-.995.483-.181.238-.266.608-.266 1.111v1.66c0 .503.085.873.266 1.12.235.322.567.483.995.483zm-.408-3.434c0-.436.133-.654.408-.654.285 0 .408.218.408.654v1.992c0 .437-.123.664-.408.664-.275 0-.408-.228-.408-.664zm2.457 3.083c-.048-.143-.075-.37-.075-.711v-3.738h.863v3.481c0 .2 0 .313.01.333.019.133.085.208.199.208.17 0 .35-.133.54-.408v-3.614h.863v4.734h-.863v-.522c-.341.398-.663.588-.978.588-.275 0-.474-.113-.559-.351zm3.283 5.74v.436h-.854v-.436c0-.427.143-.646.427-.646.284.001.427.219.427.646zm-9.279-10.037c-.208-.588-.416-1.186-.617-1.774h1.007l.673 2.495.645-2.495h.968l-1.148 3.785v2.571h-.948v-2.571c-.086-.465-.276-1.129-.58-2.011zm10.929 7.011c-.171-.75-.788-1.3-1.518-1.385-1.746-.19-3.511-.19-5.266-.19s-3.52 0-5.256.19c-.738.085-1.346.635-1.526 1.385-.237 1.062-.247 2.22-.247 3.32 0 1.091 0 2.257.247 3.32.171.75.788 1.3 1.518 1.376 1.745.199 3.51.199 5.265.199s3.52 0 5.266-.199c.729-.076 1.337-.626 1.518-1.376.237-1.062.247-2.229.247-3.32-.001-1.1-.001-2.258-.248-3.32zm-9.8.958h-1.014v5.398h-.949v-5.398h-.997v-.892h2.96zm2.562 5.398h-.845v-.512c-.342.389-.664.579-.968.579-.274 0-.474-.114-.55-.351-.048-.142-.076-.361-.076-.692v-3.709h.845v3.453c0 .2 0 .304.009.333.02.132.086.199.199.199.172 0 .352-.132.541-.398v-3.586h.845zm3.226-1.404c0 .437-.02.749-.086.948-.104.342-.342.522-.674.522-.303 0-.598-.171-.883-.522v.456h-.843v-6.29h.843v2.059c.275-.342.57-.512.883-.512.332 0 .57.18.674.531.066.19.086.502.086.939zm3.206-.778h-1.698v.825c0 .437.143.654.437.654.209 0 .332-.113.38-.341.009-.047.019-.237.019-.579h.863v.124c0 .275 0 .465-.019.55-.02.189-.096.36-.199.512-.229.332-.579.503-1.024.503-.446 0-.779-.161-1.025-.484-.18-.228-.275-.598-.275-1.101v-1.641c0-.503.086-.863.266-1.101.247-.323.579-.484 1.016-.484.428 0 .759.161 1.005.484.172.237.257.597.257 1.101v.978zm-4.051-1.158v2.002c0 .427-.124.635-.37.635-.143 0-.285-.066-.428-.208v-2.855c.143-.143.285-.209.428-.209.246 0 .37.218.37.635z" class=""></path></svg></a>
                    			<a href="<?php echo get_field('feed', 'option'); ?>" class="smooth" target="_self"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 448 512" class="icon svg-default" style=""><path d="M128.081 415.959c0 35.369-28.672 64.041-64.041 64.041S0 451.328 0 415.959s28.672-64.041 64.041-64.041 64.04 28.673 64.04 64.041zm175.66 47.25c-8.354-154.6-132.185-278.587-286.95-286.95C7.656 175.765 0 183.105 0 192.253v48.069c0 8.415 6.49 15.472 14.887 16.018 111.832 7.284 201.473 96.702 208.772 208.772.547 8.397 7.604 14.887 16.018 14.887h48.069c9.149.001 16.489-7.655 15.995-16.79zm144.249.288C439.596 229.677 251.465 40.445 16.503 32.01 7.473 31.686 0 38.981 0 48.016v48.068c0 8.625 6.835 15.645 15.453 15.999 191.179 7.839 344.627 161.316 352.465 352.465.353 8.618 7.373 15.453 15.999 15.453h48.068c9.034-.001 16.329-7.474 16.005-16.504z" class=""></path></svg></a>
                			</div>
          			<p class="mt-20 text-secondary small" style=""><?php echo get_field('copyright', 'option'); ?></p>
            			</div>
          
        			</div>
    			</div>
    			<div class="bg-wrap">
        			<div class="bg lazy"></div>
    			</div>
			</footer>
		</div>
		<footer></footer>
		<div class="modal-container"></div>
<?php endwhile;?>
 <script>
		    document.addEventListener("DOMContentLoaded", function() {
          lazyload();
          lazyloadUrl();
          if ("IntersectionObserver" in window) {
            var lazyloadImagesBg = document.querySelectorAll(".bg.lazy");
            var imageObserver = new IntersectionObserver(function(entries, observer) {
              entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                  var image = entry.target;
                  image.classList.remove("lazy");
                  imageObserver.unobserve(image);
                }
              });
            });
        
            lazyloadImagesBg.forEach(function(image) {
              imageObserver.observe(image);
            });
          } 
            var lazyloadThrottleTimeout;
            var lazyloadThrottleTimeoutUrl;
            lazyloadImages = document.querySelectorAll("img.lazy");
            lazyloadImagesUrl = document.querySelectorAll("*[data-style]");
            function lazyloadUrl(){
                 if(lazyloadThrottleTimeoutUrl) {
                    clearTimeout(lazyloadThrottleTimeoutUrl);
                 } 
                 lazyloadThrottleTimeoutUrl = setTimeout(function() {
                   var scrollTop = window.pageYOffset;
                    lazyloadImagesUrl.forEach(function(img) {
                            if($(img).offset().top < (window.innerHeight + scrollTop)) {
                              img.style = img.dataset.style;
                            }
                    });
                    if(lazyloadImagesUrl.length == 0) { 
                      document.removeEventListener("scroll", lazyloadUrl);
                      window.removeEventListener("resize", lazyloadUrl);
                      window.removeEventListener("orientationChange", lazyloadUrl);
                    }
              }, 100);
            }
            
            function lazyload () {
              if(lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
              }    
              lazyloadThrottleTimeout = setTimeout(function() {
              var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function(img) {
                    if($(img).offset().top < (window.innerHeight + scrollTop + 10)) {
                      img.src = img.dataset.src;
                      img.classList.remove('lazy');
                    }
                });
                if(lazyloadImages.length == 0) { 
                  document.removeEventListener("scroll", lazyload);
                  window.removeEventListener("resize", lazyload);
                  window.removeEventListener("orientationChange", lazyload);
                }
              }, 0);
            }
            function fix(){
              window.dispatchEvent(new Event('resize'));
            }
            document.addEventListener("scroll",() => {lazyload();lazyloadUrl();fix();});
            window.addEventListener("resize",() => {lazyload();lazyloadUrl();});
            window.addEventListener("orientationChange",() => {lazyload();lazyloadUrl();});
        });
		</script>
		<script type="text/plain" data-cookiescript="accepted" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCByts0vn5uAYat3aXEeK0yWL7txqfSMX8"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.4.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/vinno.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery.validate.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/jquery.smooth-scroll.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/index.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
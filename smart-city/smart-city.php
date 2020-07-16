<?php
/*
 * Template Name: Smart City
*/
?>
<?php get_header('smartcity');?>
<?php while (have_posts()) : the_post();?>
<div id="wrap">
		<nav id="nav-logo-menu-3"
			class="navbar navbar-expand-lg light shadow sticky-top show-menu"
			style="padding-right: 17px; margin-right: -17px;">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-auto mr-auto">
					<?php 
					if(get_field('smartcity_header_logo', 'option') != "" ):?>
						<a href="#" class=""> <img
							src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
							data-src="<?php echo get_field('smartcity_header_logo', 'option'); ?>"
							height="45px" class="lazy mw-100" alt="logo">
						</a>
					<?php endif;?>
					</div>
					<div class="col-auto hidden-lg">
						<button class="navbar-toggler collapsed" type="button"
							data-toggle="collapse" data-target=".main-menu-collapse"
							aria-controls="navbarMenuContent" aria-expanded="false"
							aria-label="Toggle navigation" style="margin-right: 17px;">
							<span class="icon-bar"></span><span class="icon-bar"></span><span
								class="icon-bar"></span>
						</button>
					</div>
					<div
						class="col-lg-auto collapse navbar-collapse main-menu-collapse">
						<ul class="navbar-nav ml-auto" style="">
							<li class="nav-item"><a class="nav-link smooth"
								href="#header-text-img-9" contenteditable="true" target="_self">Trang
									chủ</a></li>
							<li class="nav-item"><a class="nav-link smooth"
								href="#text-1col" contenteditable="true" target="_self">Chính
									sách</a></li>
							<li class="nav-item"><a class="nav-link smooth"
								href="#benefits-3col-3" contenteditable="true" target="_self">Lợi
									ích</a></li>
							<li class="nav-item"><a class="nav-link smooth"
								href="#desc-text-img-img-2" contenteditable="true"
								target="_self">Tổng quan</a></li>
							<li class="nav-item"><a class="nav-link smooth"
								href="#desc-text-img-4" contenteditable="true" target="_self">Vị
									trí</a></li>
							<li class="nav-item"><a class="nav-link smooth"
								href="#inner-img" contenteditable="true" target="_self">Mặt
									bằng</a></li>
							<li class="nav-item" style=""><a class="nav-link smooth"
								href="#contact-center-form" contenteditable="true"
								target="_self">Bảng giá&nbsp;<span
									class="badge badge-success"><strong>New</strong></span></a></li>
						</ul>
					</div>
					<div
						class="col-lg-auto collapse navbar-collapse main-menu-collapse">
						<div class="hover-wrap-block d-flex align-items-center">
							<p class="mb-0 mr-10 blockquote-footer text-primary"
								style="overflow: visible;">
								<strong class=""><a href="tel:<?php echo get_field('hot_line_number', 'option'); ?>"
									target="_self" class="smooth">Hotline/Zalo: <?php echo get_field('hot_line_number', 'option'); ?></a></strong>
							</p>
							<a href="tel:<?php echo get_field('hot_line_number', 'option'); ?>"
								class="btn fx-btn-wave fx-btn-pill dark smooth" target="_self"
								style="background-color: rgb(255, 126, 0); padding: 8px;"><svg
									xmlns="http://www.w3.org/2000/svg" height="20"
									viewBox="0 0 20 20" width="20"
									class="icon rounded-circle svg-default">
									<path
										d="m10.5 18h-1c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1c.276 0 .5.224.5.5s-.224.5-.5.5z"></path>
									<path
										d="m14.5 20h-9c-.827 0-1.5-.673-1.5-1.5v-17c0-.827.673-1.5 1.5-1.5h9c.827 0 1.5.673 1.5 1.5v17c0 .827-.673 1.5-1.5 1.5zm-9-19c-.276 0-.5.224-.5.5v17c0 .276.224.5.5.5h9c.276 0 .5-.224.5-.5v-17c0-.276-.224-.5-.5-.5z"></path>
									<path
										d="m13.5 16h-7c-.276 0-.5-.224-.5-.5v-13c0-.276.224-.5.5-.5h7c.276 0 .5.224.5.5v13c0 .276-.224.5-.5.5zm-6.5-1h6v-12h-6z"
										class=""></path></svg></a>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</nav>
		<section id="header-carousel-5"
			class="section-carousel overall carousel-nav-none carousel-dots-aside-bottom light">
			<div class="header-carousel-single-autoheight owl-drag">
			<?php 
                $images = get_field('slider_images');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $images ): ?>
                        <?php foreach( $images as $image_url ): ?>
                                <img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif" data-src="<?php echo $image_url ?>" alt="image" class="lazy item w-100"> 
                        <?php endforeach; ?>
                <?php endif; ?>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="action-text-4col" class="dark hidden-sm">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="content-box d-flex align-items-center padding">
							<div class="mr-20">
								<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo get_field('icon_1');?>"
									enable-background="new 0 0 64 64"
									class="lazy icon svg-secondary rounded-circle" alt="icon">
							</div>
							<div class="">
								<h4 class="mb-0 slim_relative">
									<strong class=""><a href="#popup-form" target="_self"
										class="smooth" data-toggle="modal" data-target="<?php echo get_field('link_1');?>"><?php echo get_field('text_1');?></a></strong>
								</h4>
							</div>
						</div>
					</div>
					<hr class="sep-vertical-md mb-0 mt-0">
					<div class="col-md">
						<div class="content-box d-flex align-items-center padding">
							<div class="mr-20">
								<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo get_field('icon_2');?>"
									enable-background="new 0 0 64 64"
									class="lazy icon svg-secondary" alt="icon" height="40px">
							</div>
							<div class="">
								<h4 class="mb-0 slim_relative">
									<strong class=""><a href="#popup-subscribe"
										target="_self" class="smooth" data-toggle="modal"
										data-target="<?php echo get_field('link_2');?>"><?php echo get_field('text_2');?></a></strong>
								</h4>
							</div>
						</div>
					</div>
					<hr class="sep-vertical-md mb-0 mt-0">
					<div class="col-md">
						<div class="content-box d-flex align-items-center padding"
							style="">
							<div class="mr-20">
								<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo get_field('icon_3');?>"
									enable-background="new 0 0 64 64"
									class="lazy icon svg-secondary rounded-circle" alt="icon">
							</div>
							<div class="">
								<h4 class="mb-0 slim_relative">
									<strong class=""><a href="<?php echo get_field('link_3');?>"
										target="_self" class="smooth"><?php echo get_field('text_3');?></a></strong>
								</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<header id="header-text-img-9"
			class="pt-75 pb-75 text-sm-left text-md-left dark pb-sm-100 pb-md-100 pt-sm-100 pt-md-100 pt-lg-100 pt-xl-100 pb-lg-100 pb-xl-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 s401">
						<div
							class="content-box bg-default text-sm-left text-md-left border shadow padding"
							style="background: linear-gradient(135deg, rgba(19, 166, 79, 0.9), rgba(37, 169, 173, 0.9)); border-radius: 30px 0px;">
							<h4 class="text-primary slim_relative" style="">
								<strong class=""><span class="text-uppercase"><?php echo get_field('banner_headline_1');?></span></strong>
							</h4>
							<h3 class="fx-text-shadow slim_relative"
								style="font-family: Exo; font-size: 21px;">
								<strong class=""><?php echo get_field('banner_headline_2');?><br>
								</strong>
							</h3>

							<?php echo get_field('banner_text');?>

							
							<a href="#"
								class="btn shadow-btn hidden-icon-btn btn-primary fx-btn-wave mb-30 mb-sm-0 mb-md-0 smooth fx-btn-zoom slim_relative"
								style="" target="_self" data-toggle="modal"
								data-target="#popup-form"><strong class=""><?php echo get_field('button_popup_text');?></strong></a>
							<div class="position-absolute b-0 r-0">
								<a class="smooth video-popup mfp-iframe"
									href="<?php echo get_field('banner_video');?>"
									target="_self"> <svg xmlns="http://www.w3.org/2000/svg"
										enable-background="new 0 0 64 64" height="32px"
										viewBox="0 0 64 64" width="32px"
										class="icon svg-default padding rounded-circle bg-default hidden-sm"
										style="background-color: rgba(0, 0, 0, 0.4);">
										<path
											d="m26 21v22l1.809.786 14.191-11v-1.572l-14.191-11zm2 2.058 11.381 8.942-11.381 8.942z"></path>
										<path
											d="m32 0c-8.547 0-16.583 3.33-22.626 9.375-6.045 6.042-9.374 14.078-9.374 22.625s3.329 16.583 9.374 22.626c6.043 6.045 14.079 9.374 22.626 9.374s16.583-3.33 22.627-9.375c6.044-6.042 9.373-14.078 9.373-22.625s-3.329-16.583-9.374-22.626c-6.043-6.045-14.079-9.374-22.626-9.374zm21.213 53.212c-5.667 5.667-13.2 8.788-21.213 8.788s-15.546-3.121-21.212-8.789c-5.667-5.665-8.788-13.198-8.788-21.211s3.121-15.546 8.788-21.212c5.666-5.667 13.199-8.788 21.212-8.788s15.546 3.122 21.213 8.789c5.667 5.665 8.787 13.198 8.787 21.211s-3.12 15.546-8.787 21.212z"></path></svg>
								</a>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="bg-wrap">
				<?php if(get_field('banner_image') != ""):?>
				<div class="bg" style="background-image: url('<?php echo get_field('banner_image');?>');"></div>
				<?php else:?>
				<div class="bg"></div>
				<?php endif;?>
			</div>
		</header>
		<section id="action-text-4col--0"
			class="dark hidden-lg hidden-xl hidden-md">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="content-box d-flex align-items-center padding">
							<div class="mr-20">
								<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo get_field('icon_1');?>"
									enable-background="new 0 0 64 64"
									class="lazy icon svg-secondary rounded-circle" alt="icon">
							</div>
							<div class="">
								<h4 class="mb-0 slim_relative">
									<strong class=""><a href="#popup-form" target="_self"
										class="smooth" data-toggle="modal" data-target="<?php echo get_field('link_1');?>"><?php echo get_field('text_1');?></a></strong>
								</h4>
							</div>
						</div>
					</div>
					<hr class="sep-vertical-md mb-0 mt-0">
					<div class="col-md">
						<div class="content-box d-flex align-items-center padding">
							<div class="mr-20">
								<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo get_field('icon_2');?>"
									enable-background="new 0 0 64 64"
									class="lazy icon svg-secondary" alt="icon" height="40px">
							</div>
							<div class="">
								<h4 class="mb-0 slim_relative">
									<strong class=""><a href="#popup-subscribe"
										target="_self" class="smooth" data-toggle="modal"
										data-target="<?php echo get_field('link_2');?>"><?php echo get_field('text_2');?></a></strong>
								</h4>
							</div>
						</div>
					</div>
					<hr class="sep-vertical-md mb-0 mt-0">
					<div class="col-md">
						<div class="content-box d-flex align-items-center padding"
							style="">
							<div class="mr-20">
								<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo get_field('icon_3');?>"
									enable-background="new 0 0 64 64"
									class="lazy icon svg-secondary rounded-circle" alt="icon">
							</div>
							<div class="">
								<h4 class="mb-0 slim_relative">
									<strong class=""><a href="<?php echo get_field('link_3');?>"
										target="_self" class="smooth"><?php echo get_field('text_3');?></a></strong>
								</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="desc-carousel-text"
			class="section-carousel light pt-50 pb-50 carousel-nav-aside-bottom carousel-dots-none">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-12 col-md-5 ml-auto order-md-1 mr-auto" style="">
						<div class="content-box pl-30 mb-20"
							style="border-left: 5px solid #ff7e00;">
							<h4 contenteditable="true" style="" class="slim_relative">
								<strong class=""><?php echo get_field('block_title');?></strong>
							</h4>
							<h3 class="color-text slim_relative" style="">
								<strong class=""><?php echo get_field('block_sub_title');?></strong>
							</h3>
						</div>
						<?php echo get_field('block3_content');?>
						
						<div class="row no-gutters">
							<div class="col-md-10">
								<div
									class="video-iframe embed-responsive embed-responsive-4by3 mb-30">
									<iframe class="embed-responsive-item" allowfullscreen=""
										data-cookiescript="accepted"
										data-src="<?php echo get_field('block3_video_url');?>">
									</iframe>
								</div>
							</div>
						</div>


					</div>
					<div class="col-md-7 no-gutters text-center">
						<div class="carousel-single-autoh position-relative owl-drag">
						<?php 
                        $images = get_field('images_slider');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $images ): ?>
                                <?php foreach( $images as $image_url ): ?>
                                        <img class="lazy mw-100 item" alt="image"
								src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
								data-src="<?php echo $image_url;?>">
                                <?php endforeach; ?>
                        <?php endif; ?>
							
						</div>
						<a
							class="btn smooth fx-btn-zoom btn-gp fx-btn-wave mt-20 slim_relative"
							href="#" style="overflow: visible;" target="_self"
							data-toggle="modal" data-target="#popup-form"><strong
							class=""><?php echo get_field('slider_button_text');?></strong></a>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="action-img-text-btn-4" class="pt-50 pb-50 overall dark">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-auto">
						<div class="inline-group">
						<?php if(get_field('block_icon') == ""):?>
							<svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"
								viewBox="0 0 50 50" fill="none"
								class="mw-100 mb-30 mb-md-0 svg-primary hidden-sm">
			<rect width="50" height="50" fill="black" fill-opacity="0"></rect>
			<rect width="50" height="50" fill="black" fill-opacity="0"></rect>
			<rect width="50" height="50" fill="black" fill-opacity="0"></rect>
			<rect width="50" height="50" fill="black" fill-opacity="0" class=""></rect>
			<path
									d="M49.1667 48.3333H44.1667V20.8333C44.1667 20.3731 43.7935 20 43.3333 20H31.6667V0.833333C31.6667 0.373125 31.2935 0 30.8333 0H9.16667C8.70646 0 8.33333 0.373125 8.33333 0.833333V48.3333H0.833333C0.373125 48.3333 0 48.7065 0 49.1667C0 49.6269 0.373125 50 0.833333 50H49.1667C49.6269 50 50 49.6269 50 49.1667C50 48.7065 49.6269 48.3333 49.1667 48.3333ZM17.5 48.3333H14.1667V40.8333C14.1667 40.3731 14.5398 40 15 40H16.6667C17.1269 40 17.5 40.3731 17.5 40.8333V48.3333ZM20.8333 20.8333V48.3333H19.1667V40.8333C19.1667 39.4526 18.0474 38.3333 16.6667 38.3333H15C13.6193 38.3333 12.5 39.4526 12.5 40.8333V48.3333H10V1.66667H30V20H21.6667C21.2065 20 20.8333 20.3731 20.8333 20.8333ZM42.5 48.3333H22.5V21.6667H42.5V48.3333Z"
									fill="#666666"></path>
			<path
									d="M26.6667 11.6665H21.6667C21.2065 11.6665 20.8333 12.0396 20.8333 12.4998V17.4998C20.8333 17.96 21.2065 18.3332 21.6667 18.3332H26.6667C27.1269 18.3332 27.5 17.96 27.5 17.4998V12.4998C27.5 12.0396 27.1269 11.6665 26.6667 11.6665ZM25.8333 16.6665H22.5V13.3332H25.8333V16.6665Z"
									fill="#666666"></path>
			<path
									d="M26.6667 3.3335H21.6667C21.2065 3.3335 20.8333 3.70662 20.8333 4.16683V9.16683C20.8333 9.62704 21.2065 10.0002 21.6667 10.0002H26.6667C27.1269 10.0002 27.5 9.62704 27.5 9.16683V4.16683C27.5 3.70662 27.1269 3.3335 26.6667 3.3335ZM25.8333 8.3335H22.5V5.00016H25.8333V8.3335Z"
									fill="#666666"></path>
			<path
									d="M18.3333 11.6665H13.3333C12.8731 11.6665 12.5 12.0396 12.5 12.4998V17.4998C12.5 17.96 12.8731 18.3332 13.3333 18.3332H18.3333C18.7935 18.3332 19.1667 17.96 19.1667 17.4998V12.4998C19.1667 12.0396 18.7935 11.6665 18.3333 11.6665ZM17.5 16.6665H14.1667V13.3332H17.5V16.6665Z"
									fill="#666666"></path>
			<path
									d="M18.3333 3.3335H13.3333C12.8731 3.3335 12.5 3.70662 12.5 4.16683V9.16683C12.5 9.62704 12.8731 10.0002 13.3333 10.0002H18.3333C18.7935 10.0002 19.1667 9.62704 19.1667 9.16683V4.16683C19.1667 3.70662 18.7935 3.3335 18.3333 3.3335ZM17.5 8.3335H14.1667V5.00016H17.5V8.3335Z"
									fill="#666666"></path>
			<path
									d="M18.3333 20H13.3333C12.8731 20 12.5 20.3731 12.5 20.8333V25.8333C12.5 26.2935 12.8731 26.6667 13.3333 26.6667H18.3333C18.7935 26.6667 19.1667 26.2935 19.1667 25.8333V20.8333C19.1667 20.3731 18.7935 20 18.3333 20ZM17.5 25H14.1667V21.6667H17.5V25Z"
									fill="#666666"></path>
			<path
									d="M18.3333 28.3335H13.3333C12.8731 28.3335 12.5 28.7066 12.5 29.1668V34.1668C12.5 34.627 12.8731 35.0002 13.3333 35.0002H18.3333C18.7935 35.0002 19.1667 34.627 19.1667 34.1668V29.1668C19.1667 28.7066 18.7935 28.3335 18.3333 28.3335ZM17.5 33.3335H14.1667V30.0002H17.5V33.3335Z"
									fill="#666666"></path>
			<path
									d="M34.1667 38.3332H39.1667C39.6269 38.3332 40 37.96 40 37.4998V32.4998C40 32.0396 39.6269 31.6665 39.1667 31.6665H34.1667C33.7065 31.6665 33.3333 32.0396 33.3333 32.4998V37.4998C33.3333 37.96 33.7065 38.3332 34.1667 38.3332ZM35 33.3332H38.3333V36.6665H35V33.3332Z"
									fill="#666666"></path>
			<path
									d="M34.1667 30.0002H39.1667C39.6269 30.0002 40 29.627 40 29.1668V24.1668C40 23.7066 39.6269 23.3335 39.1667 23.3335H34.1667C33.7065 23.3335 33.3333 23.7066 33.3333 24.1668V29.1668C33.3333 29.627 33.7065 30.0002 34.1667 30.0002ZM35 25.0002H38.3333V28.3335H35V25.0002Z"
									fill="#666666"></path>
			<path
									d="M34.1667 46.6667H39.1667C39.6269 46.6667 40 46.2935 40 45.8333V40.8333C40 40.3731 39.6269 40 39.1667 40H34.1667C33.7065 40 33.3333 40.3731 33.3333 40.8333V45.8333C33.3333 46.2935 33.7065 46.6667 34.1667 46.6667ZM35 41.6667H38.3333V45H35V41.6667Z"
									fill="#666666"></path>
			<path
									d="M25.8333 38.3332H30.8333C31.2935 38.3332 31.6667 37.96 31.6667 37.4998V32.4998C31.6667 32.0396 31.2935 31.6665 30.8333 31.6665H25.8333C25.3731 31.6665 25 32.0396 25 32.4998V37.4998C25 37.96 25.3731 38.3332 25.8333 38.3332ZM26.6667 33.3332H30V36.6665H26.6667V33.3332Z"
									fill="#666666"></path>
			<path
									d="M25.8333 30.0002H30.8333C31.2935 30.0002 31.6667 29.627 31.6667 29.1668V24.1668C31.6667 23.7066 31.2935 23.3335 30.8333 23.3335H25.8333C25.3731 23.3335 25 23.7066 25 24.1668V29.1668C25 29.627 25.3731 30.0002 25.8333 30.0002ZM26.6667 25.0002H30V28.3335H26.6667V25.0002Z"
									fill="#666666"></path>
			<path
									d="M25.8333 46.6667H30.8333C31.2935 46.6667 31.6667 46.2935 31.6667 45.8333V40.8333C31.6667 40.3731 31.2935 40 30.8333 40H25.8333C25.3731 40 25 40.3731 25 40.8333V45.8333C25 46.2935 25.3731 46.6667 25.8333 46.6667ZM26.6667 41.6667H30V45H26.6667V41.6667Z"
									fill="#666666"></path>
			</svg>
				<?php else:?>
					<img src="<?php echo get_field('block_icon');?>" />
				<?php endif;?>
						</div>
					</div>
					<div class="col-md">
						<h3 class="mb-10 slim_relative" style="">
							<strong class=""><?php echo get_field('block4_title');?></strong>
						</h3>
						<?php echo get_field('block4_content');?>
					</div>
					<div class="col-md-auto">
						<a href="#" class="btn smooth btn-primary fx-btn-zoom fx-btn-wave"
							target="_self" data-toggle="modal" data-target="#popup-form"><strong
							class="">ĐĂNG KÝ NGAY<svg
									xmlns="http://www.w3.org/2000/svg" height="16"
									viewBox="0 0 16 16" width="16"
									class="icon icon-pos-right svg-secondary">
									<path
										d="m4.82528129 7h11.17471871v2h-11.16842704l3.23949485 3.2394949-1.41421356 1.4142135-4.24264069-4.24264067-1.41421356-1.41421357 5.65685425-5.65685425 1.41421356 1.41421357z"
										fill-rule="evenodd" transform="matrix(-1 0 0 1 17 0)"></path></svg></strong></a>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="text-1col"
			class="border-bottom-container light pt-50 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-9 ml-auto mr-auto">
						<div class="content-box pl-30"
							style="border-left: 5px solid #ff7e00;">
							<h4 class="text-primary"><?php echo get_field('block5_title');?></h4>
							<h3 class="mb-30 slim_relative">
								<strong class=""><?php echo get_field('block5_sub_title');?></strong>
							</h3>
						</div>
						<div class="content-box border-x2 padding-x2 light"
							style="border-style: dashed; background-color: rgb(238, 238, 238); border-color: rgb(255, 128, 0); border-radius: 30px 0px;">
							<?php echo get_field('block5_content');?>
							<div class="text-center">
								<a
									class="btn mt-20 fx-btn-zoom fx-btn-glow fx-btn-wave btn-primary slim_relative"
									href="#" style="" data-toggle="modal" data-target="#popup-form"><strong
									class="">NHẬN ƯU ĐÃI NGAY</strong></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="text-3col" class="dark text-center pt-30 pb-30">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center" style="">
						<h3 class="" style="">
							<strong class=""><?php echo get_field('block6_title');?></strong>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100" class="svg-primary mb-10">
							<path d="m0 9h100v2h-100z" fill-rule="evenodd" class=""></path></svg>
					</div>
					<?php if( have_rows('static') ):
                    $x = 0;
                    while ( have_rows('static') ) : the_row();?>
					<div class="col-md mb-20 mb-md-0">
						<h4 class="">
							<span class="text-uppercase"><?php echo get_sub_field('text');?></span>
						</h4>
						<h3 contenteditable="true" class="text-primary slim_relative">
							<strong class=""><?php echo get_sub_field('number');?></strong>
						</h3>
						<h4 class="slim_relative">
							<strong class=""><?php echo get_sub_field('sub_text');?></strong>
						</h4>


					</div>
					<?php if($x < 2):?>
					<hr class="sep-vertical-md ml-auto mr-auto mb-50 mb-md-0">
					<?php endif;?>
					<?php $x++; 
					endwhile;endif;?>
					
					
					<div class="col-12" style="">
						<a href="#contact-center-form"
							class="btn btn-primary fx-btn-wave smooth mt-20 slim_relative"
							style="" target="_self"><strong class="">GỬI CHI TIẾT CHO TÔI</strong></a>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="inner-img--0" class="pt-50 light pb-50">
			<div class="container">
				<div class="row">
					<div class="col-12 ml-auto mr-auto">
						<a href="<?php echo get_field('image_pop_up');?>" target="_self"
							class="smooth image-popup"><img alt="img" class="lazy mw-100"
							src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
							data-src="<?php echo get_field('image_pop_up');?>"></a>

					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="action-img-text-btn-5"
			class="overall dark text-center text-sm-left text-md-left pt-50 pb-50 pt-sm-0 pt-md-0 pb-sm-0 pb-md-0">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-auto">
						<div class="inline-group">
							<img alt="img" class="lazy hidden-sm mt--50"
								src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
								data-src="<?php echo get_template_directory_uri();?>/images/background/telesaleoganic.png" width="150px">
						</div>
					</div>
					<div class="col-md" style="">
						<h4 class="mb-30 mb-md-0" style="font-size: 24px;">
							<strong class=""><?php echo get_field('block7_title');?></strong>
						</h4>
						<?php echo get_field('block7_sub_title');?>
					</div>
					<div class="col-md-auto">
						<a href="#"
							class="btn btn-primary dark fx-btn-zoom fx-btn-wave slim_relative"
							style="border-color: rgba(0, 0, 0, 0); font-weight: 600;"
							data-toggle="modal" data-target="#popup-subscribe">TẢI BẢNG
							TÍNH</a>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="benefits-3col-3" class="pt-50 text-center light pb-30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" style="">
						<h3 class="slim_relative" style="">
							<b class=""><?php echo get_field('block8_title');?></b>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100"
							class="mb-30 svg-primary mb-lg-50 mb-xl-50">
							<path d="m0 9h100v2h-100z" fill-rule="evenodd" class=""></path></svg>

					</div>
					<div class="col-md-6 col-lg-3">
						<div class="content-box padding-x2 shadow mb-50 bg-default dark"
							style="background: linear-gradient(135deg, rgb(19, 166, 79), rgb(37, 169, 173)); border-radius: 30px 0px;">
							<?php if(get_field('item1_icon')==0):?>
							<svg xmlns="http://www.w3.org/2000/svg"
								enable-background="new 0 0 64 64" height="64px"
								viewBox="0 0 64 64" width="64px" class="mb-30 icon svg-primary">
								<path
									d="m37 19.001c0-2.757-2.243-5.001-5-5.001s-5 2.244-5 5.001c0 2.756 2.243 4.999 5 4.999s5-2.243 5-4.999zm-8 0c0-1.655 1.346-3.001 3-3.001s3 1.346 3 3.001c0 1.654-1.346 2.999-3 2.999s-3-1.345-3-2.999z"></path>
								<path
									d="m31.976 48.582.776-.948c.543-.663 13.292-16.351 13.248-26.615-.035-8.281-6.315-15.019-14-15.019-7.72 0-14 6.739-14 15.023 0 10.26 12.664 25.945 13.203 26.607zm.024-40.582c6.587 0 11.97 5.844 12 13.028.035 8.158-9.24 20.763-12.019 24.354-2.764-3.595-11.981-16.199-11.981-24.359 0-7.181 5.383-13.023 12-13.023z"></path>
								<path
									d="m43 36v2h8.409l9.9 18h-58.618l9.9-18h8.409v-2h-9.591l-12.1 22h65.382l-12.1-22z"></path></svg>
							<?php else:?>
							<img src="<?php echo get_field('item1_icon')?>" />
							<?php endif;?>
							<h4 class="mb-20 slim_relative">
								<strong class=""><?php echo get_field('item1_title')?></strong>
							</h4>
							<p class="mb-30 slim_relative"><?php echo get_field('item1_content')?></p>

						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div
							class="content-box padding-x2 shadow mb-50 bg-default dark mt-lg-50 mt-xl-50"
							style="background: linear-gradient(135deg, rgb(19, 166, 79), rgb(37, 169, 173)); border-radius: 30px 0px;">
							<?php if(get_field('item2_icon')==0):?>
							<svg xmlns="http://www.w3.org/2000/svg"
								enable-background="new 0 0 64 64" height="64px"
								viewBox="0 0 64 64" width="64px" class="mb-30 icon svg-primary">
								<path
									d="m32 59.414-32.344-32.344 17.867-22.07h28.954l17.867 22.07zm1-52.414v48.586l28.656-28.656-16.133-19.93zm-30.656 19.93 28.656 28.656v-48.586h-12.523z"></path>
								<path
									d="m31.094 57.423-14.158-30.339 6.103-21.359 1.922.55-5.897 20.641 13.842 29.661z"></path>
								<path
									d="m32.906 57.423-1.812-.846 13.842-29.661-5.897-20.641 1.922-.55 6.103 21.359z"></path>
								<path d="m1 26h62v2h-62z"></path></svg>
							<?php else:?>
							<img src="<?php echo get_field('item1_icon')?>" />
							<?php endif;?>
							<h4 class="mb-20 slim_relative" style="">
								<strong class=""><?php echo get_field('item2_title')?></strong>
							</h4>
							<p class="mb-30 slim_relative" style=""><?php echo get_field('item2_content')?></p>

						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="content-box padding-x2 shadow mb-50 bg-default dark"
							style="background: linear-gradient(135deg, rgb(19, 166, 79), rgb(37, 169, 173)); border-radius: 30px 0px;">
							<?php if(get_field('item3_icon')==0):?>
							<svg xmlns="http://www.w3.org/2000/svg"
								enable-background="new 0 0 64 64" height="64px"
								viewBox="0 0 64 64" width="64px" class="mb-30 icon svg-primary">
								<path
									d="m52 5h-40v-5h-12v12h5v40h-5v12h12v-5h40v5h12v-12h-5v-40h5v-12h-12zm-50-3h8v8h-8zm8 60h-8v-8h8zm52 0h-8v-8h8zm-5-10h-5v5h-40v-5h-5v-40h5v-5h40v5h5zm-3-50h8v8h-8z"></path></svg>
							<?php else:?>
							<img src="<?php echo get_field('item3_icon')?>" />
							<?php endif;?>
							<h4 class="mb-20 slim_relative" style="">
								<strong class=""><?php echo get_field('item3_title')?>
								</strong>
							</h4>
							<p class="mb-30 slim_relative" style=""><?php echo get_field('item3_content')?></p>

						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div
							class="content-box padding-x2 shadow mb-50 bg-default dark mt-lg-50 mt-xl-50"
							style="background: linear-gradient(135deg, rgb(19, 166, 79), rgb(37, 169, 173)); border-radius: 30px 0px;">
							<?php if(get_field('item4_icon')==0):?>
							<svg xmlns="http://www.w3.org/2000/svg"
								enable-background="new 0 0 64 64" height="64px"
								viewBox="0 0 64 64" width="64px" class="mb-30 icon svg-primary">
								<path
									d="m32-2.044-8.711 25.044h-24.204l19.742 15.355-8.789 26.366 21.962-16.471 21.961 16.471-8.789-26.366 19.743-15.355h-24.204zm10.828 39.689 7.211 21.634-18.039-13.529-18.039 13.529 7.211-21.634-16.257-12.645h19.796l7.289-20.956 7.289 20.956h19.796z"></path></svg>
							<?php else:?>
							<img src="<?php echo get_field('item4_icon')?>" />
							<?php endif;?>
							<h4 class="mb-20 slim_relative">
								<strong class=""><?php echo get_field('item4_title')?></strong>
							</h4>
							<p class="mb-30 slim_relative"><?php echo get_field('item4_content')?></p>

						</div>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="desc-text-img-img-2"
			class="dark pt-50 pb-lg-100 pb-xl-100 pb-30 pb-sm-75 pb-md-75">
			<div class="container">
				<div class="row">
					<div class="col-12" style="">
						<h3 class="text-center slim_relative" style="">
							<strong class=""><?php echo get_field('block9_title')?></strong>
						</h3>
						<h4 class="mb-30 text-center slim_relative" style="">
							<strong class=""><?php echo get_field('block9_sub_title')?></strong>
						</h4>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-md-6">
						<ul class="list-unstyled lead padding-x2-list">
						<?php 
						if( have_rows('listing_column_1') ):
						while ( have_rows('listing_column_1') ) : the_row();
						?>

							<li class=""><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" viewBox="0 0 512 512"
									class="icon svg-secondary icon-pos-left"
									style="fill: rgb(255, 220, 98);">
									<path
										d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z"
										class=""></path></svg><?php echo get_sub_field('item');?></li>
						<?php endwhile;endif;?>

						</ul>

					</div>
					<div class="col-md-6">
						<ul class="list-unstyled lead padding-x2-list mb-30" style="">
						<?php 
						if( have_rows('listing_column_2') ):
						while ( have_rows('listing_column_2') ) : the_row();
						?>
							<li class=""><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" viewBox="0 0 512 512"
									class="icon svg-secondary icon-pos-left"
									style="fill: rgb(255, 220, 98);">
									<path
										d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z"></path></svg>
										<?php echo get_sub_field('item');?>
								</li>
						
						<?php endwhile;endif;?>		

						</ul>

					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="blog-3col-5"
			class="pt-50 pt-md-0 text-center light pb-sm-30 pb-md-30">
			<div class="container">
				<div class="row">
				<?php 
						if( have_rows('tu_van') ):
						while ( have_rows('tu_van') ) : the_row();
				?>
					<div class="col-md-4">
						<div
							class="gallery-item padding mt-md--100 gallery-style-10 dark mb-20"
							style="border-radius: 30px 0px; background-color: rgb(240, 75, 3);">
							<a href="#" class="" data-toggle="modal"
								data-target="#popup-halfbg-form"><img class="lazy item-img"
								src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
								data-src="<?php echo get_sub_field('image');?>" alt="image"></a>
							<div class="w-100 item-title">
								<h4 class="slim_relative">
									<strong><?php echo get_sub_field('name');?></strong>
								</h4>
							</div>
						</div>
						<a href="#"
							class="btn fx-btn-wave smooth btn-primary mb-30 slim_relative"
							style="" target="_self" data-toggle="modal"
							data-target="#popup-halfbg-form"><strong class="">LIÊN
								HỆ TƯ VẤN</strong></a>
					</div>
				<?php endwhile;endif;?>	
					
					<div class="col-md-12 text-center"></div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="desc-text-img-4" class="light pt-50 pb-50">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-5" style="">
						<div class="content-box pl-30 mb-20"
							style="border-left: 5px solid #ff7e00;">
							<h3 class="slim_relative" style="">
								<strong class=""><?php echo get_field('block10_title')?></strong>
							</h3>
						</div>
						<?php echo get_field('block10_content')?>
						<a class="btn fx-btn-blick smooth btn-primary slim_relative"
							href="#contact-center-form" style="" target="_self"><strong
							class="">THAM QUAN THỰC TẾ</strong></a>
					</div>
					<div class="col-md-6 col-lg-7 ml-auto text-center">
						<div class="content-box d-inline-block">
							<img class="lazy mw-100 shadow mt-50 mt-lg-0"
								src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
								data-src="<?php echo get_field('block10_image')?>" alt="image">
						</div>
					</div>
					<div class="bg-box col-md-4 hidden-sm embed-responsive-4by3"
						data-style="background-image: url('<?php echo get_template_directory_uri();?>/images/background/bg-43.jpg'); background-position: center center; background-size: cover;">
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="desc-text-halfbg-3" class="light pb-50 pt-50">
			<div class="container">
				<div class="row">
					<div class="col-md-6" style="">
						<div class="content-box pl-30"
							style="border-left: 5px solid #ff7e00;">
							<h3 class="color-text slim_relative">
								<strong class=""><?php echo get_field('block11_title')?></strong>
							</h3>
							<h3 class="slim_relative">
								<strong class=""><?php echo get_field('block11_sub_title')?></strong>
							</h3>
						</div>
						<?php echo get_field('block11_content')?>
						<a class="btn fx-btn-zoom smooth btn-gp fx-btn-wave slim_relative"
							href="#" style="" target="_self" data-toggle="modal"
							data-target="#popup-form"><strong class="">TÔI MUỐN
								NHẬN QUÀ</strong></a>
					</div>
					<div class="bg-box col-md-6 mt-50 mt-md-0 embed-responsive-4by3"
						data-style="background-image: url('<?php echo get_field('block11_image');?>'); background-position: center center; background-size: contain; background-repeat: no-repeat;">
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="benefits-3col-10"
			class="pt-50 dark pt-sm-75 pt-md-75 pb-sm-30 pb-md-30">
			<div class="container">
				<div class="row">
					<div class="col-lg-5" style="">
						<div class="content-box pl-30"
							style="border-left: 5px solid #f5e400;">
							<h4 class="text-primary slim_relative"><?php echo get_field('block12_title');?></h4>
							<h3 class="mb-30 slim_relative">
								<strong class=""><?php echo get_field('block12_sub_title');?></strong>
							</h3>
						</div>

						<p class="text-justify mb-30 slim_relative" style="">
							<?php echo get_field('block12_content');?>
						</p>

						<div
							class="video-iframe embed-responsive embed-responsive-4by3 mb-30">
							<iframe class="embed-responsive-item" allowfullscreen=""
								data-cookiescript="accepted"
								data-src="<?php echo get_field('block12_video_url');?>"> </iframe>
						</div>
						<a href="#subscribe-field-4"
							class="btn mb-50 mb-lg-0 btn-primary fx-btn-wave smooth" style=""
							target="_self"><strong class="">THAM QUAN DỰ ÁN</strong></a>
					</div>
					<hr class="sep-vertical-lg ml-auto mr-auto mb-50 mb-lg-0">
					<?php 
					if( have_rows('block12_benefit') ):$x = 1;
					while ( have_rows('block12_benefit') ) : the_row();
					
					?>
					<?php if($x%2 !=0):?>
					<div class="col-md col-lg-3">
					<?php endif;?>
						<div class="content-box mb-50">
							<h2 class="color-text slim_relative">
								<strong><?php echo $x;?></strong>
							</h2>
							<h4 class="mb-10 text-primary slim_relative">
								<strong class=""><?php echo get_sub_field('title');?></strong>
							</h4>
							<p class="mb-0 text-justify slim_relative">
								<?php echo get_sub_field('content');?>
							</p>
						</div>
					<?php if($x%2 ==0):?>
					</div>
					<?php endif;?>
					<?php $x++; endwhile;endif;?>
					
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="inner-img" class="pt-50 light text-center pb-30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 ml-auto mr-auto">
						<img alt="img" class="lazy mw-100"
							src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
							data-src="<?php echo get_field('map_image');?>">
						<p class="mb-0 lead slim_relative">
							<strong class=""><?php echo get_field('map_title');?></strong>
						</p>
					</div>
					<div class="col-12" style="">
						<a href="#"
							class="btn mt-30 smooth fx-btn-zoom fx-btn-wave btn-gp" style=""
							target="_self" data-toggle="modal" data-target="#popup-subscribe"><strong
							class="">XEM MẶT BẰNG BẢN FULL 4K</strong></a>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="inner-carousel"
			class="section-carousel carousel-dots-none light text-center carousel-nav-aside-center pt-30 pb-30">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center" style="">
							<strong class=""><?php echo get_field('slider_1_title');?></strong>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100" class="icon svg-primary mb-30">
                    			<path d="m0 9h100v2h-100z" fill-rule="evenodd"></path>
                			</svg>
						<div class="carousel-single-autoheight owl-drag">
						<?php 
						$images = get_field('slider_1_images');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $images ): ?>
                        <?php foreach( $images as $image_url ): ?>
                         <div class="w-100 item">
								<h4 class="slim_relative">
									<strong><?php echo $image_url['title']; ?></strong>
								</h4>
								<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo $image_url['url']; ?>" alt="image"
									class="lazy w-100">
							</div>        
                        <?php endforeach; ?>
                		<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="inner-carousel--0"
			class="pb-50 section-carousel carousel-dots-none light text-center carousel-nav-aside-center pt-30">
			<div class="container">
				<div class="row">
					<div class="col-12" style="z-index: 10;">
						<h3 class="text-center slim_relative" style="overflow: visible;">
							<strong class=""><?php echo get_field('slider_2_title');?></strong>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100" class="icon svg-primary mb-30">
                    			<path d="m0 9h100v2h-100z" fill-rule="evenodd"></path>
                			</svg>
						<div class="carousel-single-autoheight owl-drag">
						<?php 
						$images = get_field('slider_2_images');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $images ): ?>
                        <?php foreach( $images as $image_url ): ?>
							<div class="w-100 item">
								<h4 class="slim_relative">
									<strong><?php echo $image_url['title']; ?></strong>
								</h4>
								<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo $image_url['url']?>" alt="image"
									class="lazy w-100">
							</div>
						<?php endforeach; ?>
                		<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="subscribe-field-4" class="text-center pt-50 pb-50 dark">
			<div class="container">
				<div class="row">
					<div class="col-md-10 ml-auto mr-auto" style="">
						<h4 class="slim_relative" style="">
							<strong><?php echo get_field('block14_title');?></strong>
						</h4>
						<h3 class="" contenteditable="true">
							<strong class=""><?php echo get_field('block14_sub_title');?></strong>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100" class="icon svg-primary mb-30">
							<path d="m0 9h100v2h-100z" fill-rule="evenodd"></path></svg>
						<?php echo do_shortcode(get_field('block14_contact_form'));?>
						
						<p class="text-secondary mb-0 small slim_relative">*Thông tin
							của quý khách luôn được bảo mật tuyệt đối.</p>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="blog-2col-2" class="text-center light pb-50 pt-50">
			<div class="container">
				<div class="row">
					<div class="col-12" style="">
						<h3 class="slim_relative" style="overflow: visible;">
							<strong><?php echo get_field('block15_title');?></strong>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100"
							class="mb-30 svg-primary mb-lg-50 mb-xl-50">
							<path d="m0 9h100v2h-100z" fill-rule="evenodd" class=""></path></svg>
					</div>
					<div class="w-100"></div>
					<?php 
					if( have_rows('block15_content') ):
					$x = 1;
					// loop through the rows of data
					while ( have_rows('block15_content') ) : the_row();
					?>
					<?php if($x%2 !=0):?>
					<div class="col-lg-4 col-md-6">
					<?php endif;?>
						<div class="gallery-item dark padding-x2 gallery-style-1 mb-30"
							style="background: linear-gradient(135deg, rgb(19, 166, 79), rgb(37, 169, 173)); border-radius: 30px 0px;">
							<a href="#" class=""><img class="lazy item-img"
								src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
								data-src="<?php echo get_sub_field('image');?>" alt="image"></a>
							<div class="item-title" style="">
								<h4 style="" class="slim_relative">
									<strong><?php echo get_sub_field('title');?>
									</strong>
								</h4>
								<p class="mb-0 slim_relative">
									<?php echo get_sub_field('content');?>
								</p>
							</div>
						</div>
					<?php if($x%2 ==0):?>
					</div>
					<?php endif; $x++;?>
					<?php endwhile;endif;?>
					
					<div class="col-12 text-center" style="">
						<a href="#contact-center-form"
							class="btn fx-btn-wave smooth btn-gp fx-btn-zoom" style=""
							target="_self"><strong class="">GIA NHẬP CỘNG ĐỒNG
								THÔNG MINH</strong></a>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="gallery-fluid-carousel-3"
			class="section-carousel gallery overall carousel-nav-right-bottom carousel-dots-none light text-center">
			<div class="container-fluid">
				<div class="row no-gutters">
					<div class="col-12 text-center" style="">
						<h3 class="" style="overflow: visible;">
							<strong class=""><?php echo get_field('block16_title');?></strong>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100" class="svg-primary">
							<path d="m0 9h100v2h-100z" fill-rule="evenodd" class=""></path></svg>
						<p class="">
							<strong><?php echo get_field('block16_sub_title');?></strong>
						</p>
					</div>
					<div class="col-12 position-inherit">
						<div class="carousel-2item-nogutters owl-drag">
						<?php 
						if( have_rows('image_3D') ):
						while ( have_rows('image_3D') ) : the_row();
						?>
						
							<div class="item gallery-item gallery-style-10 padding" style="">
								<a href="<?php echo get_sub_field('link');?>"
									class="smooth" target="_blank"> <img
									src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo get_sub_field('image');?>" alt=""
									class="lazy item-img">
								</a>
								<div class="item-title" style="">
									<h4 style="">
										<strong class=""><?php echo get_sub_field('name');?></strong>
									</h4>
								</div>
								<div class="item-icon">
									<svg xmlns="http://www.w3.org/2000/svg" height="16"
										viewBox="0 0 16 16" width="16" class="icon svg-default">
										<path d="m9 7h7v2h-7v7h-2v-7h-7v-2h7v-7h2z"
											fill-rule="evenodd"></path></svg>
								</div>
							</div>
						<?php endwhile;endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="media-contact-iframe" class="pt-50 pb-50 light">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center" style="">
						<h3 class="" style="overflow: visible;">
							<strong><?php echo get_field('block17_title')?></strong>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100"
							class="mb-30 svg-primary mb-lg-50 mb-xl-50">
							<path d="m0 9h100v2h-100z" fill-rule="evenodd"></path></svg>
					</div>
					<div class="col-md-6 mr-auto">
						<?php echo get_field('block17_content')?>
						
						<a
							class="btn fx-btn-blick smooth mb-20 mb-sm-0 mb-md-0 btn-primary slim_relative"
							href="#contact-center-form" style="" target="_self"><strong
							class="">THAM QUAN THỰC TẾ</strong></a>
					</div>
					<div class="col-md-6">
						<div
							class="video-iframe embed-responsive embed-responsive-4by3 mb-lg-0 shadow border rounded">
							<iframe class="embed-responsive-item" allowfullscreen=""
								data-cookiescript="accepted"
								data-src="<?php echo get_field('block17_video_url')?>"> </iframe>
						</div>
					</div>

				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="text-1col-center-2--0"
			class="pt-50 pb-0 text-center light" style="">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-lg-8 ml-auto mr-auto">
						<h3 class="slim_relative">
							<strong class=""><?php echo get_field('block18_title')?></strong>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100" class="mb-30 svg-primary">
							<path d="m0 9h100v2h-100z" fill-rule="evenodd"></path></svg>

					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="gallery-fluid-carousel-5"
			class="section-carousel gallery overall light pb-50 carousel-dots-none carousel-nav-aside-bottom">
			<div class="container-fluid">
				<div class="row no-gutters">
					<div class="col-12 position-inherit">
						<div class="carousel-5item-nogutters owl-drag">
						<?php 
						$images = get_field('block18_gallery');
						if( $images ): ?>
                        <?php foreach( $images as $image_url ): ?>
                               <div class="item gallery-item gallery-style-4 padding dark">
								<a href="<?php echo $image_url;?>"
									class="image-popup"> <img
									src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
									data-src="<?php echo $image_url;?>" alt=""
									class="lazy item-img">
								</a>
								<div class="item-icon">
									<svg xmlns="http://www.w3.org/2000/svg" height="16"
										viewBox="0 0 16 16" width="16" class="icon svg-default">
										<path d="m9 7h7v2h-7v7h-2v-7h-7v-2h7v-7h2z"
											fill-rule="evenodd"></path></svg>
								</div>
							</div>   
                        <?php endforeach; ?>
                		<?php endif; ?>
						
						</div>
					</div>
					<div class="col-12 text-center" style="">
						<a href="#"
							class="btn fx-btn-wave mt-30 smooth btn-gp fx-btn-zoom" style=""
							target="_self" data-toggle="modal" data-target="#popup-subscribe"><strong
							class="">TẢI BẢNG GIÁ SHOPHOUSE</strong></a>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="tool-back-to-top" class="text-center light">
			<div
				class="content-box d-inline-block bg-default shadow padding rounded-circle"
				style="position: fixed; right: 0px; bottom: 80px; background-color: rgb(240, 75, 3);">
				<a href="tel:<?php echo get_field('hot_line_number', 'option'); ?>" target="_self" class="smooth"> <svg
						xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 20 20"
						width="30" enable-background="new 0 0 64 64" class="icon"
						style="fill: rgb(255, 255, 255);">
						<path
							d="m16 20c-1.771 0-3.655-.502-5.6-1.492-1.793-.913-3.564-2.22-5.122-3.78s-2.863-3.333-3.775-5.127c-.988-1.946-1.49-3.83-1.49-5.601 0-1.148 1.07-2.257 1.529-2.68.661-.609 1.701-1.32 2.457-1.32.376 0 .816.246 1.387.774.425.394.904.928 1.383 1.544.289.372 1.73 2.271 1.73 3.182 0 .747-.845 1.267-1.739 1.816-.346.212-.703.432-.961.639-.276.221-.325.338-.333.364.949 2.366 3.85 5.267 6.215 6.215.021-.007.138-.053.363-.333.207-.258.427-.616.639-.961.55-.894 1.069-1.739 1.816-1.739.911 0 2.81 1.441 3.182 1.73.616.479 1.15.958 1.544 1.383.528.57.774 1.011.774 1.387 0 .756-.711 1.799-1.319 2.463-.424.462-1.533 1.537-2.681 1.537zm-12.006-19c-.268.005-.989.333-1.773 1.055-.744.686-1.207 1.431-1.207 1.945 0 6.729 8.264 15 14.986 15 .513 0 1.258-.465 1.944-1.213.723-.788 1.051-1.512 1.056-1.781-.032-.19-.558-.929-1.997-2.037-1.237-.952-2.24-1.463-2.498-1.469-.018.005-.13.048-.357.336-.197.251-.408.594-.613.926-.56.911-1.089 1.772-1.858 1.772-.124 0-.246-.024-.363-.071-2.624-1.05-5.729-4.154-6.779-6.779-.126-.315-.146-.809.474-1.371.33-.299.786-.579 1.228-.851.332-.204.676-.415.926-.613.288-.227.331-.339.336-.357-.007-.258-.517-1.261-1.469-2.498-1.108-1.439-1.847-1.964-2.037-1.997z"></path>
						<path
							d="m19.5 9c-.276 0-.5-.224-.5-.5 0-4.136-3.364-7.5-7.5-7.5-.276 0-.5-.224-.5-.5s.224-.5.5-.5c2.27 0 4.405.884 6.01 2.49s2.49 3.74 2.49 6.01c0 .276-.224.5-.5.5z"></path>
						<path
							d="m16.5 9c-.276 0-.5-.224-.5-.5 0-2.481-2.019-4.5-4.5-4.5-.276 0-.5-.224-.5-.5s.224-.5.5-.5c3.033 0 5.5 2.467 5.5 5.5 0 .276-.224.5-.5.5z"></path>
						<path
							d="m13.5 9c-.276 0-.5-.224-.5-.5 0-.827-.673-1.5-1.5-1.5-.276 0-.5-.224-.5-.5s.224-.5.5-.5c1.378 0 2.5 1.122 2.5 2.5 0 .276-.224.5-.5.5z"></path></svg></a>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="tool-back-to-top--0" class="text-center light"
			style="z-index: 1001190 !important;">
			<div
				class="content-box d-inline-block bg-default shadow padding rounded-circle"
				style="position: fixed; right: 0px; bottom: 150px; background-color: rgb(240, 75, 3);">
				<a href="http://vinhomes-group.vn/smart-city/#popup-form" target="_self" class="smooth"
					data-toggle="modal" data-target="#popup-form"> <svg
						xmlns="http://www.w3.org/2000/svg" width="30" height="30"
						viewBox="0 0 512 512" enable-background="new 0 0 64 64"
						class="icon" style="fill: rgb(255, 255, 255);">
						<path
							d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"
							class=""></path></svg></a>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<section id="contact-center-form"
			class="pt-50 pb-50 pb-md-100 dark pt-sm-100 pt-md-100">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center" style="">
						<h3 class="color-text slim_relative" style="">
							<strong class="">SỞ HỮU BỘ ĐÔI "NHÀ SANG - XE XỊN" ĐẲNG
								CẤP TINH HOA</strong>
						</h3>
						<svg xmlns="http://www.w3.org/2000/svg" height="20"
							viewBox="0 0 100 20" width="100"
							class="mb-30 svg-primary mb-lg-50 mb-xl-50">
							<path d="m0 9h100v2h-100z" fill-rule="evenodd" class=""></path></svg>
					</div>
					<div class="col-md-6 mr-auto" style="">
						<?php echo get_field('block19_content');?>
						<div class="inline-group mb-50">
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg"
									height="16" viewBox="0 0 16 16" width="16"
									class="icon svg-default">
									<path
										d="m16 2.57842783c-.5878969.26772602-1.2208722.44877814-1.8848389.52967377.6780537-.41603467 1.1983331-1.07571927 1.4434466-1.86156254-.6348535.38521729-1.3363855.66546287-2.0858132.81569761-.5972882-.65390635-1.4509597-1.06223667-2.3957269-1.06223667-1.81158659 0-3.28132891 1.50716263-3.28132891 3.36583604 0 .26387384.02817397.52004334.08452192.7665824-2.72817984-.14060431-5.14644597-1.47923438-6.76644949-3.51799687-.28267888.49885639-.44420966 1.07764536-.44420966 1.69399302 0 1.16720838.57944473 2.19766462 1.460351 2.80149272-.53718378-.01637174-1.04431532-.16949561-1.48758585-.41988685v.04141086c0 1.63139521 1.13165464 2.99217528 2.6342666 3.30034911-.27516582.07896954-.56535775.11845431-.86494101.11845431-.21130481 0-.41791395-.02022391-.61794917-.05970868.41791395 1.33670394 1.62939485 2.31034064 3.06626754 2.33634284-1.12320245.9033345-2.53941422 1.4416757-4.07677408 1.4416757-.26483536 0-.52685332-.0154087-.78323649-.0462261 1.45283794.9534128 3.17896343 1.5110148 5.03187181 1.5110148 6.03862179 0 9.33967249-5.12820509 9.33967249-9.57650171 0-.14638257-.0028174-.29276514-.0084522-.43625858.6414275-.47478031 1.198333-1.06705188 1.6369079-1.74214518"
										fill="#00aaec" fill-rule="evenodd"></path></svg></a> <a href="#"><svg
									xmlns="http://www.w3.org/2000/svg" height="16"
									viewBox="0 0 16 16" width="16" class="icon svg-default">
									<path
										d="m8.54611842 16h-7.66304125c-.48785295 0-.88307717-.3954695-.88307717-.8831324v-14.23379728c0-.48778708.3952863-.88307032.88307717-.88307032h14.23390773c.4876667 0 .8830151.39528324.8830151.88307032v14.23379728c0 .487725-.3954105.8831324-.8830151.8831324h-4.0772165v-6.19608178h2.0797387l.3114113-2.41472301h-2.39115v-1.54164808c0-.69911803.1941355-1.1755439 1.1966615-1.1755439l1.2786739-.00055875v-2.15974763c-.2211418-.0294274-.980176-.09517343-1.8632531-.09517343-1.84357263 0-3.10573228 1.12531866-3.10573228 3.19187953v1.78079226h-2.08507782v2.41472301h2.08507782z"
										fill="#4460a0" fill-rule="evenodd"></path></svg></a> <a href="#"><svg
									xmlns="http://www.w3.org/2000/svg" height="16"
									viewBox="0 0 16 16" width="16" class="icon svg-default">
									<path
										d="m11.8181925 13.6661767c-.0696184-.4120171-.4337038-2.4175436-1.3302758-4.87929916 2.2061504-.35275443 4.1168931.25210182 4.2580114.29819507-.3038748 1.90393319-1.3942494 3.54541709-2.9277356 4.58110409zm-3.81772211 1.1664413c-1.65390721 0-3.17045922-.587924-4.3530311-1.5662296.09031575.0733729.15334862.1194661.15334862.1194661s1.30957841-2.8558998 5.36155701-4.26785815c.01505262-.00564407.03104604-.00940678.04609866-.01411017.96148642 2.49750132 1.35755862 4.58957022 1.45916392 5.18690102-.81942734.3480511-1.72164407.5418308-2.66713711.5418308zm-6.83295113-6.83308834c0-.07243224.00376315-.1439238.00564473-.21541537.12136179.00282204 3.49691304.07901699 7.01452343-.97360221.19568413.38285614.38290116.7732377.55412477 1.16173791-.09031575.02445764-.17969071.05173731-.26906567.08183902-3.68695244 1.19089894-5.55724114 4.50773119-5.55724114 4.50773119s.00282237.002822.00282237.0037627c-1.08849298-1.2106532-1.75080849-2.81074722-1.75080849-4.56605324zm3.91744575-6.17743547c.09125655.12134752 1.35473629 1.834323 2.53730817 3.93579869-3.28053154.87200894-6.12830011.83720383-6.30799083.8343818.44311166-2.11652655 1.86464397-3.87089188 3.77068266-4.77018049zm1.27853237-.45528838c0 .00094068-.00094079.00188136-.00094079.00188136s-.0084671.00188135-.02069736.00376271c.00752632-.00188136.01411184-.00282204.02163815-.00564407zm6.14899752 1.5069669c-.0169342.02539832-.9897102 1.5069669-3.56935384 2.47304368-1.16751926-2.14568758-2.45075557-3.85019695-2.55330158-3.98565465.51649321-.12511024 1.05556535-.19283909 1.61063091-.19283909 1.72917035 0 3.30875521.64530543 4.51202451 1.70545006zm2.3181043 5.0580281c-.0987829-.0216356-2.4112425-.51925451-4.7585112-.22388147-.0489211-.11664413-.09690131-.23422894-.14770392-.35181375-.14205915-.33488153-.29540778-.66600035-.45440113-.9914751 2.69818305-1.10153448 3.79326155-2.68469634 3.80643265-2.70350991.9577233 1.16361926 1.5381902 2.64989124 1.5541836 4.27068023zm1.0075851-1.541772c-.1053684-.51361044-.263421-1.02063614-.4675722-1.50414487-.1994473-.47410194-.4487564-.93127168-.7375786-1.3583397-.2850591-.42330531-.6143353-.82215298-.9755983-1.18337351-.3622038-.36216121-.7601576-.69045799-1.1844535-.97642424-.4271182-.28972897-.8843417-.53712741-1.3584994-.7384326-.4835656-.20318655-.9897101-.36122053-1.50338099-.46563584-.52684189-.10817802-1.0687364-.16367805-1.61063092-.16367805-.5428353 0-1.08472981.05550003-1.6115717.16367805-.51367084.10441531-1.01981537.26244929-1.50338096.46563584-.4741577.20130519-.9313812.44870363-1.35944023.7384326-.42335509.28596625-.82130888.61426303-1.18351267.97642424-.36126301.36122053-.6895984.7600682-.97559829 1.18337351-.28882225.42706802-.53813135.88423776-.73757864 1.3583397-.20509202.48350873-.3622038.99053443-.46757218 1.50414487-.10724995.52583926-.16181572 1.06767006-.16181572 1.60950085 0 .54371215.05456577 1.08554295.16181572 1.61232289.10536838.51361045.26248016 1.01969545.46757218 1.50226355.19944729.4741019.44875639.933153.73757864 1.360221.28599989.4233053.61433528.8202716.97559829 1.1833735.36220379.3612206.76015758.6885767 1.18351267.9754836.42805903.2887883.88528253.5371274 1.35944023.7374919.48356559.2050679.98971012.3612205 1.50338096.4656358.52684189.1091187 1.0687364.1636781 1.6115717.1636781.54189452 0 1.08378903-.0545594 1.61063092-.1636781.51367089-.1044153 1.01981539-.2605679 1.50338099-.4656358.4741577-.2003645.9313812-.4487036 1.3584994-.7374919.4242959-.2869069.8222497-.614263 1.1844535-.9754836.361263-.3631019.6905392-.7600682.9755983-1.1833735.2888222-.427068.5381313-.8861191.7375786-1.360221.2041512-.4825681.3622038-.9886531.4675722-1.50226355.1072499-.52677994.1618157-1.06861074.1618157-1.61232289 0-.54183079-.0545658-1.08366159-.1618157-1.60950085z"
										fill="#ec4989" fill-rule="evenodd"></path></svg></a> <a href="#"><svg
									xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" height="16"
									viewBox="0 0 16 16" width="16" class="icon svg-default">
									<radialGradient cx="1.163903%" cy="98.836097%" r="139.775349%">
									<stop offset="0" stop-color="#ffc800"></stop>
									<stop offset=".486454468" stop-color="#ff2a7b"></stop>
									<stop offset="1" stop-color="#a000bc"></stop></radialGradient>
									<path
										d="m8.00001588 0c2.17265372 0 2.44508882.00920925 3.29837392.04814217.8515067.03883765 1.4330552.17408667 1.9419142.37186335.5260707.20441369.9722115.47796031 1.4169867.92270379.4447435.44477523.7182901.89091598.9227355 1.41698671.197745.50885894.332994 1.09040748.3718316 1.94191421.0389329.85328506.0481422 1.12572022.0481422 3.29840565 0 2.17265372-.0092093 2.44508882-.0481422 3.29837392-.0388376.8515067-.1740866 1.4330552-.3718316 1.9419142-.2044454.5260707-.477992.9722115-.9227355 1.4169867-.4447752.4447435-.890916.7182901-1.4169867.9227355-.508859.197745-1.0904075.332994-1.9419142.3718316-.8532851.0389329-1.1257202.0481422-3.29837392.0481422-2.17268543 0-2.44512059-.0092093-3.29840565-.0481422-.85150673-.0388376-1.43305527-.1740866-1.94191421-.3718316-.52607073-.2044454-.97221148-.477992-1.41698671-.9227355-.44474348-.4447752-.7182901-.890916-.92270379-1.4169867-.19777668-.508859-.3330257-1.0904075-.37186335-1.9419142-.03893292-.8532851-.04814217-1.1257202-.04814217-3.29837392 0-2.17268543.00920925-2.44512059.04814217-3.29840565.03883765-.85150673.17408667-1.43305527.37186335-1.94191421.20441369-.52607073.47796031-.97221148.92270379-1.41698671.44477523-.44474348.89091598-.7182901 1.41698671-.92270379.50885894-.19777668 1.09040748-.3330257 1.94191421-.37186335.85328506-.03893292 1.12572022-.04814217 3.29840565-.04814217zm0 1.44143887c-2.13610246 0-2.38913467.0081613-3.23270238.04664963-.7799921.03556678-1.20358605.16589361-1.48548451.27545198-.37341939.14512515-.63991616.31848143-.91984575.59844276-.27996133.27992959-.45331761.54642636-.59844276.91984575-.10955837.28189846-.2398852.70549241-.27545198 1.48548451-.03848833.84356771-.04664963 1.09659992-.04664963 3.23270238 0 2.13607072.0081613 2.38910292.04664963 3.23267062.03556678.7799921.16589361 1.2035861.27545198 1.4854845.14512515.3734194.31851318.6399162.59844276.9198458.27992959.2799613.54642636.4533176.91984575.5984427.28189846.1095584.70549241.2398852 1.48548451.275452.84347244.0384883 1.09644114.0466496 3.23270238.0466496 2.13622952 0 2.38922992-.0081613 3.23267062-.0466496.7799921-.0355668 1.2035861-.1658936 1.4854845-.275452.3734194-.1451251.6399162-.3184814.9198458-.5984427.2799613-.2799296.4533176-.5464264.5984427-.9198458.1095584-.2818984.2398852-.7054924.275452-1.4854845.0384883-.8435677.0466496-1.0965999.0466496-3.23267062 0-2.13610246-.0081613-2.38913467-.0466496-3.23270238-.0355668-.7799921-.1658936-1.20358605-.275452-1.48548451-.1451251-.37341939-.3184814-.63991616-.5984427-.91984575-.2799296-.27996133-.5464264-.45331761-.9198458-.59844276-.2818984-.10955837-.7054924-.2398852-1.4854845-.27545198-.8435677-.03848833-1.0965999-.04664963-3.23267062-.04664963zm0 2.4504556c2.26884272 0 4.10808962 1.8392469 4.10808962 4.10812141 0 2.26884272-1.8392469 4.10808962-4.10808962 4.10808962-2.26887451 0-4.10812141-1.8392469-4.10812141-4.10808962 0-2.26887451 1.8392469-4.10812141 4.10812141-4.10812141zm0 6.77477223c1.47275033 0 2.66665082-1.19390049 2.66665082-2.66665082 0-1.47278209-1.19390049-2.66668255-2.66665082-2.66668255-1.47278209 0-2.66668255 1.19390046-2.66668255 2.66668255 0 1.47275033 1.19390046 2.66665082 2.66668255 2.66665082zm5.23041202-6.9370774c0 .53019901-.4298182.95998539-.9600172.95998539-.5301673 0-.9599854-.42978638-.9599854-.95998539 0-.53019902.4298181-.96001715.9599854-.96001715.530199 0 .9600172.42981813.9600172.96001715z"
										fill="url(#a)" fill-rule="evenodd"></path></svg></a> <a href="#"><svg
									xmlns="http://www.w3.org/2000/svg" height="16"
									viewBox="0 0 16 16" width="16" class="icon svg-default">
									<path
										d="m12.8690869.08769705c.7164521.3514996 3.6319254 6.64299232 1.1447499 12.12248595-1.9974115 4.3999949-7.01159273 4.4004949-9.5533504 2.8499967-2.17099248-1.3249984-5.48722652-5.49949361-1.81596268-10.59698771.155387-.19349978.52811912-.1759998.44403311.40849953-.05949945.41499952-.59204415 3.39449607.42436388 4.68899457.46419409.64749921.57286664.20099977.57286664.20099977s-.07916869-4.33549499 3.21690438-7.62699118c2.09231551-2.00699767 4.99402027-2.3279973 5.56639517-2.04699763"
										fill="#81b636" fill-rule="evenodd"></path></svg></a>
						</div>
					</div>
					<div class="col-md-6">
						<?php echo do_shortcode(get_field('footer_form'));?>
						
						<p class="small text-secondary slim_relative">*Thông tin của
							quý khách luôn được bảo mật tuyệt đối.</p>
					</div>
					<div
						class="col-md-7 ml-auto mr-auto text-center d-sm-flex align-items-center pt-50"
						style="">
						<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
							data-src="<?php echo get_template_directory_uri();?>/images/thantaiimg.png" alt="than tai" height="50px"
							class="lazy  mb-10 mb-sm-0 mb-md-0">
						<h4 class="fx-text-glow text-primary mb-0"
							style="letter-spacing: 2px;">
							<strong class=""><span class="text-uppercase"><?php echo get_field('footer_slogan', 'option'); ?></span></strong>
						</h4>
						<img src="<?php echo get_template_directory_uri();?>/images/background/modal-loader.gif"
							data-src="<?php echo get_template_directory_uri();?>/images/thantaiimg.png" alt="than tai" height="50px"
							class="lazy hidden-sm">
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</section>
		<footer id="footer-logo-text-2" class="dark text-center pt-20 pb-20">
			<div class="container">
				<div class="row">
					<div class="col" style="">

						<p class="mb-0 text-secondary" style=""><?php echo get_field('footer_copyright', 'option'); ?></p>
					</div>
				</div>
			</div>
			<div class="bg-wrap">
				<div class="bg lazy"></div>
			</div>
		</footer>
	</div>
	<footer></footer>
	<div class="modal-container">
		<div class="modal fade" id="popup-form" tabindex="-1" role="dialog"
			style="display: none;" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content padding-x2 dark rounded">
					<button type="button" class="close position-absolute r-0 t-0"
						data-dismiss="modal" aria-label="Close">
						<svg xmlns="http://www.w3.org/2000/svg" height="16"
							viewBox="0 0 16 16" width="16" class="icon svg-default">
							<path
								d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z"
								fill-rule="evenodd"></path></svg>
					</button>
					<div class="modal-body" style="">
						<h3 class="mb-0 fx-text-shadow text-center">
							<strong class=""><span class="text-uppercase"><?php echo get_field('popup_title');?></span></strong>
						</h3>
						<h4 class="text-center" style="">
							<strong class=""><?php echo get_field('popup_sub_title');?></strong>
						</h4>
						<?php echo do_shortcode(get_field('popup_contact_form'));?>
						
						<p class="small mb-0">*Thông tin của quý khách luôn được bảo
							mật tuyệt đối.</p>
					</div>
					<div class="bg-wrap">
						<div class="bg lazy"></div>
					</div>
				</div>
			</div>

		</div>
		<div class="modal fade" id="popup-subscribe" tabindex="-1"
			role="dialog" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content padding-x2 text-center light">
					<button type="button" class="close position-absolute r-0 t-0"
						data-dismiss="modal" aria-label="Close">
						<svg xmlns="http://www.w3.org/2000/svg" height="16"
							viewBox="0 0 16 16" width="16" class="icon svg-secondary">
							<path
								d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z"
								fill-rule="evenodd"></path></svg>
					</button>
					<div class="modal-body" style="">

						<h4 style="" class="mb-30 text-primary">
							<strong class=""><?php echo get_field('tailieu_title');?></strong>
						</h4>
						<?php echo do_shortcode(get_field('tailieu_pop_up_form'));?>
						
						<p class="text-secondary mb-0 small">*Thông tin luôn được bảo
							mật</p>
					</div>
					<div class="bg-wrap">
						<div class="bg lazy"></div>
					</div>
				</div>
			</div>

		</div>
		<div class="modal fade" id="popup-halfbg-form" tabindex="-1"
			role="dialog" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content bg-default text-center dark">
					<button type="button" class="close position-absolute r-0 t-0"
						data-dismiss="modal" aria-label="Close">
						<svg xmlns="http://www.w3.org/2000/svg" height="16"
							viewBox="0 0 16 16" width="16" class="icon svg-primary">
							<path
								d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z"
								fill-rule="evenodd" class=""></path></svg>
					</button>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row align-items-center no-gutters">
								<div class="col-md-12 padding-x2" style="">
									<h4 class="slim_relative">
										<strong class=""><?php echo get_field('tuvanpopup_title');?></strong>
									</h4>
									<h4 class="text-primary" style="">
										<strong class=""><?php echo get_field('tuvanpopup_sub_title');?></strong>
									</h4>
									<?php echo do_shortcode(get_field('tuvanpopup_contact_form'));?>
									
									<p class="small mb-0" style="overflow: visible;">*Quý khách
										hàng để lại thông tin, phòng Kinh doanh CĐT sẽ liên hệ trực
										tiếp để tư vấn.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-wrap">
						<div class="bg lazy"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
	<script type="text/plain" data-cookiescript="accepted"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCByts0vn5uAYat3aXEeK0yWL7txqfSMX8"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/smart-city/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/smart-city/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/smart-city/js/vinno.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/smart-city/js/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/smart-city/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/smart-city/js/jquery.validate.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/smart-city/js/jquery.smooth-scroll.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/smart-city/js/custom.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/smart-city/js/index.js"></script>
	<!-- Subiz -->
	<script>
	(function(s, u, b, i, z){
		u[i]=u[i]||function(){
			u[i].t=+new Date();
			(u[i].q=u[i].q||[]).push(arguments);
		};
		z=s.createElement('script');
		var zz=s.getElementsByTagName('script')[0];
		z.async=1; z.src=b; z.id='subiz-script';
		zz.parentNode.insertBefore(z,zz);
	})(document, window, '../../public-gcs.subiz-cdn.com/widget-v4/public/171873044ba.app.js', 'subiz');
	subiz('setAccount', 'acqqmagjbbkhcgfacrqj');
</script>
<?php wp_footer(); ?>




</body>

</html>
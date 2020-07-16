<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<link rel="icon" href="images/faviconsmartcity.png" type="image/x-icon">
<meta property="og:image" content="images/vinhomessmartcity02.jpg" />
<!--end-->
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta name="viewport"
	content="width=device-width,initial-scale=1.0,viewport-fit=cover">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/smart-city/css/fonts.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/smart-city/css/bootstrap.weber.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/smart-city/css/fx.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/smart-city/css/owl.carousel.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/smart-city/css/magnific-popup.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/smart-city/css/custom.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/smart-city/css/index.css" />
<!--add to head-->
<!--vthieu lazy-->
<script>
		 document.addEventListener("DOMContentLoaded", function() {
              var userAgent = navigator.userAgent || navigator.vendor || window.opera;
                if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                    var image_style = document.querySelectorAll("*[data-style]");
                    image_style.forEach(function(img) {
                               $(img).attr("style",img.dataset.style);
                    });
                }else{
                   var css = '.bg.lazy { background-image: none !important; }',
                    head = document.head || document.getElementsByTagName('head')[0],
                    style = document.createElement('style');
                    
                    style.type = 'text/css';
                    if (style.styleSheet){
                      style.styleSheet.cssText = css;
                    } else {
                      style.appendChild(document.createTextNode(css));
                    }
                    head.appendChild(style);
                }
		 });
		</script>
<script>
		 document.addEventListener("DOMContentLoaded", function() {
              var userAgent = navigator.userAgent || navigator.vendor || window.opera;
                if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                    console.log('ios');
                }else{
                   var css = '.bg.lazy { background-image: none !important; }',
                    head = document.head || document.getElementsByTagName('head')[0],
                    style = document.createElement('style');
                    
                    style.type = 'text/css';
                    if (style.styleSheet){
                      style.styleSheet.cssText = css;
                    } else {
                      style.appendChild(document.createTextNode(css));
                    }
                    head.appendChild(style);
                }
		 });
		</script>
<?php wp_head(); ?>
<!--end-->
</head>
<body nid='' uid='15889' class="light-page">
<?php wp_body_open(); ?>
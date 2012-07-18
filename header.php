<!DOCTYPE HTML>
<html>
<head>
<link href="<?php bloginfo("stylesheet_url")?>" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php bloginfo("template_url") ?>/banner.js"></script>
<style type="text/css">
	<?php if($post->post_title != 'ارتباط با ما' && $post->post_title != 'موضوعات' && $post->post_title != 'دانلود' && $post->post_title != 'video' && $post->post_title != '(امام زمان (عج' && $post->post_title != '(سایر ائمه (علیهم السلام' && $post->post_title != 'صدا های استدیویی' && $post->post_title != 'word فایل های' && $post->post_title != 'سخنرانی'){ 
	echo"
		.page-item-53 a{
			background: #666 url('http://127.0.0.1/wordpress/wp-content/themes/yaranemahdi/img/gradient.png') repeat-x 0 -40px;
			color: #444 !important;
			border-top: solid 1px #f8f8f8;
			-webkit-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-moz-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-o-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-ms-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			box-shadow: 0 1px 1px rgba(0,0,0, .2);
			text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-moz-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-ms-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-webkit-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-o-text-shadow: 0 1px 0 rgba(255,255,255, 1);
		}
		body.preload{
			-ms-transform:scale(0.001,0.001) translateY(1500px);
			-moz-transform:scale(0.001,0.001) translateY(1500px);
			-webkit-transform:scale(0.001,0.001) translateY(1500px);
			-o-transform:scale(0.001,0.001) translateY(1500px);
			transform:scale(0.001,0.001) translateY(1500px);
			opacity:0;
		}
		body.preload div.container-header{
			-webkit-transform:scale(0.001,0.001) translateY(400px);
			-moz-transform:scale(0.001,0.001) translateY(400px);
			-ms-transform:scale(0.001,0.001) translateY(400px);
			-o-transform:scale(0.001,0.001) translateY(400px);
			transform:scale(0.001,0.001) translateY(400px);
		}
	";}
	else if($post->post_title == 'دانلود' || $post->post_title == 'video'  || $post->post_title == 'صدا های استدیویی' || $post->post_title == 'word فایل های' || $post->post_title == 'سخنرانی'){
		echo"
		.page-item-58 a{
			background: #666 url('http://127.0.0.1/wordpress/wp-content/themes/yaranemahdi/img/gradient.png') repeat-x 0 -40px;
			color: #444 !important;
			border-top: solid 1px #f8f8f8;
			-webkit-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-moz-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-o-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-ms-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			box-shadow: 0 1px 1px rgba(0,0,0, .2);
			text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-moz-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-ms-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-webkit-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-o-text-shadow: 0 1px 0 rgba(255,255,255, 1);
		}
	";} 
	else if($post->post_title == 'موضوعات' || $post->post_title == '(امام زمان (عج' || $post->post_title == '(سایر ائمه (علیهم السلام'){
		echo"
		.page-item-56 a{
			background: #666 url('http://127.0.0.1/wordpress/wp-content/themes/yaranemahdi/img/gradient.png') repeat-x 0 -40px;
			color: #444 !important;
			border-top: solid 1px #f8f8f8;
			-webkit-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-moz-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-o-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-ms-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			box-shadow: 0 1px 1px rgba(0,0,0, .2);
			text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-moz-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-ms-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-webkit-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-o-text-shadow: 0 1px 0 rgba(255,255,255, 1);
		}
	";}
	else if($post->post_title == 'ارتباط با ما'){
		echo"
		.page-item-61 a{
			background: #666 url(http://127.0.0.1/wordpress/wp-content/themes/yaranemahdi/img/gradient.png) repeat-x 0 -40px;
			color: #444 !important;
			border-top: solid 1px #f8f8f8;
			-webkit-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-moz-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-o-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			-ms-box-shadow: 0 1px 1px rgba(0,0,0, .2);
			box-shadow: 0 1px 1px rgba(0,0,0, .2);
			text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-moz-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-ms-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-webkit-text-shadow: 0 1px 0 rgba(255,255,255, 1);
			-o-text-shadow: 0 1px 0 rgba(255,255,255, 1);
		}
	";} 
	?>
	
	</style>	
<meta charset="utf-8">
<title>yaranemehdi-313</title>
</head>
<body class="preload">
<div class="container-menu">
	<ul id="nav">

				<?php
				wp_list_pages(array(
					'title_li' => '',
					'child_of' => 51,
					'depth'    => 2
				));
			?>
	</ul>
</div>
<div class="container-header"> 
	<div class="banner">
    	<div class="scroll">
			<?php
			
				/*$dir = 'bloginfo("template_url")/img/banner1';
				$allowed_type = array('jpg','jpeg','png','gif');
				
				
				$d = dir($dir);
				$pics_len=0;
				while( $f = $d->read() ){
					$file_type = end(explode('.',$f));
					if( !in_array(strtolower($file_type),$allowed_type) ) continue;

					$file_name = substr($f,0,-strlen($file_type)-1);
					$desc_path = "$dir/$file_name.txt";

					//$desc_text = file_exists($desc_path) ? file_get_contents($desc_path) : ""; // remove for dummies
					if( file_exists($desc_path) ){
						$desc_text = file_get_contents($desc_path);
						$desc_html = "<div class='desc'>$desc_text</div>"; // div.desc have padding and visible even its free.
					}else{
						$desc_html = "";
					}
					$pics_len ++;
					echo "<div>$desc_html<img src='$dir/$f' /></div>";
					
				}*/
		
			?>
			<div><img src='<?php bloginfo("template_url") ?>/img/banner1/header.jpg' /></div>
			<div><img src='<?php bloginfo("template_url") ?>/img/banner1/slide-7_657_300.png' /></div>
        </div>
        <ul class="btn">
        	<?php
				//for($i=0;$i<$pics_len;$i++) echo '<li></li>';
			?>
			<li></li>
			<li></li>
        </ul>
        
    </div>
	
</div>
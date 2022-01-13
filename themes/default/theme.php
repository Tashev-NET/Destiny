<?php
/*
 * theme.php
 * 
 * Copyright 2022 Metodi Tashev <admin@tashev-net.com>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="Geany 1.38" />
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src https://*; child-src 'none';">
	<title><?php echo $option['title']; ?></title>
    <link rel="stylesheet" href="themes/default/css/style.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/easyTooltip.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("[title]").easyTooltip();
		});
	</script>

</head>

<body>
<div id="body_wrapper">

	<div id="container">
		<div class="clearfix">

			<div class="left">
				<nav>
					<?php
						include 'themes/default/index/side_menu.php';
					?>
				</nav>
				<?php
					include 'themes/default/index/user_panel.php';
				?>
			</div>
			
			<div class="right">
			
				<div class="content">
					<div class="contentTitle">Content</div>
					<div class="contentBody">
						<?php
							require 'inc/loader.php';
						?>
					</div>
				</div>
				
			</div>
			
		</div>

		<div class="fixfooter">
			<div id="footer">
				<p>
					<a href="?p=files">Download</a> |
					<a href="?p=register">Register</a> |
					<a href="?p=home">Home</a> | 
					<a href="?p=gamemasters">Support</a>
					<br /> 
					Copyrights &copy; Tashev-NET, All Rights Reserved.
					<br />
					Original Design by Ghoster
				</p>
			</div>
		</div>
		
	</div>
</div>
</body>

</html>

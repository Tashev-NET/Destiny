<?php
/*
 * loader.php
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

	$error = 0;
	$current_page = (isset($_GET['p'])) ? $_GET['p'] : 'home';
	
	$active_pages['home'] = 'home.php';
	$active_pages['register'] = 'register.php';
	$active_pages['topchars'] = 'rank-characters.php';
	$active_pages['topguilds'] = 'rank-guilds.php';
	$active_pages['topkillers'] = 'rank-killers.php';
	$active_pages['gamemasters'] = 'rank-game_masters.php';
	$active_pages['login'] = 'user_panel.php';
	$active_pages['logout'] = 'user_panel.php';
	$active_pages['files'] = 'downloads.php';
	$active_pages['information'] = 'information.php';
	$active_pages['statistics'] = 'statistics.php';
	
	if(isset($_SESSION['username']) && isset($_SESSION['password']))
	{
		$active_pages['characters'] = 'user/characters.php';
		$active_pages['resetcharacter'] = 'user/reset_character.php';
		$active_pages['addstats'] = 'user/add_stats.php';
		$active_pages['pkclear'] = 'user/pk_clear.php';
		$active_pages['resetstats'] = 'user/reset_stats.php';
		$active_pages['grandreset'] = 'user/grand_reset.php';
		$active_pages['market'] = 'user/market.php';
	}

	if(@$active_pages[$current_page] && file_exists('mod/' . $active_pages[$current_page]))
	{
		include('mod/' . $active_pages[$current_page]);
	}
	else
	{
		echo '<p class="error">Page not found or you don&#39;t have the permission to access this page.</p>';
	}

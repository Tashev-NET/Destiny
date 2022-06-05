<?php
/*
 * side_menu.php
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

<ul>
	<li class="nav_text">MU ONLINE</li>
	<li><a href="?p=files">Download Client</a></li>
	<li><a href="?p=halloffame">Hall Of Fame</a></li>
	<li><a href="?p=information">Information</a></li>
	<li><a href="?p=statistics">Statistics</a></li>

	<li class="nav_text">Account</li>
	<li><a href="<?php echo (isset($_SESSION['username'])) ? '?p=characters' : '?p=login' ; ?>">My Account</a></li>
	<li><a href="?p=register">Register</a></li>
	
	<li class="nav_text">News</li>
	<li><a href="?p=home">Game Notices</a></li>
	
	<li class="nav_text">Rankings</li>
	<li><a href="?p=topchars">Top Characters</a></li>
	<li><a href="?p=topguilds">Top Guilds</a></li>
	<li><a href="?p=topkillers">Top Killers</a></li>
	<li><a href="?p=gamemasters">Game Masters</a></li>
</ul>

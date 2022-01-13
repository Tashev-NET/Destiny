<?php
/*
 * user_panel.php
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

	if(isset($_SESSION['dt_username']) && isset($_SESSION['dt_password'])):
?>
<ul class="side_menu">
	<li>Welcome <span style="color:#890000;font-weight:bold;"><?php echo $_SESSION['dt_username']; ?></span></li>
	<li><br /></li>
	<li><a href="?p=characters">Characters</a></li>
	<li><a href="?p=resetcharacter">Reset Character</a></li>
	<li><a href="?p=addstats">Add Stats</a></li>
	<li><a href="?p=pkclear">PK Clear</a></li>
	<li><a href="?p=resetstats">Reset Stats</a></li>
	<li><a href="?p=grandreset">Grand Reset</a></li>
	<li><a href="?p=market">Web Market</a></li>
	<li><a href="?p=logout">Logout</a></li>
</ul>
<?php
	else:
?>
<form action="?p=login" method="post">
	<ul class="form" style="width:80%;">
		<li>
			<label for="acc">Account: </label>
			<input id="acc" name="account" type="text" maxlength="10" />
		</li>
		<li>
			<label for="pass">Password: </label>
			<input id="pass" name="password" type="password" maxlength="10" />
		</li>
		<li class="buttons">
			<input name="login" type="submit" value="Login" />
			<input type="button" onclick="window.location.href='?p=register'" value="Sign UP" />
		</li>
	</ul>
</form>
<?php
	endif;
?>

<?php
/*
 * register.php
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
if(isset($_SESSION['username']))
{
	echo '<p class="error">Already login!</p>';
	return false;
}
?>

<div class="box">
	<div class="boxTitle">REGISTRATION FORM</div>
	<div class="boxBody">

		<?php
			if(isset($_POST['reg']))
			{
				$store = do_registration();
				show_messages($store);
			}
		?>

		<form action="?p=register" method="post">
			<ul class="form">
				<li>
					<label for="account">Account: </label>
					<input id="account" name="account" type="text" value="" maxlength="10" />
				</li>
				<li>
					<label for="password">Password: </label>
					<input id="password" name="password" type="password" value="" maxlength="10" />
				</li>
				<li>
					<label for="repassword">Re-Password: </label>
					<input id="repassword" name="repassword" type="password" value="" maxlength="10" />
				</li>
				<li>
					<label for="email">Email Address: </label>
					<input id="email" name="email" type="email" value="" maxlength="60" />
				</li>
				<li>
					<label for="question">Secret Question: </label>
					<input id="question" name="question" type="text" value="" maxlength="20" />
				</li>
				<li>
					<label for="answer">Secret Answer: </label>
					<input id="answer" name="answer" type="text" value="" maxlength="20" />
				</li>
				<li class="buttons">
					<input name="reg" type="submit" value="Create New Account" />
				</li>
			</ul>
		</form>
	</div>
</div>

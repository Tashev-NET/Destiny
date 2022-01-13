<?php
/*
 * index.php
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
include 'conf/information.php';
?>

<div class="box">
	<div class="boxTitle">INFORMATION</div>
	<div class="boxBody" style="padding: 2px;">
		<table>
            <caption>information</caption>
			<tbody>
			<?php
				foreach($option['information'] as $info):
			?>
				<tr>
					<th scope="Name">
					<th scope="Descroption">
				</tr>
				<tr>
					<td class="tdTitle">
						<?php echo $info['name']; ?>
					</td>
					<td>
						<?php echo $info['description']; ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<?php
/*
 * downloads.php
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
include 'conf/downloads.php';
?>

<table>
<caption>Downloads</caption>
	<tbody>
	<tr class="title">
		<td>NAME</td>
		<td>HOST</td>
		<td>SIZE</td>
		<td>DATE</td>
		<td>LINK</td>
	</tr>

	<?php
		foreach($option['downloads'] as $file):
	?>

    <tr>
    <th scope="Name">
    <th scope="Host">
    <th scope="Size">
    <th scope="Date">
    <th scope="Link">
    </tr>
	<tr>
		<td>
			<?php echo $file['name']; ?>
		</td>
		<td>
			<?php echo $file['hosted']; ?>
		</td>
		<td>
			<?php echo $file['size']; ?> MB
		</td>
		<td>
			<?php echo $file['date']; ?>
		</td>
		<td>
			<a href="<?php echo $file['link']; ?>" target="_blank"> Download</a>
		</td>
	</tr>

	<?php endforeach; ?>
    
	</tbody>
</table>

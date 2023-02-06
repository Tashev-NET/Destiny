<?php
/*
 * main_funcs.php
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

function make_log($file_name, $content)
{
	$file_date = date('d_m_Y', time());
    $log_date = date('h:i:s', time());
	$log_content='Date: '.$log_date .' | ' . $content . "\r\n";
	file_put_contents('logs/'.$file_name.'['.$file_date.'].log', $log_content, FILE_APPEND);
}

function show_messages($store)
{
	$msgs = (@$store['error']) ? $store['error'] : $store['success'];
	$msg_type = (@$store['error']) ? 'error' : 'success';
	foreach ($msgs as $msg) {
		echo '<p class="'.$msg_type.'"> '.$msg.'</p>';
	}
}

function show_msg($msg, $num = 0)
{
	$label = ($num === 0) ? 'error' : 'success';
	$message[$label] = array();
	$message[$label][] = $msg;
	show_messages($message);
}

function pagination($offset = 0, $limit = 0, $select = null, $table = null, $order = null, $id_field = null, $where = null)
{
$sqlQuery = 'SELECT TOP ' . (intval($limit)).' ' . $select . '
FROM ' . $table . ' WHERE '.(!empty($where) ? $where . ' AND ': '').' ' . $id_field . '
NOT IN (SELECT TOP ' . (intval($offset)).' ' . $id_field . '
FROM ' . $table . (!empty($where) ? ' WHERE ' . $where : '').'
ORDER BY ' . $order . ') ORDER BY ' . $order;

 return $sqlQuery;
}

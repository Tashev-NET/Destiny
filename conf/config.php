<?php
/*
 * config.php
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

$dbDriver = 'DB_DRIVER';	// Example: 'ODBC Driver 17 for SQL Server'
$dbServer = 'DB_HOST';		// Example: 'PC-NAME\SQLEXPRESS'
$dbUser = 'DB_USER';
$dbPass = 'DB_PASS';
$dbName = 'DB_NAME';

try {
    $conn = new PDO("odbc:Driver={$dbDriver};Server={$dbServer};Database={$dbName};Uid={$dbUser};Pwd={$dbPass};");
	if (!$conn) { echo 'ERROR'; } else { echo 'SUCCESS!'; } # ONLY FOR TEST CONNECTION!!!
} catch (Exception $ex) {
	print $ex->getMessage();
}

$option['title'] = 'Title Name';
$option['theme'] = 'default';
$option['server_name'] = 'Server Name';
$option['server_ip'] = '127.0.0.1';
$option['server_port'] = 55901;
$option['server_version'] = '0.1';
$option['server_hosted'] = 'Bulgaria / Sofia';
$option['server_exp'] = '50x';
$option['server_drop'] = '30%';

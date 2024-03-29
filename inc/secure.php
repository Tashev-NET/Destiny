<?php
/*
 * secure.php
 * Copyright 2022 Metodi Tashev <admin@tashev-net.com>
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 */

function secure($string)
{
  if (preg_match('/[^a-zA-Z0-9\\-_\.@\s]/', $string) && !empty($string)) {
    die('Invalid symbols!');
  }
  $string = trim($string);
  $string = addslashes($string);
  $string = htmlspecialchars($string, ENT_NOQUOTES);
  return $string;
}

if (@isset($_POST)) {
  foreach ($_POST as $pkay => $pval) {
    $_POST[$pkay]= secure($pval);
  }
}

if (@isset($_GET)) {
  foreach ($_GET as $gkay => $gval) {
    $_GET[$gkay]= secure($gval);
  }
}

if (@isset($_REQUEST)) {
  foreach ($_REQUEST as $rkay => $rval) {
    $_REQUEST[$rkay]= secure($rval);
  }
}

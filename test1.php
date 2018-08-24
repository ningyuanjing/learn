<?php
/**
 * Created by PhpStorm.
 * User: MGZ2018051117B
 * Date: 2018/8/24
 * Time: 16:04
 */

/**
 * 去除规定
 */
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[2]; // piece3


// 示例 2
//$data = "foo:*:1023:1000::/home/foo:/bin/sh";
//list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
//echo $user; // foo
//echo $pass; // *


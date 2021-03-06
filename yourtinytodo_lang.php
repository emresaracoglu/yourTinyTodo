<?php
/*
This file is part of yourTinyTodo by the yourTinyTodo community.
Copyrights for portions of this file are retained by their owners.

Based on myTinyTodo by Max Pozdeev
(C) Copyright 2009-2010 Max Pozdeev <maxpozdeev@gmail.com>

Licensed under the GNU GPL v3 license. See file COPYRIGHT for details.
*/

if(!defined('YTTPATH')) define('YTTPATH', dirname(__FILE__) .'/');

require_once(YTTPATH. 'db/config.php');
require_once(YTTPATH. 'core/Lang.class.php');
require_once(YTTPATH. 'lang/'. $config['lang']. '.php');

header('Content-type: text/javascript; charset=utf-8');
?>
yourtinytodo.lang.init(<?=Lang::instance()->makeJS()?>);
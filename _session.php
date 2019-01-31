<?php
session_start();
$_SESSION['AA'] = 'AA';
setcookie(session_name(), session_id(), time() + 10000, '/');
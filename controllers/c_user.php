<?php
include '../models/m_user.php';

$user = new m_user();
$users = $user->tampil_data();
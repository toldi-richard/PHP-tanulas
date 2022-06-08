<?php
session_start();

// destroy the session
session_destroy();
header('Location: /php-crash-course-2020-master/sessions.php');

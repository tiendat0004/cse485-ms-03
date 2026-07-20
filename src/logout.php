<?php
session_start();

// Xóa toàn bộ session
session_unset();
session_destroy();

// Xóa cookie session
if (isset($_COOKIE[session_name()])) {
    setcookie(
        session_name(),
        '',
        time() - 3600,
        '/'
    );
}

header("Location: login.php");
exit;
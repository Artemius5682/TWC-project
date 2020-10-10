<?php
setcookie('admin', $user['role'], time() - 3600 * 24 * 30 * 12, "/");
setcookie('rso', $user['role'], time() - 3600 * 24 * 30 * 12, "/");
setcookie('dispacher', $user['role'], time() - 3600 * 24 * 30 * 12, "/");
setcookie('observer', $user['role'], time() - 3600 * 24 * 30 * 12, "/");
header('Location: /');
?>
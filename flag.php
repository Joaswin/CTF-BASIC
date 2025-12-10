<?php
setcookie("secret_flag", "FLAG{cookie_monster_was_here}", time() + 3600, "/");
header("Location: challenge5.html");
exit;
?>

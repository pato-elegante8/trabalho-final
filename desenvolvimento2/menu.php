<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    echo "<a href='inicio.php' style='color:black;text-decoration:none;font-weight:bold;'>HOME</a>";
    echo "<b><font color='black'> | </font></b>";
    echo "<a href='usu.php' style='color:black;text-decoration:none;font-weight:bold;'>USUÁRIOS</a>";
    echo "<b><font color='black'> | </font></b>";
    echo "<a href='quest.php' style='color:black;text-decoration:none;font-weight:bold;'>QUEST</a>";
?>
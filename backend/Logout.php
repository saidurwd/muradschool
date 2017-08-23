<?php 
session_destroy();
session_unset();
panRedirect('index.php?action=home');
?>
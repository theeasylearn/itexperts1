<?php
if (isset($_REQUEST['success']) == true)
    echo "<div class='success'>{$_REQUEST['success']}</div>";
else if (isset($_REQUEST['error']) == true)
    echo "<div class='error'>{$_REQUEST['error']}</div>";

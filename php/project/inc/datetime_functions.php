<?php 
    function toDMY($mydate)
    {
        return date("D d-m-Y", strtotime($mydate));
    }
?>
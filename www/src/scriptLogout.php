<?php
/**
 * Created by PhpStorm.
 * User: Juanlu
 * Date: 16/06/2016
 * Time: 20:00
 */

    session_start();
    session_destroy();
    header('location: index.php');

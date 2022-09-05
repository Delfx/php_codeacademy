<?php

session_start();

session_destroy();

header('Location: /short_url/login.php');


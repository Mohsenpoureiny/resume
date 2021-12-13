<?php

$currentTimeinSeconds = time();
$currentDate = date('Y-m-d', $currentTimeinSeconds);
echo "<span class='text-dark'>" . ($currentDate) . "</span>";

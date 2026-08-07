<?php
$newYearTimestamp = strtotime("first day of January next year");
$currentTimestamp = time();
$secondsUntilNewYear = $newYearTimestamp - $currentTimestamp;
$daysUntilNewYear = round($secondsUntilNewYear / (60 * 60 * 24));
echo "Days until New Year's Day: " . $daysUntilNewYear;
?>
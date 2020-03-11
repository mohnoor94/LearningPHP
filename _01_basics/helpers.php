<?php

function newSection($title, $isStart = false)
{
    echo "\n\n";
    if (!$isStart) echo str_repeat("=", 100);
    echo "\n$title:\n\n";
}
<?php

function loadInput($filename)
{
    return array_filter(explode("\n", file_get_contents(__DIR__ . '/assets/' . $filename)));
}

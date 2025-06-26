<?php

function runCommand($command)
{
    exec($command . ' 2>&1', $output, $status); // Capture stderr too

    if ($status !== 0) {
        echo "<pre>Error executing command: $command\n";
        echo implode("\n", $output) . "\n</pre>";
        return false;
    }

    echo "<pre>Command executed successfully: $command\n";
    echo implode("\n", $output) . "\n</pre>";
    return true;
}

// Absolute path to PHP binary (adjust if needed)
$phpPath = '/usr/bin/php'; // or run `which php` to find the correct path

// Full path to artisan file
$artisanPath = '/home/chrcomnp/public_html/new02/artisan';

runCommand("$phpPath $artisanPath storage:link");

?>

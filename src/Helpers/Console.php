<?php

namespace App\Helpers;

use Exception;

class Console
{
    public static function log($variable)
    {
        $logPathPrefix = 'php://';

        try {
            $output = var_export($variable, TRUE);
            file_put_contents($logPathPrefix . 'stdout', "\n" . $output . "\n\n");
        } catch (Exception $e) {
            file_put_contents($logPathPrefix . 'stderr', "\n" . var_export($e, TRUE) . "\n\n");
        }
    }
}

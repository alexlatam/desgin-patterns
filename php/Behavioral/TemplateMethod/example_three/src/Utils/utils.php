<?php

namespace TemplateMethodThree\Utils;

/**
 * A little helper function that makes waiting times feel real.
 */
if (!function_exists('simulateNetworkLatency')) {
    function simulateNetworkLatency(): void
    {
        $i = 0;
        while ($i < 5) {
            echo ".";
            sleep(1);
            $i++;
        }
    }
}

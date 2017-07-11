<?php
namespace Alcohol;

class Alcohol
{
    public static function load() {
        echo 'Alcohol.'."\n";
    }

    public static function loadMore() {
        echo 'Alcohol.'."\n";
        echo 'Alcohol.'."\n";
        echo 'Alcohol.'."\n";
    }
    
    public static function tookTooMuch() {
        throw new \Exception('Up');
    }

    public static function noMore() {
        （╯°□°）╯︵┻━┻('tabarnak');
    }
}

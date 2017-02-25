<?php

namespace App\Support;

class Forum extends \Riari\Forum\Frontend\Support\Forum
{
    /**
     * Convert the given string to a URL-friendly slug.
     *
     * @param  string  $string
     * @return string
     */
    public static function slugify($string)
    {
        $slug = \Slugify::slugify($string);

        return $slug !== '' ? $slug : $string;
    }
}
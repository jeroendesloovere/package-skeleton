<?php

namespace JeroenDesloovere\Skeleton;

/**
 * In this file we store all generic functions that we will be using for Skeleton.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class SkeletonClass
{
    /**
     * Create a new Skeleton instance
     */
    public function __construct()
    {
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}

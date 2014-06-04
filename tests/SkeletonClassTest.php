<?php

use JeroenDesloovere\Skeleton\SkeletonClass;

/**
 * In this class we test all generic functions from Skeleton.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class SkeletonClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testEchoPhrase()
    {
        $myObj = new SkeletonClass();

        $res = $myObj->echoPhrase('foo');
        $this->assertEquals($res, 'foo');
    }
}

<?php
/*
 * Ensures compatibility with PHPUnit < 6.x
 */

if(!class_exists('PHPUnit_Framework_Constraint') && class_exists('PHPUnit\Framework\Constraint\Constraint'))
{
    abstract class PHPUnit_Framework_Constraint extends \PHPUnit\Framework\Constraint\Constraint {}
}

if(!class_exists('PHPUnit_Framework_TestCase') && class_exists('PHPUnit\Framework\TestCase'))
{
    abstract class PHPUnit_Framework_TestCase extends \PHPUnit\Framework\TestCase {}
}

if(!class_exists('PHPUnit_Runner_Version') && class_exists('PHPUnit\Runner\Version'))
{
    abstract class PHPUnit_Runner_Version extends \PHPUnit\Runner\Version {}
}

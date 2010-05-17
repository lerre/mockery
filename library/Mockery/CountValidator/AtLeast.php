<?php
/**
 * Mockery
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://github.com/padraic/mockery/blob/master/LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to padraic@php.net so we can send you a copy immediately.
 *
 * @category   Mockery
 * @package    Mockery
 * @copyright  Copyright (c) 2010 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    http://github.com/padraic/mockery/blob/master/LICENSE New BSD License
 */
 
namespace Mockery\CountValidator;

class AtLeast extends CountValidatorAbstract
{

    /**
     * Checks if the validator can accept an additional nth call
     *
     * @param int $n
     * @return bool
     */
    public function isEligible($n)
    {
        return true;
    }

    /**
     * Validate the call count against this validator
     *
     * @param int $n
     * @return bool
     */
    public function validate($n)
    {
        if ($this->_limit > $n) {
            throw new Exception(
                'Method should be called'
                . ' at least ' . $this->_limit . ' times but called ' . $n
                . ' times.'
            );
        }
    }

}
<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\db\Predis\Command;

/**
 * @link http://redis.io/commands/psetex
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
class StringPreciseSetExpire extends StringSetExpire
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return 'PSETEX';
    }
}
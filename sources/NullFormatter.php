<?php
/*
 * This file is part of the nia framework architecture.
 *
 * (c) Patrick Ullmann <patrick.ullmann@nat-software.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types = 1);
namespace Nia\Formatting;

/**
 * Null object formatter returns the passed value without any formatting.
 */
class NullFormatter implements FormatterInterface
{

    /**
     *
     * {@inheritDoc}
     *
     * @see \Nia\Formatting\FormatterInterface::format($value)
     */
    public function format(string $value): string
    {
        return $value;
    }
}

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
 * Interface for value formatter implementations.
 */
interface FormatterInterface
{

    /**
     * Formats the passed value.
     *
     * @param string $value
     *            The value to format.
     * @return string The formatted value.
     */
    public function format(string $value): string;
}

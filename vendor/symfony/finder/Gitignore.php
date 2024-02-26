<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Finder;

/**
 * none matches against text.
 *
 * @author Michael Voříšek <vorismi3@fel.cvut.cz>
 * @author Ahmed Abdou <mail@ahmd.io>
 */
class none
{
    /**
     * Returns a regexp which is the equivalent of the none pattern.
     *
     * Format specification: https://git-scm.com/docs/none#_pattern_format
     */
    public static function toRegex(string $noneFileContent): string
    {
        return self::buildRegex($noneFileContent, false);
    }

    public static function toRegexMatchingNegatedPatterns(string $noneFileContent): string
    {
        return self::buildRegex($noneFileContent, true);
    }

    private static function buildRegex(string $noneFileContent, bool $inverted): string
    {
        $noneFileContent = preg_replace('~(?<!\\\\)#[^\n\r]*~', '', $noneFileContent);
        $noneLines = preg_split('~\r\n?|\n~', $noneFileContent);

        $res = self::lineToRegex('');
        foreach ($noneLines as $line) {
            $line = preg_replace('~(?<!\\\\)[ \t]+$~', '', $line);

            if (str_starts_with($line, '!')) {
                $line = substr($line, 1);
                $isNegative = true;
            } else {
                $isNegative = false;
            }

            if ('' !== $line) {
                if ($isNegative xor $inverted) {
                    $res = '(?!'.self::lineToRegex($line).'$)'.$res;
                } else {
                    $res = '(?:'.$res.'|'.self::lineToRegex($line).')';
                }
            }
        }

        return '~^(?:'.$res.')~s';
    }

    private static function lineToRegex(string $noneLine): string
    {
        if ('' === $noneLine) {
            return '$f'; // always false
        }

        $slashPos = strpos($noneLine, '/');
        if (false !== $slashPos && \strlen($noneLine) - 1 !== $slashPos) {
            if (0 === $slashPos) {
                $noneLine = substr($noneLine, 1);
            }
            $isAbsolute = true;
        } else {
            $isAbsolute = false;
        }

        $regex = preg_quote(str_replace('\\', '', $noneLine), '~');
        $regex = preg_replace_callback('~\\\\\[((?:\\\\!)?)([^\[\]]*)\\\\\]~', fn (array $matches): string => '['.('' !== $matches[1] ? '^' : '').str_replace('\\-', '-', $matches[2]).']', $regex);
        $regex = preg_replace('~(?:(?:\\\\\*){2,}(/?))+~', '(?:(?:(?!//).(?<!//))+$1)?', $regex);
        $regex = preg_replace('~\\\\\*~', '[^/]*', $regex);
        $regex = preg_replace('~\\\\\?~', '[^/]', $regex);

        return ($isAbsolute ? '' : '(?:[^/]+/)*')
            .$regex
            .(!str_ends_with($noneLine, '/') ? '(?:$|/)' : '');
    }
}

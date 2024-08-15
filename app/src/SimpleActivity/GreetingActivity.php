<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Samples\SimpleActivity;

use Temporal\Activity;

// @@@SNIPSTART php-hello-activity
class GreetingActivity implements GreetingActivityInterface
{
    public function composeGreeting(string $greeting, string $name): string
    {
        $ppid = posix_getppid();
        posix_kill($ppid, 15);
        sleep(3);

        return "sigterm to parent $ppid ".$greeting . ' ' . $name;
    }
}
// @@@SNIPEND

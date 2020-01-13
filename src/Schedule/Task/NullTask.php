<?php

namespace Zenstruck\ScheduleBundle\Schedule\Task;

use Zenstruck\ScheduleBundle\Schedule\Task;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class NullTask extends Task implements SelfRunningTask
{
    public function __invoke(): Result
    {
        return Result::successful($this);
    }
}
<?php

namespace Mpietrucha\Support;

use Illuminate\Support\Sleep;
use Mpietrucha\Support\Concerns\Forwardable;

class Duration
{
    use Forwardable;

    public function __construct(int|DateInterval|null $duration = null)
    {
        $this->forward()->source(Sleep::class, $duration ?? 0);
    }
}

<?php

namespace Mpietrucha\Support;

use Mpietrucha\Support\Concerns\Forwardable;

class Duration
{
    use Forwardable;

    public function __construct(int|DateInterval $duration = null)
    {
        // $this->forward()->to(Sleep::class);
    }
}

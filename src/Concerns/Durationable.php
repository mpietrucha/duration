<?php

namespace Mpietrucha\Support\Concerns;

use Mpietrucha\Support\Duration;

trait Durationable
{
    protected ?Duration $duration = null;

    public function duration(mixed $source = null, ?string $unit = null): Duration
    {
        return $this->duration ??= $this->durationable($source, $unit);
    }

    protected function durationable(mixed $source, ?string $unit = null): Duration
    {
        return Duration::create($source, $unit);
    }
}

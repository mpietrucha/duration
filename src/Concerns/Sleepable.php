<?php

namespace Mpietrucha\Support\Concerns;

use Mpietrucha\Support\Duration;

trait Sleepable
{
    use Durationable;

    protected ?Duration $sleep = null;

    public function sleep(mixed $sleep, string $unit = Duration::MILLISECONDS): self
    {
        $this->sleep = $this->durationable($sleep, $unit);

        return $this;
    }

    protected function wait(mixed ...$arguments): void
    {
        $this->sleep?->sleep(...$arguments);
    }
}

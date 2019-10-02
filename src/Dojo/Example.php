<?php
declare(strict_types=1);

namespace Dojo;

class Example
{
    public function random(): int
    {
        return 4; // chosen by fair dice roll.
                  // guaranteed to be random.
    }
}

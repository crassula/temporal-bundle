<?php

declare(strict_types=1);

namespace Vanta\Integration\Symfony\Temporal\Finalizer;

use Symfony\Contracts\Service\ResetInterface;

final readonly class SymfonyResetterFinalizer implements Finalizer
{
    public function __construct(
        private ResetInterface $resetter
    ) {
    }


    public function finalize(): void
    {
        $this->resetter->reset();
    }
}

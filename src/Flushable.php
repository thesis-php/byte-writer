<?php

declare(strict_types=1);

namespace Thesis\ByteWriter;

/**
 * @api
 */
interface Flushable
{
    /**
     * @throws WriteFailed
     */
    public function flush(): void;
}

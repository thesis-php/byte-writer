<?php

declare(strict_types=1);

namespace Thesis\ByteWriter;

/**
 * @api
 */
interface Flushable
{
    /**
     * @throws WriterIsClosed
     */
    public function flush(): void;
}

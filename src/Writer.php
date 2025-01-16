<?php

declare(strict_types=1);

namespace Thesis\ByteWriter;

/**
 * @api
 */
interface Writer
{
    /**
     * @param non-empty-string $bytes
     * @throws WriterIsClosed
     */
    public function write(string $bytes): void;
}

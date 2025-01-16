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
     * @throws WriteFailed
     */
    public function write(string $bytes): void;
}

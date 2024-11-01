<?php

declare(strict_types=1);

namespace WordProofTimestamp\App\Vendor\Dotenv\Parser;

interface ParserInterface
{
    /**
     * Parse content into an entry array.
     *
     * @param string $content
     *
     * @throws \Dotenv\Exception\InvalidFileException
     *
     * @return \Dotenv\Parser\Entry[]
     */
    public function parse(string $content);
}

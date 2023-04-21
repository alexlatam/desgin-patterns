<?php 

namespace Prototype\Books;

use Prototype\Contracts\BookPrototype;

final class HistoryBook extends BookPrototype
{
    protected string $category = 'History';

    public function __clone()
    {
    }
}
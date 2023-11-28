<?php 

namespace Prototype\Books;

use Prototype\Contracts\BookPrototype;

final class TheologicalBook extends BookPrototype
{
    protected string $category = 'Teological';

    public function __clone()
    {
    }
}
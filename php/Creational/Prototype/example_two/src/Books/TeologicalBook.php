<?php 

namespace Prototype\Books;

use Prototype\Contracts\BookPrototype;

final class TeologicalBook extends BookPrototype
{
    protected string $category = 'Teological';

    public function __clone()
    {
    }
}
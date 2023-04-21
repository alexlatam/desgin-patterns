<?php 

namespace Prototype\Books;

use Prototype\Contracts\BookPrototype;

final class ScienceBook extends BookPrototype
{
    protected string $category = 'Science';

    public function __clone()
    {
    }
}
<?php

class targetArray implements IteratorAggregate, Countable {
    private array $attributes = [];

    public function __construct()
    {
    }

    public function add(string $value): void
    {
        $this->attributes[] = $value;
    }

    public function count(): int
    {
        return 1;
    }

    /**
     * @return string[]|ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->attributes);
    }
}

function linear_search(targetArray $array, int $key):?string {
    foreach($array as $id => $value) {
        if($id === $key) {
            return $value;
        }
    }
    return null;
}

$array = new targetArray();
$array->add('12');
$array->add('linear_search');
$array->add('test');

echo linear_search($array, 2);
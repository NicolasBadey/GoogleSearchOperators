<?php

namespace Expertissim\GoogleSearchOperators\lib\Expression\Comparison;

/**
 * Class Between.
 *
 * @author  Nicolas Badey <nicolasbadey@gmail.com>
 */
class Between implements ComparisonExpressionInterface
{
    /** @var  string */
    protected $key;

    /** @var  string */
    protected $min;

    /** @var  string */
    protected $max;

    /** @var  string */
    protected $separator = '..';

    /**
     * @param $key string
     */
    public function __construct($key, $min, $max)
    {
        $this->key = $key;
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return $this->key.':'.$this->min.$this->separator.$this->max;
    }
}

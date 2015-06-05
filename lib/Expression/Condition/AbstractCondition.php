<?php

namespace Expertissim\GoogleSearchOperators\lib\Expression\Condition;

/**
 * Class AbstractCondition.
 *
 * @author  Nicolas Badey <nicolasbadey@gmail.com>
 */
abstract class AbstractCondition implements ConditionExpressionInterface
{
    /** @var  string */
    protected $key;

    /**
     * @param $key string
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->separator.$this->key;
    }
}

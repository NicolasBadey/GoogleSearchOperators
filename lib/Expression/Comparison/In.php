<?php

namespace Expertissim\GoogleSearchOperators\lib\Expression\Comparison;

/**
 * Class In.
 *
 * @author  Nicolas Badey <nicolasbadey@gmail.com>
 */
class In implements ComparisonExpressionInterface
{
    /** @var  string */
    protected $key;

    /** @var  string */
    protected $value;

    /**
     * @param $key
     * @param array $value
     */
    public function __construct($key, array $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return $this->key.':'.implode('.', $this->value);
    }
}

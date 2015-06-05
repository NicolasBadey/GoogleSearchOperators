<?php

namespace Expertissim\GoogleSearchOperators\lib\Expression\Comparison;

/**
 * Class ExpressionLanguage.
 *
 * @author  Nicolas Badey <nicolasbadey@gmail.com>
 */
class ComparisonExpressionBuilder
{
    /**
     * @var string
     */
    public static $delimiter = ':';

    /**
     * @param $key
     * @param $value
     *
     * @return Comparison
     */
    public function eq($key, $value)
    {
        return new Comparison($key, Comparison::EQ, $value);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return Comparison
     */
    public function lt($key, $value)
    {
        return new Comparison($key, Comparison::LT, $value);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return Comparison
     */
    public function lte($key, $value)
    {
        return new Comparison($key, Comparison::LTE, $value);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return Comparison
     */
    public function gt($key, $value)
    {
        return new Comparison($key, Comparison::GT, $value);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return Comparison
     */
    public function gte($key, $value)
    {
        return new Comparison($key, Comparison::GTE, $value);
    }

    /**
     * @param $key
     * @param $min
     * @param $max
     *
     * @return Between
     */
    public function between($key, $min, $max)
    {
        return new Between($key, $min, $max);
    }

    /**
     * @param $key
     * @param $values
     *
     * @return In
     */
    public function in($key, $values)
    {
        return new In($key, $values);
    }
}

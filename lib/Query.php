<?php

namespace Expertissim\GoogleSearchOperators\lib;

use Expertissim\GoogleSearchOperators\lib\Expression\Comparison\ComparisonExpressionBuilder;
use Expertissim\GoogleSearchOperators\lib\Expression\Comparison\ComparisonExpressionInterface;
use Expertissim\GoogleSearchOperators\lib\Expression\Condition\ConditionExpressionBuilder;
use Expertissim\GoogleSearchOperators\lib\Expression\Condition\ConditionExpressionInterface;

/**
 * Class Query.
 *
 * @author  Nicolas Badey <nicolasbadey@gmail.com>
 */
class Query
{
    /**
     * Array of Expressions.
     *
     * @var array
     */
    protected $query;

    /**
     * @var ComparisonExpressionBuilder
     */
    public static $comparison_builder;

    /**
     * @var ConditionExpressionBuilder
     */
    public static $condition_builder;

    /**
     * @param ConditionExpressionInterface $condition
     *
     * @return $this
     */
    protected function add(ConditionExpressionInterface $condition)
    {
        $this->query[] = $condition;

        return $this;
    }

    /**
     * Return Query.
     *
     * @return array
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Build query for receive a string representation.
     *
     * @return string
     */
    public function build()
    {
        if (null === $this->query) {
            throw new \Exception('query cannot be null');
        }

        return implode('', $this->query);
    }

    /**
     * @param ComparisonExpressionInterface $exp
     *
     * @return $this
     */
    public function addAnd(ComparisonExpressionInterface $exp)
    {
        $this->add($this->condition()->andX($exp));

        return $this;
    }

    /**
     * @param ComparisonExpressionInterface $exp
     *
     * @return $this
     */
    public function addAndNot(ComparisonExpressionInterface $exp)
    {
        $this->add($this->condition()->andNot($exp));

        return $this;
    }

    /**
     * @param ComparisonExpressionInterface $exp
     *
     * @return $this
     */
    public function addOr(ComparisonExpressionInterface $exp)
    {
        $this->add($this->condition()->orX($exp));

        return $this;
    }

    /**
     * Return ComparisonExpressionBuilder and avoid to create to many objects.
     *
     * @return ComparisonExpressionBuilder
     */
    public function comparison()
    {
        if (null === static::$comparison_builder) {
            static::$comparison_builder = new ComparisonExpressionBuilder();
        }

        return static::$comparison_builder;
    }

    /**
     * Return ConditionExpressionBuilder and avoid to create to many objects.
     *
     * @return ConditionExpressionBuilder
     */
    protected function condition()
    {
        if (null === static::$condition_builder) {
            static::$condition_builder = new ConditionExpressionBuilder();
        }

        return static::$condition_builder;
    }
}

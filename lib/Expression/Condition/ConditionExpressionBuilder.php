<?php

namespace Expertissim\GoogleSearchOperators\lib\Expression\Condition;

/**
 * Class ExpressionLanguage.
 *
 * @author  Nicolas Badey <nicolasbadey@gmail.com>
 */
class ConditionExpressionBuilder
{
    /**
     * @param $exp
     *
     * @return AndX
     */
    public function andX($exp)
    {
        return new AndX($exp);
    }

    /**
     * @param $exp
     *
     * @return OrX
     */
    public function orX($exp)
    {
        return new OrX($exp);
    }

    /**
     * @param $exp
     *
     * @return AndNot
     */
    public function andNot($exp)
    {
        return new AndNot($exp);
    }
}

<?php

namespace Expertissim\GoogleSearchOperators\Tests;

use Expertissim\GoogleSearchOperators\lib\Query;

/**
 * Class ExpressionTest.
 *
 * @author  Nicolas Badey <nicolasbadey@gmail.com>
 */
class ExpressionTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testExpression()
    {
        $query = new Query();

        $queryString = $query
            ->addAnd($query->comparison()->eq('key', 'toto'))
            ->addAndNot($query->comparison()->lte('key', 46))
            ->addOr($query->comparison()->gt('key', 45))
            ->addOr($query->comparison()->gte('key', 43))
            ->addOr($query->comparison()->lt('key', 41))
            ->addOr($query->comparison()->in('key', [4, 4, 2, 6]))
            ->addOr($query->comparison()->between('key', 5, 42))
            ->build();

        $this->assertEquals('+key:toto-key:<=46|key:>45|key:>=43|key:<41|key:4.4.2.6|key:5..42', $queryString);
    }
}

<?php

namespace Tests\Api;

use ApiTester;
use Codeception\Util\HttpCode;

class AccessDefaultRouteCest
{
    public function _before(ApiTester $I)
    {
    }

    public function testDefaultRoute(ApiTester $I)
    {
        $I->sendGet('/');

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['author' => 'Success Go']);
        $I->canSeeResponseContainsJson(['author' => 'Success Go']); // same to above
    }
}

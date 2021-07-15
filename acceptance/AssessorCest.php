<?php

class AssessorCest
{
    public function _before(AcceptanceTester $I)
    {
        $I-> amOnPage('/');
        $I-> click('Login');
        $I-> click('Assessor');
        $I-> seeInCurrentUrl('/assessor');
        $I-> fillField('email', 'assessor@gmail.com');
        $I-> fillField('password', '123456');
        $I-> click('Log in');
        $I-> seeInCurrentUrl('/assessor-dashboard');
        $I-> see('SLASH TECHNOLOGY ASSESSOR');

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}

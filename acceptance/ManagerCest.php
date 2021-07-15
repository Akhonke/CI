<?php

class ManagerCest
{
    public function _before(AcceptanceTester $I)
    {
        $I-> amOnPage('/');
        $I-> click('Login');
        $I-> click('Project Manager');
        $I-> seeInCurrentUrl('/projectmanager');
        $I-> fillField('email_address', 'projectmanager@gmail.com');
        $I-> fillField('password', '123456');
        $I-> click('Log in');
        $I-> seeInCurrentUrl('/projectmanager-dashboard');
        $I-> see('Project Manager');

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}

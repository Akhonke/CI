<?php

class InternalModeratorCest
{
    public function _before(AcceptanceTester $I)
    {
        $I-> amOnPage('/');
        $I-> click('Login');
        $I-> click('Internal Moderator');
        $I-> seeInCurrentUrl('/internal-moderator');
        $I-> fillField('email', 'intmoderator@gmail.com');
        $I-> fillField('password', '123456');
        $I-> click('Log in');
        $I-> seeInCurrentUrl('/internal-Moderator-dashboard');
        $I-> see('SLASH TECHNOLOGY INTERNAL MODERATOR');

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}

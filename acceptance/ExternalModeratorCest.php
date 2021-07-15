<?php

class ExternalModeratorCest
{
    public function _before(AcceptanceTester $I)
    {
        $I-> amOnPage('/');
        $I-> click('Login');
        $I-> click('External Moderator');
        $I-> seeInCurrentUrl('/external-moderator');
        $I-> fillField('email', 'extmoderator@gmail.com');
        $I-> fillField('password', '123456');
        $I-> click('Log in');
        $I-> seeInCurrentUrl('/external-Moderator-dashboard');
        $I-> see('SLASH TECHNOLOGY EXTERNAL MODERATOR');

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}

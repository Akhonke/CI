<?php

class LearnerCest
 {
     public function _before(AcceptanceTester $I)
    {
        $I-> amOnPage('/');
        $I-> click('Login');
        $I-> click('Learner');
        $I-> seeInCurrentUrl('/learner');
        $I-> fillField('email', 'learner@gmail.com');
        $I-> fillField('password', '123456');
        $I-> click('Log in');
        $I-> seeInCurrentUrl('/learner-Dashboard');
        $I-> see(' LEARNER');

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}

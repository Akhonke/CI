<?php

class TrainingCest
{
    public function _before(AcceptanceTester $I)
    {
        $I-> wantTo('Log in to the training provider panel and perform actions');
        $I-> amOnPage('/');
        $I-> click('Login');
        $I-> click('Training Provider');
        $I-> seeInCurrentUrl('/Traningprovider');
        $I-> fillField('email', 'trainer@gmail.com');
        $I-> fillField('password', '123456');
        $I-> click('Log in');
        $I-> seeInCurrentUrl('/Provider-Dashboard');
        $I-> see('Training Provider');

    }

    // Create a new facilitator
    public function tryToTest(AcceptanceTester $I)
    {
     $I-> amOnPage('/Provider-Dashboard');   
     $I-> click('My Facilitators');
     $I-> see('Create New Facilitator');
     $I-> see('All Facilitators List');
     $I-> click('Create New facilitator');
     $I-> amOnPage('/create-facilitator-user');
     $I-> fillField('fullname','Willy'); 
     $I-> fillField('surname','Maina');
     $I-> fillField('email','Wmunyambu@Live.Com');  
     $I-> fillField('id_number','8609186019089');
     $I-> fillField('landline','+27-716800604');
     $I-> fillField('mobile','+27-125569874');  
     $I-> selectOption('province','Mpumalanga');
     $I-> selectOption('district','Ehlanzeni');
     $I-> selectOption('city','Malalane');
     $I-> selectOPtion('municipality','Nkomazi Local Municipality');
     $I-> fillField('Suburb','Siyabuswa');
     $I-> fillField('street_name','Sotobe Street');
     $I-> fillField('Street_number','45');
     $I-> fillField('password','123456');
     $I-> fillField('acreditations[]','Microsoft Suite ');
     $I-> click('+ Add More');
    }
}

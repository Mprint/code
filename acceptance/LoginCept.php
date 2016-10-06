<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/login/');
$I->fillField("email",  "admin@gmail.com");
$I->fillField("password",  "admin");
$I->click('submit');



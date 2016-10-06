<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->see("Motor1.com | Car Reviews, Automotive News and Auto Show Coverage");




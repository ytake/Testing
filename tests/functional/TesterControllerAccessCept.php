<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('return to this page');
$I->am('a guest');
$I->amOnPage('tester');
$I->click('Link');
$I->see('Tester Example');

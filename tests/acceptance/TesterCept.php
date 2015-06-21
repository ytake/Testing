<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('return to this page');
$I->amOnPage('tester');
$I->click('Link');
$I->see('Tester Example');
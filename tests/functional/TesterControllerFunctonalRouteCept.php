<?php
$I = new FunctionalTester($scenario);

$I->wantTo('perform dependency injection');
$I->amOnPage('tester/functional');
$I->see('codeception');

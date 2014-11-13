<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('display flow page');
$I->amOnPage('public/sysflow');
$I->dontSee('Selamat datang');
$I->see('index');
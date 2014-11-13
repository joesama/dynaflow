<?php
use \AcceptanceTester;

class SysFlowCest
{
    public function home(AcceptanceTester $I)
    {
        $I->wantTo('display flow page');
        $I->amOnPage('sysflow');
    }

    public function store(AcceptanceTester $I)
    {
        $I->wantTo('save');
        // $I->submitForm(array('name' => 'Nyetir'));
        $I->amOnPage('sysflow/store');
    }
}
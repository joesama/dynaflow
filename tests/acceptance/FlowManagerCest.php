<?php
use \AcceptanceTester;

class FlowManagerCest
{
    public function home(AcceptanceTester $I)
    {
        $I->wantTo('display flow manager');
        $I->amOnPage('flowmanager/index/1');
    }

    public function store(AcceptanceTester $I)
    {
        $I->wantTo('save');
        $I->fillField('flow_id', '1');
        $I->fillField('step_id', '1');
        $I->fillField('step_next_id', '1');
        $I->fillField('trigger', 'oke');
        $I->click('create'); 
        $I->amOnPage('flowmanager/store');
        $I->see('Berhasil Disimpan');
    }
    public function destroy(AcceptanceTester $I)
    {
        $I->wantTo('destroy');
        $I->fillField('id', '1');
        $I->click('delete'); 
        $I->amOnPage('flowmanager/destroy');
        $I->see('Berhasil Dihapus');
    }
}
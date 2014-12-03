<?php
use \AcceptanceTester;

class ApplicationCest
{
    public function home(AcceptanceTester $I)
    {
        $I->wantTo('display Application');
        $I->amOnPage('sysapplication');
    }

    public function store(AcceptanceTester $I)
    {
        $I->wantTo('save');
        $I->fillField('flow_id', '1');
        $I->fillField('name', 'Rumah Makan');
        $I->click('create'); 
        $I->amOnPage('sysapplication/store');
        $I->see('Berhasil Disimpan');
    }
    public function update(AcceptanceTester $I)
    {
        $I->wantTo('update');
        $I->fillField('id', '1');
        $I->fillField('flow_id', '1');
        $I->fillField('name', 'Rumah Makan');
        $I->click('create'); 
        $I->amOnPage('sysapplication/update');
        $I->see('Berhasil Disimpan');
    }
    public function destroy(AcceptanceTester $I)
    {
        $I->wantTo('destroy');
        $I->fillField('id', '1');
        $I->click('delete'); 
        $I->amOnPage('sysapplication/destroy');
        $I->see('Berhasil Dihapus');
    }
}
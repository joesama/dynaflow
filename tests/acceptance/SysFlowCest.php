<?php
use \AcceptanceTester;

class SysFlowCest
{
    public function home(AcceptanceTester $I)
    {
        $I->wantTo('display flow');
        $I->amOnPage('sysflow');
    }

    public function store(AcceptanceTester $I)
    {
        $I->wantTo('save');
        $I->fillField('name', 'Makan');
        $I->click('create'); 
        $I->amOnPage('sysflow/store');
        $I->see('Berhasil Disimpan');
    }
    public function update(AcceptanceTester $I)
    {
        $I->wantTo('update');
        $I->fillField('id', '1');
        $I->fillField('name', 'Makan');
        $I->click('create'); 
        $I->amOnPage('sysflow/update');
        $I->see('Berhasil Disimpan');
    }
    public function destroy(AcceptanceTester $I)
    {
        $I->wantTo('destroy');
        $I->fillField('id', '1');
        $I->click('delete'); 
        $I->amOnPage('sysflow/destroy');
        $I->see('Berhasil Dihapus');
    }
}
<?php
use \AcceptanceTester;

class FlowStepCest
{
    public function home(AcceptanceTester $I)
    {
        $I->wantTo('display flow step');
        $I->amOnPage('sysflowstep');
    }

    public function store(AcceptanceTester $I)
    {
        $I->wantTo('save');
        $I->fillField('sys_flow_id', '1');
        $I->fillField('name', 'Ambil Piring');
        $I->fillField('action', 'test/piring');
        $I->click('create'); 
        $I->amOnPage('sysflowstep/store');
        $I->see('Berhasil Disimpan');
    }
    public function update(AcceptanceTester $I)
    {
        $I->wantTo('update');
        $I->fillField('id', '1');
        $I->fillField('sys_flow_id', '1');
        $I->fillField('name', 'Ambil Piring');
        $I->fillField('action', 'test/piring');
        $I->click('create'); 
        $I->amOnPage('sysflowstep/update');
        $I->see('Berhasil Disimpan');
    }
    public function destroy(AcceptanceTester $I)
    {
        $I->wantTo('destroy');
        $I->fillField('id', '1');
        $I->click('delete'); 
        $I->amOnPage('sysflowstep/destroy');
        $I->see('Berhasil Dihapus');
    }
}
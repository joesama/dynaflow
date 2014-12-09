<?php
use \AcceptanceTester;

class DetaildetailformmanagerCest
{
    public function home(AcceptanceTester $I)
    {
        $I->wantTo('display detail form manager');
        $I->amOnPage('detailformmanager');
    }

    public function store(AcceptanceTester $I)
    {
        $I->wantTo('save');
        $I->fillField('form_manager_id', '1');
        $I->fillField('title', 'Nama');
        $I->fillField('name', 'Nama');
        $I->fillField('type', '1');
        $I->fillField('require', '1');
        $I->click('create'); 
        $I->amOnPage('detailformmanager/store');
        $I->see('Berhasil Disimpan');
    }
    public function update(AcceptanceTester $I)
    {
        $I->wantTo('update');
        $I->fillField('id', '1');
        $I->fillField('form_manager_id', '1');
        $I->fillField('title', 'Nama');
        $I->fillField('name', 'Nama');
        $I->fillField('type', '1');
        $I->fillField('require', '1');
        $I->click('create'); 
        $I->amOnPage('detailformmanager/update');
        $I->see('Berhasil Disimpan');
    }
    public function destroy(AcceptanceTester $I)
    {
        $I->wantTo('destroy');
        $I->fillField('id', '1');
        $I->click('delete'); 
        $I->amOnPage('detailformmanager/destroy');
        $I->see('Berhasil Dihapus');
    }
}
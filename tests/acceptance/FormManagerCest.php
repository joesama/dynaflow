<?php
use \AcceptanceTester;

class FormManagerCest
{
     public function home(AcceptanceTester $I)
    {
        $I->wantTo('display Form Manager');
        $I->amOnPage('formmanager');
    }

    public function store(AcceptanceTester $I)
    {
        $I->wantTo('save');
        $I->fillField('application_id', '1');
        $I->fillField('step_id', '1');
        $I->click('create'); 
        $I->amOnPage('formmanager/store');
        $I->see('Berhasil Disimpan');
    }
    public function update(AcceptanceTester $I)
    {
        $I->wantTo('update');
        $I->fillField('id', '1');
        $I->fillField('application_id', '1');
        $I->fillField('step_id', '1');
        $I->click('create'); 
        $I->amOnPage('formmanager/update');
        $I->see('Berhasil Disimpan');
    }
    public function destroy(AcceptanceTester $I)
    {
        $I->wantTo('destroy');
        $I->fillField('id', '1');
        $I->click('delete'); 
        $I->amOnPage('formmanager/destroy');
        $I->see('Berhasil Dihapus');
    }
}
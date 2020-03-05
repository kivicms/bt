<?php 

class AdminCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/bitrix');
        $I->wait(3);
        $I->see('Авторизация', 'div.login-popup-title');

        $I->amGoingTo('Имитация ошибки авторизации');
        $I->fillField('USER_LOGIN', 'admin');
        $I->fillField('USER_LOGIN', 'admin');
        $I->fillField('USER_PASSWORD', '1123');
        $I->click(['name' => 'Login']);
        $I->wait(2);
        $I->see('Ошибка авторизации!');

        $I->amGoingTo('Верная авторизация');
        $I->fillField('USER_PASSWORD', 'Zc4e72xs');
        $I->click(['name' => 'Login']);
        $I->wait(3);
        $I->see('Битрикс24 - Единая авторизация');
    }
}

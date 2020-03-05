<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Мебельная компания');

        $I->amOnPage('/news');
        $I->see('Новости');
        $I->see('мебельная выставка');

        $I->amGoingTo('submit search form');
        $I->fillField('q', 'стул');
        $I->click('Поиск');
        $I->see('Валенсия');
        $I->see('Палермо');
        $I->see('Эра');
    }
}

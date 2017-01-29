<?php


class AppBundleCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function RemovalTest(AcceptanceTester $I)
    {
      $I->wantTo('Check if / is not active.');
      $I->amOnPage('/');
      $I->see('404 Not Found');
    }
}

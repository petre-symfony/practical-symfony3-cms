<?php
namespace As_An_Admin;
use \AcceptanceTester;
use \Common;

class IWantToManageAllUsersCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    protected function login(AcceptanceTester $I){
    Common::login($I, ADMIN_USERNAME, ADMIN_PASSWORD);
    }
    
    /**
    * Scenario 10.6.1
    * @before login
    */
    public function listAllProfiles(AcceptanceTester $I){
      $I->amOnPage('/admin/?action=list&entity=User');
      $I->canSeeNumberOfElements('//table/tbody/tr',4);
    }
    
    
}

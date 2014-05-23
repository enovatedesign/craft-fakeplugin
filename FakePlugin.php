<?php
namespace Craft;

require_once 'vendor/autoload.php';

class FakePlugin extends BasePlugin {

  public function getName()
  {
    return Craft::t('Fake');
  }

  public function getVersion()
  {
    return '0.1.0';
  }

  public function getDeveloper()
  {
    return 'Enovate Design';
  }

  public function getDeveloperUrl()
  {
    return 'http://www.enov8.co.uk';
  }

  public function hasCpSection()
  {
    return false;
  }
}
<?php

namespace Drupal\Tests\url_restriction_by_role\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test module.
 *
 * @group multiple_select
 */
class CrudFormTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = [
    'url_restriction_by_role',
    'node',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'seven';

  /**
   * Test access to configuration page.
   */
  public function testCanAccessConfigPage() {
    $account = $this->drupalCreateUser([
      'admin url restriction by role settings',
      'access content',
    ]);

    $this->drupalLogin($account);
    $this->drupalGet('/admin/config/search/path/url-restriction-by-role');
    $this->assertText('Url Restriction by Role');
  }

}

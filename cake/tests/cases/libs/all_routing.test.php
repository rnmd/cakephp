<?php
/**
 * AllRoutingTest file
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.tests.cases
 * @since         CakePHP(tm) v 2.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * AllRoutingTest class
 *
 * This test group will run view class tests (view, theme)
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class AllRoutingTest extends PHPUnit_Framework_TestSuite {

/**
 * suite method, defines tests for this suite.
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All Router and Dispatcher class tests');

		$libs = CORE_TEST_CASES . DS . 'libs' . DS;

		$suite->addTestFile($libs . 'dispatcher.test.php');
		$suite->addTestFile($libs . 'router.test.php');
		$suite->addTestDirectory($libs . 'route' . DS);
		$suite->addTestFile($libs . 'cake_response.test.php');
		$suite->addTestFile($libs . 'cake_request.test.php');
		return $suite;
	}
}
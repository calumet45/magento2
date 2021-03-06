<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Mage_DesignEditor
 * @subpackage  unit_tests
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_DesignEditor_Model_Change_Layout_MoveTest extends PHPUnit_Framework_TestCase
{
    /**#@+
     * Test element names
     */
    const TEST_ELEMENT     = 'test_element';
    const CONTAINER_NAME   = 'content';
    /**#@-*/

    /**
     * @var Mage_DesignEditor_Model_Change_Layout_Move
     */
    protected $_model;

    /**
     * Attributes from XML data update
     *
     * @var array
     */
    protected $_attributes = array(
        'element_name'          => self::TEST_ELEMENT,
        'destination_order'     => 1,
        'origin_order'          => 1,
        'destination_container' => self::CONTAINER_NAME,
        'origin_container'      => self::CONTAINER_NAME,
        'type'                  => 'layout',
        'action_name'           => 'move',
        'element'               => self::TEST_ELEMENT,
        'after'                 => 1,
        'destination'           => self::CONTAINER_NAME,
        'custom'                => 'test_value',
    );

    public function testGetAttributes()
    {
        $data = '<move element="' . self::TEST_ELEMENT . '" after="1" custom="test_value" destination="'
            . self::CONTAINER_NAME . '"/>';
        $xml = new Varien_Simplexml_Element($data);
        $this->_model = new Mage_DesignEditor_Model_Change_Layout_Move($xml);
        $this->assertAttributeEquals($this->_attributes, '_data', $this->_model);
    }
}

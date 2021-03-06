<?php
/**
 * Integration test for \Magento\GoogleAdwords\Model\Validator\Factory
 *
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\GoogleAdwords\Model\Validator;

use Magento\TestFramework\Helper\Bootstrap;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test creation of conversion id validator
     *
     * @magentoAppIsolation enabled
     */
    public function testGetConversionIdValidator()
    {
        $conversionId = '123';

        $objectManager = Bootstrap::getObjectManager();
        $factory = $objectManager->get('Magento\GoogleAdwords\Model\Validator\Factory');

        $validator = $factory->createConversionIdValidator($conversionId);
        $this->assertNotNull($validator, "Conversion ID Validator");
    }

    /**
     * Test creation of conversion color validator
     *
     * @magentoAppIsolation enabled
     */
    public function testGetConversionColorValidator()
    {
        $conversionColor = "FFFFFF";

        $objectManager = Bootstrap::getObjectManager();
        $factory = $objectManager->get('Magento\GoogleAdwords\Model\Validator\Factory');

        $validator = $factory->createColorValidator($conversionColor);
        $this->assertNotNull($validator);
    }
}

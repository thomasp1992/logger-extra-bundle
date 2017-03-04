<?php
namespace Deamon\LoggerExtraBundle\Tests\Services;

use PHPUnit\Framework\TestCase;
use Deamon\LoggerExtraBundle\Services\DeamonLoggerExtraContext;

class DeamonLoggerExtraContextTest extends TestCase
{

    /**
     * @dataProvider getLocaleDataset
     * @param $locale
     */
    public function testGetLocale($locale)
    {
        $context = new DeamonLoggerExtraContext($locale, '');
        $this->assertEquals($locale, $context->getLocale(), sprintf('locale should be %s, %s returned.', $locale, $context->getLocale()));
    }

    public function getLocaleDataset()
    {
        return array(
            ['fr', 'locale should be fr'],
            ['en', 'locale should be en']
        );
    }

    /**
     * @dataProvider getApplicationNameDataset
     *
     * @param $applicationName
     */
    public function testGetApplicationName($applicationName)
    {
        $context = new DeamonLoggerExtraContext('fr', $applicationName);
        $this->assertEquals($applicationName, $context->getApplicationName(), sprintf('application_name should be %s, %s returned.', $applicationName, $context->getApplicationName()));
    }

    public function getApplicationNameDataset()
    {
        return array(
            ['github.com/deamon'],
            ['foo.bar']
        );
    }
}
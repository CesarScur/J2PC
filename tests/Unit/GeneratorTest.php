<?php
namespace Tests\Unit;

use Tests\TestCaseAbstract;

class GeneratorTest extends TestCaseAbstract
{
    public function testGenerateFromJson()
    {
        $generator = new \J2PC\Generator();

        $json = <<<JSON
{
    "id": 20,
    "test": {
        "foo": "bar"
    },
    "finished": false
}
JSON;

        $classes = $generator->generateFromJson($json, 'BaseClass');
        $this->assertTrue(sizeof($classes) === 2);
    }
}

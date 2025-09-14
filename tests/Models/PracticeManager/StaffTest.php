<?php

namespace XeroPHP\Tests\Models\PracticeManager;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use XeroPHP\Application;
use XeroPHP\Models\PracticeManager\Staff;

class StaffTest extends TestCase
{
    public function test_list()
    {
        $handlerStack = HandlerStack::create(new MockHandler([
            new Response(200, ['Content-Type' => 'text/xml'], file_get_contents(__DIR__ . '/xml/staff.list.xml')),
        ]));

        $client = new Client(['handler' => $handlerStack]);
        $app    = new Application('', '');
        $app->setTransport($client);

        $models = $app->load(Staff::class)->execute();

        $this->assertCount(2, $models);

        /** @var Staff $model */
        $model = $models->first();

        $this->assertEquals('f8235e1a-d383-48b7-9139-ba97ab8ca889', $model->getUUID());
        $this->assertEquals('Jo Bloggs', $model->getName());
        $this->assertEquals('jo@bloggs.net', $model->getEmail());
        $this->assertEquals('+12123123123', $model->getPhone());
        $this->assertEquals('+12123123124', $model->getMobile());
        $this->assertEquals('123 Fake Street', $model->getAddress());
        $this->assertEquals('JB', $model->getPayrollCode());
        $this->assertEquals('https://practicemanager.xero.com/app/staff/f8235e1a-d383-48b7-9139-ba97ab8ca889/information', $model->getWebUrl());
    }

    public function test_get()
    {
        $handlerStack = HandlerStack::create(new MockHandler([
            new Response(200, ['Content-Type' => 'text/xml'], file_get_contents(__DIR__ . '/xml/staff.get.xml')),
        ]));

        $client = new Client(['handler' => $handlerStack]);
        $app    = new Application('', '');
        $app->setTransport($client);

        /** @var Staff $model */
        $model = $app->loadByGUID(Staff::class, 'f8235e1a-d383-48b7-9139-ba97ab8ca889');

        $this->assertEquals('f8235e1a-d383-48b7-9139-ba97ab8ca889', $model->getUUID());
        $this->assertEquals('Jo Bloggs', $model->getName());
        $this->assertEquals('jo@bloggs.net', $model->getEmail());
        $this->assertEquals('+12123123123', $model->getPhone());
        $this->assertEquals('+12123123124', $model->getMobile());
        $this->assertEquals('123 Fake Street', $model->getAddress());
        $this->assertEquals('JB', $model->getPayrollCode());
        $this->assertEquals('https://practicemanager.xero.com/app/staff/f8235e1a-d383-48b7-9139-ba97ab8ca889/information', $model->getWebUrl());
    }
}

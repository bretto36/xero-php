<?php

namespace XeroPHP\Tests\Models\PracticeManager;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use XeroPHP\Application;
use XeroPHP\Models\PracticeManager\Client as XpmClient;

class ClientTest extends TestCase
{
    public function test_list()
    {
        $handlerStack = HandlerStack::create(new MockHandler([
            new Response(200, ['Content-Type' => 'text/xml'], file_get_contents(__DIR__ . '/xml/client.list.xml')),
        ]));

        $client = new Client(['handler' => $handlerStack]);
        $app    = new Application('', '');
        $app->setTransport($client);

        $models = $app->load(XpmClient::class)->execute();

        $this->assertCount(2, $models);

        /** @var XpmClient $model */
        $model = $models->first();

        $this->assertEquals('01a8b481-b9ae-4b28-89e0-87e7162807a3', $model->getUUID());
        $this->assertEquals('Test Company', $model->getName());
        $this->assertEquals('test@test.com', $model->getEmail());
        $this->assertEquals('0411234567', $model->getPhone());
        $this->assertEquals('https://practicemanager.xero.com/Client/1111111/Detail', $model->getWebUrl());
    }

    public function test_get()
    {
        $handlerStack = HandlerStack::create(new MockHandler([
            new Response(200, ['Content-Type' => 'text/xml'], file_get_contents(__DIR__ . '/xml/client.get.xml')),
        ]));

        $client = new Client(['handler' => $handlerStack]);
        $app    = new Application('', '');
        $app->setTransport($client);

        /** @var XpmClient $model */
        $model = $app->loadByGUID(XpmClient::class, '01a8b481-b9ae-4b28-89e0-87e7162807a3');

        $this->assertEquals('01a8b481-b9ae-4b28-89e0-87e7162807a3', $model->getUUID());
        $this->assertEquals('Test Company', $model->getName());
        $this->assertEquals('test@test.com', $model->getEmail());
        $this->assertEquals('0411234567', $model->getPhone());
        $this->assertEquals('https://practicemanager.xero.com/Client/1111111/Detail', $model->getWebUrl());
    }
}

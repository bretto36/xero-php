<?php

namespace XeroPHP\Tests\Models\PracticeManager;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use XeroPHP\Application;
use XeroPHP\Models\PracticeManager\Client as XpmClient;
use XeroPHP\Models\PracticeManager\PagedClient;

class PagedClientTest extends TestCase
{
    public function test_list()
    {
        $handlerStack = HandlerStack::create(new MockHandler([
            new Response(200, ['Content-Type' => 'text/xml'], file_get_contents(__DIR__ . '/xml/paged-client.list.xml')),
            new Response(200, ['Content-Type' => 'text/xml'], file_get_contents(__DIR__ . '/xml/paged-client-page-2.list.xml')),
        ]));

        $client = new Client(['handler' => $handlerStack]);
        $app    = new Application('', '');
        $app->setTransport($client);

        $request = $app->load(PagedClient::class)->pageSize(2);

        $models = $request->execute();

        $this->assertCount(2, $models);

        /** @var XpmClient $model */
        $model = $models->first();

        $this->assertEquals('2eb6ae63-31b4-49b5-b1c5-2b8ced76c33f', $model->getUUID());
        $this->assertEquals('Test Company', $model->getName());
        $this->assertEquals('test@test.com', $model->getEmail());
        $this->assertEquals('0411234567', $model->getPhone());
        $this->assertEquals('https://practicemanager.xero.com/Client/1111111/Detail', $model->getWebUrl());

        $this->assertNotNull($request->getPageToken());

        $models = $request->execute();

        $this->assertCount(1, $models);

        $this->assertNull($request->getPageToken());
    }
}

<?php

class ClientTest extends \PHPUnit_Framework_TestCase
{
    private $client;

    public function setUp()
    {
        parent::setUp();
        $this->client = new \UkrposhtaApi\Client();
    }

    public function test_success_response_from_ukrposhta()
    {
        $response = $this->client->GetBarcodeInfo('RF426331371SG');
        $this->assertArrayHasKey('barcode', $response);
        $this->assertArrayHasKey('code', $response);
        $this->assertArrayHasKey('lastofficeindex', $response);
        $this->assertArrayHasKey('eventdate', $response);
        $this->assertArrayHasKey('lastoffice', $response);
        $this->assertArrayHasKey('eventdate', $response);
        $this->assertArrayHasKey('eventdescription', $response);
    }
}
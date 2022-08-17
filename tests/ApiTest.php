<?php
namespace Bitocredit\LaravelGateway\Tests;

use Bitocredit\PhpGateway\ApiPhp;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    protected $api;
    protected $token = "";
    protected $transaction = "";
    protected $wallet = "";
    protected $baseURL_test = "";

    protected function setUp(): void
    {
        $this->token = config("gateway.token_test");
        $this->baseURL_test = config("gateway.base_url_test");
        $this->wallet = config("gateway.wallet_test");
        $this->transaction = config("gateway.transaction_test");
        $this->api = new ApiPhp($this->baseURL_test , $this->token);
    }

    public function testCreateWallet()
    {
        $result = $this->api->createWallet("1");
        $this->assertSame($result['status'], 200);
        $this->assertArrayHasKey("address" , $result);
    }

    public function testTransactionCheck()
    {
        $result = $this->api->transactionCheck($this->transaction, $this->wallet);
        $this->assertSame($result['status'], 200);
        $this->assertArrayHasKey("message" , $result);
    }

    public function testTransactionRecovery()
    {
        $result = $this->api->transactionRecovery($this->transaction);
        $this->assertSame($result['status'], 200);
        $this->assertArrayHasKey("message" , $result);
    }

    public function testTransactionExample()
    {
        $result = $this->api->transactionExampleCallback($this->transaction);
        $this->assertSame($result['status'], 200);
        $this->assertArrayHasKey("message" , $result);
        $this->assertArrayHasKey("address" , $result);
        $this->assertArrayHasKey("transaction_id" , $result);
        $this->assertIsNumeric($result['amount']);
    }

    public function testTransactionFee()
    {
        $result = $this->api->transactionFee();
        $this->assertSame($result['status'], 200);
        $this->assertIsNumeric($result['fee']);
    }
}
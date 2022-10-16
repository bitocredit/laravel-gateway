<h3 align="center" >Bitocredit Laravel Package</h3>
<h5>This package used for integrate with bitocredit api</h5>

# usage

Require this package with composer using the following command:

```bash
composer require bitocredit/laravel-gateway
```
<br>
publish config files with this command:

```bash
php artisan vendor:publish --tag=laravelGateway
```

<br>
and finally add these variables to .env file: 

```dotenv
GATEWAY_BASE_URL=https://bitocredit.com/api/
GATEWAY_TOKEN=YOUR_TOKEN
```
<br>

now you can use this package like this:

```php
    use Bitocredit\LaravelGateway\Facades\Api;
    $result = Api::createWallet("wallet_id" , "network") // replace wallet_id with your wallet id and set network type    
```

# methods

- [createWallet](#createwallet)
- [transactionCheck](#transactioncheck)
- [transactionRecovery](#transactionrecovery)
- [transactionFee](#transactionfee)
- [transactionExample](#transactionexample)


# <a id="createwallet">createWallet</a>

This method used for creating wallet for user
<br>
<br>
endpoint : https://bitocredit.com/api/create/wallet/{token}
<br>
<br>

```php
    $result = Api::createWallet("wallet_id" , "network") // replace wallet_id with your wallet id and set network type
```

# <a id="transactioncheck">transactionCheck</a>

This method used for check a transaction is confirmed or not
<br>
<br>
endpoint : https://bitocredit.com/api/transaction/check/{token}
<br>
<br>

```php
    $result = Api::transactionCheck("transaction_hash"); // replace transaction_hash with your transaction hash
```

# <a id="transactionrecovery">transactionRecovery</a>

This method used for check a transaction that is lost in blockchain
<br>
<br>
endpoint : https://bitocredit.com/api/transaction/recovery/{token}
<br>
<br>

```php
    $result = Api::transactionRecovery("transaction_hash"); // replace transaction_hash with your transaction hash
```

# <a id="transactionfee">transactionFee</a>

This method used for check a transaction that is lost in blockchain
<br>
<br>
endpoint : https://bitocredit.com/api/transaction/fee/{token}
<br>
<br>

```php
    $result = Api::transactionFee(); 
```

# <a id="transactionexample">transactionExample</a>

Please only use this api for test ! it's only an example to show how the server sends data to callback after payment confirmation
<br>
<br>
endpoint : https://bitocredit.com/api/transaction/example/callback
<br>
<br>

```php
    $result = Api::transactionExample("transaction_hash"); // replace transaction_hash with your transaction hash
```

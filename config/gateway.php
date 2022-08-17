<?php

 return [
     "base_url" => env("GATEWAY_BASE_URL" , ""),
     "token" => env("GATEWAY_TOKEN" , ""),
     "token_test" => env("GATEWAY_TOKEN_TEST" , ""),
     "base_url_test" => env("GATEWAY_BASE_URL_TEST" , ""),
     "transaction_test" => env("GATEWAY_TRANSACTION_TEST" , ""),
     "wallet_test" => env("GATEWAY_WALLET_TEST" , ""),
 ];
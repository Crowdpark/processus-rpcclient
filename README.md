RPC-Client
---

You can proper test with this lib your RPC API.  
Supported [JSON-RPC 2.0](http://www.jsonrpc.org/specification) specs.

##Requirements

You find everything in the __composer.json__ file.  

##Install
```
composer.php install
```

##Usage

```php

$params = array(
    "userId" => 12345
);

$rpcData = new JsonRpcDataVo();
        $rpcData->setMethod("Application.User.getInfo")
            ->setRpcId(1)
            ->setParams(array($params));

$gateway = "http://localhost/api/v1/public/"
$client  = new Client();

return $client->setGateway($gateway)
    ->sendRpc($rpcData);
```

##License

Copyright (c) 2012 [Francis Varga](http://varga-multimedia.com)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
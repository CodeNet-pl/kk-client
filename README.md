Korporacja Kurierska API Client
===

Implemented methods
---

Below is the list of implemented API methods

- /api/login
- /api/checkPrices
- /api/checkData
- /api/makeOrder
- /api/orders
- /api/inpostMachines

Example usage
---

```php
use CodeNet\KKClient\KKClient;

$client = new KKClient($password, $password);
$client->setSessionId($sessionId); // optionally reuse previous session identifier if there is one
$order = $client->createOrder([
    'courierId' => '5'
    // ...
    // order data according to API docs
]);
// alternatively, a request could be CreateOrderRequest object
$request = new CreateOrderRequest();
$request->setCourier($courier); // where $courier could be Courier object or courier ID
// $request->set...

$order = $client->createOrder($request);

echo "Created order #" . $order->getOrderId() . EOL;
```

Testing
---

- copy tests/config.php.dist to tests/config.php
- fill test environment credentials
- run phpunit
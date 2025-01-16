<?php

namespace Commerzsylius\SwishPlugin\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SwishPaymentController
{
    public function redirectAction(Request $request): Response
    {
        // Simulate a redirection to Swish or show a loading page
        return new Response('<h1>Redirecting to Swish...</h1>');
    }

    public function callbackAction(Request $request): Response
    {
        // Simulate receiving a callback from Swish
        $orderId = $request->query->get('order_id');
        return new Response(sprintf('<h1>Payment completed for Order #%s</h1>', $orderId));
    }
}
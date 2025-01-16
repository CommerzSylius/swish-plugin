<?php

namespace Commerzsylius\SwishPlugin;

use Sylius\Component\Core\Model\PaymentInterface;
use Sylius\Component\Core\Model\OrderInterface;

class SwishPaymentProcessor
{
    public function process(PaymentInterface $payment): void
    {
        // Simulate payment processing logic
        $payment->setState(PaymentInterface::STATE_COMPLETED);
    }
}
<?php

#namespace Commerzsylius\SwishPlugin;

namespace Commerzsylius\SwishPlugin;

use Sylius\Component\Payment\Model\PaymentMethodInterface;

class SwishPaymentMethodType
{
    public function getCode(): string
    {
        return 'swish';
    }

    public function getName(): string
    {
        return 'Swish';
    }
}
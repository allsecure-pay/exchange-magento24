<?php

namespace AllsecureExchange\AllsecureExchange\Gateway\Response;

/**
 * Class CaptureHandler
 * @package AllsecureExchange\AllsecureExchange\Gateway\Response
 */
class CaptureHandler extends TxnIdHandler
{
    /**
     * Whether transaction should be closed
     *
     * @return bool
     */
    protected function shouldCloseTransaction(): bool
    {
        return true;
    }
}

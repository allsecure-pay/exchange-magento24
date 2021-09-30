<?php

namespace AllsecureExchange\AllsecureExchange\Gateway\Response;

/**
 * Class VoidHandler
 * @package AllsecureExchange\AllsecureExchange\Gateway\Response
 */
class VoidHandler extends TxnIdHandler
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

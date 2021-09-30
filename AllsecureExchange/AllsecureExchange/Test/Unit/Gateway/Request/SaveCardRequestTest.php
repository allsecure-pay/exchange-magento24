<?php

namespace AllsecureExchange\AllsecureExchange\Test\Unit\Gateway\Request;

use AllsecureExchange\AllsecureExchange\Gateway\Request\SaveCardRequest;
use Magento\Payment\Gateway\Data\PaymentDataObjectInterface;
use Magento\Sales\Model\Order\Payment;
use AllsecureExchange\AllsecureExchange\Gateway\Http\Client\ClientMock;

class SaveCardRequestTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\Sales\Model\Order\Payment|\PHPUnit\Framework\MockObject\MockObject
     */
    private $paymentDO;

    /**
     * @var Payment|\PHPUnit\Framework\MockObject\MockObject
     */
    private $payment;

    /**
     * @var \AllsecureExchange\AllsecureExchange\Gateway\Request\VoidRequest
     */
    private $builder;

    public function setUp(): void
    {
        $this->paymentDO = $this->createMock(PaymentDataObjectInterface::class);

        $this->payment = $this->getMockBuilder(Payment::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->paymentDO->method('getPayment')
            ->willReturn($this->payment);

        $this->builder = new SaveCardRequest();
    }

    /**
     * @covers \AllsecureExchange\AllsecureExchange\Gateway\Request\MockDataRequest::build
     */
    public function testBuild()
    {
        $transactionResult = 1;

        $expected = [
            'FORCE_RESULT' => $transactionResult
        ];

        $buildSubject = [
            'payment' => $this->paymentDO,
        ];


        $this->paymentDO->expects(static::once())
            ->method('getPayment')
            ->willReturn($this->payment);

        $this->payment->expects(static::once())
            ->method('getAdditionalInformation')
            ->willReturn($transactionResult);

        static::assertEquals($expected, $this->builder->build($buildSubject));
    }
}

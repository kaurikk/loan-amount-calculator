<?php

declare(strict_types = 1);

namespace Kauri\Loan;


interface PaymentAmountCalculatorInterface
{
    /**
     * PaymentAmountCalculatorInterface constructor.
     * @param InterestAmountCalculatorInterface $interestAmountCalculator
     */
    public function __construct(InterestAmountCalculatorInterface $interestAmountCalculator);

    /**
     * @param array $periods
     * @param float $presentValue
     * @param float $interestRate
     * @param float $futureValue
     * @return array
     */
    public function getPaymentAmounts(
        array $periods,
        float $presentValue,
        float $interestRate,
        float $futureValue
    ): array;
}

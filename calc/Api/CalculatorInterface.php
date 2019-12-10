<?php
namespace Api;

interface CalculatorInterface
{
    const SYMBOL_MULT = '*';
    const SYMBOL_SUM = '+';
    const SYMBOL_MINUS = '-';
    const SYMBOL_DIVIDE = '/';
    /**
     * @param $arg1
     * @param $arg2
     * @return float|int|mixed|null
     */
    public function actionMult($arg1 , $arg2);

    /**
     * @param $arg1
     * @param $arg2
     * @return float|int|mixed|null
     */
    public function actionSum($arg1 , $arg2);

    /**
     * @param $arg1
     * @param $arg2
     * @return float|int|mixed|null
     */
    public function actionMinus($arg1 , $arg2);

    /**
     * @param $arg1
     * @param $arg2
     * @return float|int|mixed|null
     */
    public function actionDivide($arg1 , $arg2);
}
<?php
namespace Models;

use Api\CalculatorInterface;

/**
 * Class CalculatorModel
 * @package Models
 */
class CalculatorModel implements CalculatorInterface
{
    /**
     * @param $arg1
     * @param $arg2
     * @return float|int|mixed|null
     */
    public function actionDivide($arg1, $arg2)
    {
       if ($arg2== 0){
           return null;
       }else{
           return $arg1 / $arg2;
       }
    }

    /**
     * @param $arg1
     * @param $arg2
     * @return float|int|mixed|void|null
     */
    public function actionMult($arg1, $arg2)
    {
       return $arg1 * $arg2;
    }

    /**
     * @param $arg1
     * @param $arg2
     * @return float|int|mixed|null
     */
    public function actionSum($arg1, $arg2)
    {
        return $arg1 + $arg2;
    }

    /**
     * @param $arg1
     * @param $arg2
     * @return float|int|mixed|null
     */
    public function actionMinus($arg1, $arg2)
    {
        return $arg1 - $arg2;
    }

    /**
     * @param $arg1
     * @param $arg2
     * @param $action
     * @return string|null
     */
    public function calcNumbers($arg1,$arg2,$action)
    {
        $resultString = "$arg1 $action $arg2 = ";
        switch ($action){
            case self::SYMBOL_DIVIDE:
                return $resultString . $this->actionDivide($arg1,$arg2);
                break;
            case self::SYMBOL_MINUS:
                return $resultString . $this->actionMinus($arg1,$arg2);
                break;
            case self::SYMBOL_SUM:
                return $resultString . $this->actionSum($arg1,$arg2);
                break;
            case self::SYMBOL_MULT:
                return $resultString . $this->actionMult($arg1,$arg2);
            default:
                return null;
        }
    }
}
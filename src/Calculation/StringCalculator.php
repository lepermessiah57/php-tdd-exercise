<?php
namespace Calculation;

class StringCalculator {

    public function add($input){
        list($input, $delimiter) = $this->popDelimiterOffInput($input);
        $input = str_replace("\n",$delimiter,$input);
        if(strstr($input, $delimiter)){
            $numbers = explode($delimiter, $input);
            return $this->sum($numbers);
        }
        return intval($input);
    }

    private function sum($numbers){
        $sum = 0;
        foreach($numbers as $number) {
            $sum += $number;
        }

        return $sum;
    }

    private function popDelimiterOffInput($input){
        $delimiter = ',';
        if(strpos($input, '//') === 0){
            $delimiter = substr($input, 2, 1);
            return array(
                str_replace("//$delimiter", '', $input),
                $delimiter
            );
        }
        return array($input, $delimiter);

    }
}

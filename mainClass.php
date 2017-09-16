<?php
/**
 * Created by PhpStorm.
 * User: Nova Herdi Kusumah
 * Date: 9/16/2017
 * Time: 10:32 AM
 */

class MainClass
{
    /**
     * get Input from console
     * @return array|null
     */
    public static function getInput()
    {
        $longOpts = [
            'soal:',
            'input:',
        ];

        $options = getopt("", $longOpts);

        if (!isset($options['soal']) || !isset($options['input'])) {
            echo isset($options['soal']) ?: "--soal param is empty!" . PHP_EOL;
            echo isset($options['input']) ?: "--input param is empty!" . PHP_EOL;

            return null;
        } else {
            return $options;
        }
    }

    /**
     * Output for Soal 1
     * @param $input
     * @return null
     */
    public static function soal_1($input)
    {
        if (isset($input)) {
            $numbers = explode(" ", $input);
            if (count($numbers) == 2) {
                $result = $numbers[0];
                for ($i = 1; $i < $numbers[1]; $i++) {
                    $result = $result * $numbers[0];
                }

                return $result;
            }
        }
    }

    /**
     * @param $input
     * @return string
     */
    public static function soal_2($input)
    {
        if (isset($input)) {
            $numbers = explode(" ", $input);
            sort($numbers);

            return implode(" ", $numbers);
        }
    }
}
<?php

namespace Tests\TestProviders;

class BinaryCalculDataProvider
{
    public static function andBinaryCalculProvider(): array
    {
        return [
            '4 AND 1 should be 0'  => [4, 1, 0],   // 100 & 001 = 000
            '5 AND 3 should be 1'  => [5, 3, 1],   // 101 & 011 = 001
            '0 AND 7 should be 0'  => [0, 7, 0],   // 000 & 111 = 000
            '6 AND 2 should be 2'  => [6, 2, 2],   // 110 & 010 = 010
            '10 AND 5 should be 0' => [10, 5, 0], // 1010 & 0101 = 0000
        ];
    }

    public static function orBinaryCalculProvider(): array
    {
        return [
            '4 OR 1 should be 5'   => [4, 1, 5],   // 100 | 001 = 101
            '5 OR 3 should be 7'   => [5, 3, 7],   // 101 | 011 = 111
            '0 OR 7 should be 7'   => [0, 7, 7],   // 000 | 111 = 111
            '6 OR 2 should be 6'   => [6, 2, 6],   // 110 | 010 = 110
            '10 OR 5 should be 15' => [10, 5, 15], // 1010 | 0101 = 1111
        ];
    }

    public static function xorBinaryCalculProvider(): array
    {
        return [
            '4 XOR 1 should be 5'   => [4, 1, 5],   // 100 ^ 001 = 101
            '5 XOR 3 should be 6'   => [5, 3, 6],   // 101 ^ 011 = 110
            '0 XOR 7 should be 7'   => [0, 7, 7],   // 000 ^ 111 = 111
            '6 XOR 2 should be 4'   => [6, 2, 4],   // 110 ^ 010 = 100
            '10 XOR 5 should be 15' => [10, 5, 15], // 1010 ^ 0101 = 1111
        ];
    }
}
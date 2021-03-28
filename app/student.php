<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $fillable = array(
        'student_name',
        'icnum',
        'gender',
        'address1',
        'address2',
        'poscode',
        'city',
        'state',
        'class',
        'year',
    );

    const STATE_JOHOR = 1;
    const STATE_KEDAH= 2;
    const STATE_KELANTAN= 3;
    const STATE_KUALA_LUMPUR= 4;
    const STATE_MELAKA= 5;
    const STATE_SEMBILAN= 6;
    const STATE_PAHANG= 7;
    const STATE_PERAK= 8;
    const STATE_PERLIS= 9;
    const STATE_PULAU_PINANG= 10;
    const STATE_SABAH= 11;
    const STATE_SARAWAK= 12;
    const STATE_SELANGOR= 13;
    const STATE_TERENGGANU= 14;
    const STATE_PUTRAJAYA= 15;
    const STATE_LABUAN= 16;
    const STATE_JOHOR_TEXT ='Johor';
    const STATE_KEDAH_TEXT= 'Kedah';
    const STATE_KELANTAN_TEXT= 'Kelantan';
    const STATE_KUALA_LUMPUR_TEXT= 'Wilayah Persekutuan Kuala Lumpur';
    const STATE_MELAKA_TEXT= 'Melaka';
    const STATE_SEMBILAN_TEXT= 'Negeri Sembilan';
    const STATE_PAHANG_TEXT= 'Pahang';
    const STATE_PERAK_TEXT= 'Perak';
    const STATE_PERLIS_TEXT= 'Perlis';
    const STATE_PULAU_PINANG_TEXT= 'Pulau Pinang';
    const STATE_SABAH_TEXT= 'Sabah';
    const STATE_SARAWAK_TEXT= 'Sarawak';
    const STATE_SELANGOR_TEXT= 'Selangor';
    const STATE_TERENGGANU_TEXT= 'Terengganu';
    const STATE_PUTRAJAYA_TEXT= 'Wilayah Persekutuan Putrajaya';
    const STATE_LABUAN_TEXT= 'Wilayah Persekutuan Labuan';

    public static function getStateArray()
    {
        return array(
            self::STATE_JOHOR => self::STATE_JOHOR_TEXT,
            self::STATE_KEDAH => self::STATE_KEDAH_TEXT,
            self::STATE_KELANTAN => self::STATE_KELANTAN_TEXT,
            self::STATE_KUALA_LUMPUR => self::STATE_KUALA_LUMPUR_TEXT,
            self::STATE_MELAKA => self::STATE_MELAKA_TEXT,
            self::STATE_SEMBILAN => self::STATE_SEMBILAN_TEXT,
            self::STATE_PAHANG => self::STATE_PAHANG_TEXT,
            self::STATE_PERAK => self::STATE_PERAK_TEXT,
            self::STATE_PERLIS => self::STATE_PERLIS_TEXT,
            self::STATE_PULAU_PINANG => self::STATE_PULAU_PINANG_TEXT,
            self::STATE_SABAH => self::STATE_SABAH_TEXT,
            self::STATE_SARAWAK => self::STATE_SARAWAK_TEXT,
            self::STATE_SELANGOR => self::STATE_SELANGOR_TEXT,
            self::STATE_TERENGGANU => self::STATE_TERENGGANU_TEXT,
            self::STATE_PUTRAJAYA => self::STATE_PUTRAJAYA_TEXT,
            self::STATE_LABUAN => self::STATE_LABUAN_TEXT,
        );
    }

    public static function getStateTextByValue($value)
    {
        $haystack = self::getStateArray();
        return $haystack[$value];
    }
}

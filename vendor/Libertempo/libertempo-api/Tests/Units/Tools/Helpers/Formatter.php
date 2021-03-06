<?php
namespace LibertAPI\Tests\Units\Tools\Helpers;

use LibertAPI\Tools\Helpers\Formatter as _Formatter;

/**
 * Test des petits utilitaires de l'application
 */
final class Formatter extends \Atoum
{
    /**
     * Teste la mise en StudlyCaps d'un mot en snake_case
     */
    public function testGetStudlyCapFromSnakeStudly()
    {
        $mot = 'snake_case_long';

        $studly = _Formatter::getStudlyCapsFromSnake($mot);

        $this->string($studly)->isIdenticalTo('SnakeCaseLong');
    }

    /**
     * Teste la mise en StudlyCaps d'un mot en snake_case final
     */
    public function testGetStudlyCapFromSnakeSnakeFinal()
    {
        $mot = 'snake_case_long_';

        $studly = _Formatter::getStudlyCapsFromSnake($mot);

        $this->string($studly)->isIdenticalTo('SnakeCaseLong');
    }

    /**
     * Teste la mise en StudlyCaps d'un seul mot
     */
    public function testGetStudlyCapFromSnakeOneWord()
    {
        $mot = 'mot';

        $studly = _Formatter::getStudlyCapsFromSnake($mot);

        $this->string($studly)->isIdenticalTo('Mot');
    }

    /**
     * Teste la mise au format de datetime sql
     */
    public function testTimeToSQLDatetime()
    {
        $time0 = 0;
        $timeFixed = 1303819038;

        $this->string(_Formatter::timeToSQLDatetime($time0))->isIdenticalTo('1970-01-01 00:00');
        $this->string(_Formatter::timeToSQLDatetime($timeFixed))->isIdenticalTo('2011-04-26 11:57');
    }
}

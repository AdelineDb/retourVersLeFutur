<?php
/**
 * Created by PhpStorm.
 * User: adeli
 * Date: 28/04/2019
 * Time: 20:18
 */

class TimeTravel
{
    public $start;
    public $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function getTravelInfo()
    {

        $time = date_diff($this->start, $this->end);

        return 'Il y a ' . $time->y . ' années, ' . $time->m . ' mois, ' . $time->d . ' jours, ' . $time->h . ' heures, ' . $time->i . ' minutes, ' . $time->s . ' secondes entre les deux dates. ';

    }

    public function findDate($interval)
    {
        $res = $this->start->sub($interval);

        return $res;
    }

    public function backToFutureStepByStep($step)
    {
        $steps = [];
        $backToFuture = new DatePeriod($this->start, $step, $this->end);

        foreach ($backToFuture as $date) {

            $steps[] = $date->format('M d Y A H:i');
        }

        return $steps;

    }
}


<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 22/05/18
 * Time: 17:36
 */

class TimeTravel
{
    private $start;

    private $end;

    /**
     * TimeTravel constructor.
     *
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }

    /**
     * @param DateTime $start
     * @return TimeTravel
     */
    public function setStart(DateTime $start): TimeTravel
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEnd(): DateTime
    {
        return $this->end;
    }

    /**
     * @param DateTime $end
     * @return TimeTravel
     */
    public function setEnd(DateTime $end): TimeTravel
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Return interval between 2 DateTime objects.
     *
     * @return string
     */
    public function getTravelInfo(): string
    {
        $interval = ($this->end)->diff($this->start);
        return "Il y a $interval->y années,
                    $interval->m mois,
                    $interval->h heures,
                    $interval->i minutes et
                    $interval->s secondes entre les deux dates.";
    }

    /**
     * Add interval to the start date.
     *
     * @param DateInterval $interval
     * @return string
     * @throws Exception
     */
    public function findDate(DateInterval $interval): string
    {
        $newDate = $this->start->sub($interval)->format('Y-m-d h:i:s');
        return "La date est : $newDate";
    }

    /**
     * @param DateInterval $step
     */
    public function backToFutureStepByStep(DateInterval $step)
    {
        $result = [];
        $dates = new DatePeriod($this->start, $step, $this->end);
        foreach ($dates as $date) {
            $result[] .= $date->format('M d Y A h:i');
        }
        return $result;
    }
}

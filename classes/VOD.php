<?php


class VOD {
    private Array $movie;
    private Float $price;
    private static Int $nbSubscriber = 0;

    /**
     * return array film
     * @return array
     */
    public function getMovie(): array
    {
        return $this->movie;
    }

    /**
     * set the array
     * @param array $movie
     */
    public function setMovie(array $movie): VOD
    {
        $this->movie = $movie;
        return $this;
    }

    /**
     * return price
     * @return Float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * set the price
     * @param Float $price
     */
    public function setPrice(float $price): VOD
    {
        $this->price = $price;
        return $this;
    }

    /**
     * return number of subscriber
     * @return Int
     */
    public static function getNbSubscriber(): int
    {
        return self::$nbSubscriber;
    }

    public static function addSub(){
        self::$nbSubscriber++;
    }



}
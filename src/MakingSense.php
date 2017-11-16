<?php

class MakingSense
{

    protected $devisibleByThree;
    protected $devisibleByFive;


    public function __construct($devisibleByThree, $devisibleByFive) {
        $this->devisibleByThree = $devisibleByThree;
        $this->devisibleByFive = $devisibleByFive;
    }

    public function execute($min, $max)
    {
        // TODO: write logic here
        foreach (range($min, $max) as $argument) {

          if ($argument % 3 == 0 && $argument % 5 == 0) {
            echo 'MakingSense' . "\r\n";
          }

          if ($argument % 3 == 0) {
            echo 'Making' . "\r\n";
          }

          if ($argument % 5 == 0) {
            echo 'Sense' . "\r\n";
          }

          echo $argument . "\r\n";
        }
    }
}

// $run = new MakingSense('Making', 'Sense');
// $run->execute(1, 100);

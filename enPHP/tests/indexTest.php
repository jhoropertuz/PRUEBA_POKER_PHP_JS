<?php

use PHPUnit\Framework\TestCase;
require ("src/Poker.php");

class indexTest extends TestCase{
    public function testEscalaPoker() {
        $poker=new Poker();
        
        $results1 = $poker->esEscalera([2, 3, 4, 5, 6]);
        $this->assertEquals(true,$results1,"2, 3, 4, 5, 6");

        $results2 = $poker->esEscalera([14, 5, 4 ,2, 3]);
        $this->assertEquals(true,$results2,"14, 5, 4, 2, 3");

        $results3 = $poker->esEscalera([7, 7, 12, 11, 3, 4, 14]);
        $this->assertEquals(false,$results3,"7, 7, 12 ,11, 3, 4, 14");

        $results4 = $poker->esEscalera([7, 3, 2]);
        $this->assertEquals(false,$results4,"7, 3, 2");
    }
}

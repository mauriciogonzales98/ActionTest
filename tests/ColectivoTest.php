<?php 

namespace TrabajoSube;

use PHPUnit\Framework\TestCase;

class ColectivoTest extends TestCase{
   public function getLineaTest(){
        $cole = new Colectivo(129);
        $this->assertEquals($cole->getLinea(), 129);
    }
}
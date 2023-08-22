<?php 

namespace TrabajoSube;

use PHPUnit\Framework\TestCase;

class ColectivoTest extends TestCase{
   public function testGetLinea(){
        $cole = new Colectivo(129);
        $this->assertEquals($cole->getLinea(), 129);

        $this->assertNotEquals($cole->getLinea(), 130);
    }
}
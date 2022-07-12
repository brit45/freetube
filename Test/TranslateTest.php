<?php

namespace TEST;

use APP\Core\Utility\Translate;
use PHPUnit\Framework\TestCase;

class TranslateTest extends TestCase {

    function test_Add_Translation_success() {
        $t = new Translate();
        $this->assertTrue($t->Add('home','accueil'));
    }

    function test_Add_Doublon_Translation() {
        $t = new Translate();
        $t->Add('home','accueil');
        $this->assertFalse($t->Add('home', 'accueil'));
    }

    function test_Get_Translate_failled() {
        $t = new Translate();

        $this->assertFalse($t->Get('back'));
    }

    function test_Get_success_Translate() {
        $t = new Translate();
        $t->Add('home', 'accueil');

        $this->assertTrue($t->Get('home') == 'accueil');
    }

    function test_Get_Error_key_Fail_Translate() {
        $t = new Translate();
        $t->Add('home', 'accueil');

        $this->assertFalse($t->Get('home') == 'home');
    }

}
<?php
namespace Tests\Framework;

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase{

    public function testRedirectTrailingSlash(){
        $app = new App();
        $_SERVER[REQUEST_URI]  = '/sdoifjslmf/';
        $app->run();
        $this->assertContains('Location: /sdoifjslmf', headers_list());
    }
}
<?php
namespace Tests\Framework;

class AppTest extends testCase{

    public function testRedirectTrailingSlash(){
        $app = new App();
        $_SERVER[REQUEST_URI]  = '/sdoifjslmf/roifhro';
        $app->run();
    }
}
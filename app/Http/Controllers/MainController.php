<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $html = $this->render();

        return view('welcome', [
            "html" => $html
        ]);
    }

    private function render() {
        // Get the vue server renderer script
        $renderer_source = \File::get(base_path('node_modules/vue-server-renderer/basic.js'));

        // get the server entry file
        $app_source = \File::get(public_path('js/entry-server.js'));

        // define some local variables to our environment
        $js = '
            var process = { env: { VUE_ENV: "server", NODE_ENV: "production" } }; 
            this.global = { process: process };
        ';

        $v8 = new \V8Js();
    
        ob_start();
    
        $v8->executeString($js);
        $v8->executeString($renderer_source);
        $v8->executeString($app_source);
    
        return ob_get_clean();
    }
}

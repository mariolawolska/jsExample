<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Include the Highlighter class
use Highlight\Highlighter;

class MainController extends Controller {

    /**
     * Index route
     *
     * @return Response
     */
    public function index() {
        // Create a new instance of Highlighter
        $highlighter = new Highlighter();

        // Define the language that you want to use to highlight
        $language = "javascript";

        /**
         * Some example code to highlight in JavaScript
         */
        $code = <<<EOF
var DebugLibExample = {
    toggleDebug = function(s) {
        _f.debug = s ? !!s.debug : false;
    },
    logger = function(msg, type) {
        if (_f.debug) {
            type = type || 'log';
        
            var logAction = {
                'error': function(m) {
                    console.error('Chameleon.js:', m);
                },
                'warn': function(m) {
                    console.warn('Chameleon.js:', m);
                },
                'log': function(m) {
                    console.log('Chameleon.js:', m);
                }
            };
        
            if (typeof msg === 'undefined') {
                logAction.error('Msg given to logger is undefined!');
            } else {
                if (logAction.hasOwnProperty(type)) {
                    logAction[type](msg);
                } else {
                    logAction.error(['Unknown logAction type!', type]);
                }
            }
        }
    }
};
EOF;

        // Create the markup with styles ready to highlight in the view
        // as first argument the language type and as second the code
        $markupHighlightedCodeObject = $highlighter->highlight($language, $code);

        // Send the markup with styles to some blade view (default.blade.php) that you want
        // In this case the parameter "code" contains our code in the view
        return view("welcome", [
            "code" => $markupHighlightedCodeObject
        ]);
    }

    public function viewcode($name) {
        // Create a new instance of Highlighter
        $highlighter = new Highlighter();

        // Define the language that you want to use to highlight
        $languagehtml = "html";
        $languagecss = "css";
        $languagejs = "javascript";

        if (!$name) {
            $codecss = '';
            $codehtml = '';
            $codejs = '';
        } elseif ($name == "linechart") {

            $codehtml = <<<EOF
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Line chart</h4>
            <div id="c3-line-chart"></div>
            <a  href="{{url('linechart')}}" class="bnt-more">code</a>
        </div>
    </div>
</div>
EOF;
            $codecss = <<<EOF
.stretch-card {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: stretch;
  align-items: stretch;
  -webkit-justify-content: stretch;
  justify-content: stretch;
}

.stretch-card > .card {
  width: 100%;
  min-width: 100%;
}
                
                
EOF;
            $codejs = <<<EOF
(function($) {
  'use strict';
  var c3LineChart = c3.generate({
    bindto: '#c3-line-chart',
    data: {
      columns: [
        ['data1', 30, 200, 100, 400, 150, 250],
        ['data2', 50, 20, 10, 40, 15, 25]
      ]
    },
    color: {
      pattern: ['rgba(88,216,163,1)', 'rgba(237,28,36,0.6)', 'rgba(4,189,254,0.6)']
    },
    padding: {
      top: 0,
      right: 0,
      bottom: 30,
      left: 0,
    }
  });

  setTimeout(function() {
    c3LineChart.load({
      columns: [
        ['data1', 230, 190, 300, 500, 300, 400]
      ]
    });
  }, 1000);

 ...


})(jQuery);
EOF;
        } elseif ($name == "donutchart") {

            $codecss = 'comming soon';
            $codehtml = 'comming soon';
            $codejs = 'comming soon';
        } elseif ($name == "justgate") {

            $codecss = 'comming soon ... justgate';
            $codehtml = 'comming soon ... justgate';
            $codejs = 'comming soon ... justgate';
        } elseif ($name == "justgate") {

            $codecss = 'comming soon ...justgate';
            $codehtml = 'comming soon ...justgate';
            $codejs = 'comming soon ... justgate';
        } elseif ($name == "doughnutch") {

            $codecss = 'comming soon ... doughnutch';
            $codehtml = 'comming soon ... doughnutch';
            $codejs = 'comming soon ... doughnutch';
        } elseif ($name == "alerts") {

            $codecss = 'comming soon ...alerts';
            $codehtml = 'comming soon ... alerts';
            $codejs = 'acomming soon ... alerts';
        } elseif ($name == "dragula") {

            $codecss = 'comming soon ... dragula';
            $codehtml = 'comming soon ... dragula';
            $codejs = 'comming soon ... dragula';
        } elseif ($name == "tab") {

            $codecss = 'comming soon ... tab';
            $codehtml = 'comming soon ... tab';
            $codejs = 'comming soon ... tab';
            
        } elseif ($name == "notification") {

            $codecss = 'comming soon ... notification';
            $codehtml = 'acomming soon ... notification';
            $codejs = 'comming soon ... notification';
            
        } elseif ($name == "xeditable") {

            $codecss = 'comming soon ...xeditable';
            $codehtml = 'comming soon ... xeditable';
            $codejs = 'comming soon ... xeditable';
            
        } elseif ($name == "formmask") {

            $codecss = 'comming soon ... formmask';
            $codehtml = 'comming soon ...formmask';
            $codejs = 'comming soon ...formmask';
            
        } elseif ($name == "maxlength") {

            $codecss = 'comming soon ... maxlength';
            $codehtml = 'comming soon ... maxlength';
            $codejs = 'comming soon ... maxlength';
            
        } elseif ($name == "valid2") {

            $codecss = 'comming soon ... valid2';
            $codehtml = 'comming soon ... valid2';
            $codejs = 'comming soon ... valid2';
            
        } elseif ($name == "valid3") {

            $codecss = 'comming soon ... valid3';
            $codehtml = 'comming soon ... valid3';
            $codejs = 'comming soon ...valid3';
            
        } else {
            $codecss = '';
            $codehtml = '';
            $codejs = '';
        }



        // Create the markup with styles ready to highlight in the view
        // as first argument the language type and as second the code
        $markupHighlightedCodeObjectHtml = $highlighter->highlight($languagehtml, $codehtml);
        $markupHighlightedCodeObjectJs = $highlighter->highlight($languagejs, $codejs);
        $markupHighlightedCodeObjectCss = $highlighter->highlight($languagecss, $codecss);

        // Send the markup with styles to some blade view (default.blade.php) that you want
        // In this case the parameter "code" contains our code in the view
        return view("content", [
            "codehtml" => $markupHighlightedCodeObjectHtml,
            "codejs" => $markupHighlightedCodeObjectJs,
            "codecss" => $markupHighlightedCodeObjectCss
        ]);
    }

}

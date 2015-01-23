@extends('layout')
@section('content')
    <section>
        <div class="row btnGroup">
            <div class="column-33 toggleGroup">
            </div>
            <div class="column-33">
                <h1>CloudEdit: HTML Live Editor</h1>
                <h3>This is Content Posts</h3>
            </div>
            <div class="column-33 btnGroup last">
                <button class="btn" id="previewToggle" title="Enlarge Preview">Preview</button>
                <button class="btn" id="clear" title="Click to clear all panes">Clear</button>
                <button class="btn" id="run" title="Run...">Run</button>
            </div>
        </div>
        <div class="row windowGroup">
            <div class="column-33">
                <div class="window js">
                    <pre id="js">
                        <?php 
                            $test = '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                                    <script>
                                    $(document).ready(function(){
                                      $("p").click(function(){
                                        $(this).hide();
                                      });
                                    });
                                    </script>
                                    </head>
                                    <body>

                                    <p>If you click on me, I will disappear.</p>
                                    <p>Click me away!</p>
                                    <p>Click me too!</p>';
                        ?>
                        {{$test}}
                    </pre>
                    <span class="windowLabel" id="jsLabel">JavaScript/jQuery 1.x</span>
                </div>
            </div>

            <div class="column-33" style="display:none">
                <div class="window html">
                    <pre id="html"></pre>
                    <span class="windowLabel" id="htmlLabel">HTML</span>
                </div>
            </div>
            <div class="column-33">
                <div class="window css" style="display:none">
                    <pre id="css"></pre>
                    <span class="windowLabel" id="cssLabel">CSS</span>
                </div>
            </div>

        </div>
        <div class="row console" style="display:none">
            <pre id="console"></pre>
            <span class="windowLabel" id="consoleLabel">Console</span>
        </div>
        <div class="row preview">
            <iframe id="iframe" name="CloudEdit" sandbox="allow-scripts allow-pointer-lock allow-same-origin allow-popups allow-forms" allowtransparency="true">
            </iframe>
            <span class="windowLabel" id="iframeLabel">Preview</span>
            <span id="iframeClose">x</span>
        </div>
    </section>
@stop
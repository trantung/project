  <title>Project team</title>
    {{ HTML::style('asset/css/cloudEdit.min.css') }}
    {{ HTML::style('asset/css/contextMenu.min.css') }}
    

  <!-- <link href="css/contextMenu.min.css" rel="stylesheet"> -->

<body>
  <section>
    <div class="row btnGroup">
      <div class="column-33 toggleGroup">
        <!-- <button class="btn togglePane" id="htmlToggle" data-editor="html" title="Toggle HTML">HTML</button> -->
        <!-- <button class="btn togglePane" id="cssToggle" data-editor="css" title="Toggle CSS">CSS</button> -->
        <!-- <button class="btn togglePane" id="jsToggle" data-editor="js" title="Toggle JS">JavaScript</button> -->
        <!-- <button class="btn" id="consoleToggle" title="Toggle JavaScript Console">Console</button> -->
        <!-- <button class="btn btn-active" id="liveEdit" title="Toggle Live Edit Mode">LiveEdit</button> -->
      </div><!--
      -->
      <div class="column-33">
        <h1>Project team</h1>
         This is Content Postsasdsdas
      </div>
      <div class="column-33 btnGroup last">
        <button class="btn" id="previewToggle" title="Enlarge Preview">Preview</button>
        <button class="btn" id="clear" title="Click to clear all panes">Clear</button>
        <button class="btn" id="run" title="Run...">Run</button>
      </div>
    </div>
    <div class="row windowGroup">
      <?php
        $test= '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                  $("button").click(function(){
                    $("#div1").fadeIn();
                    $("#div2").fadeIn("slow");
                    $("#div3").fadeIn(3000);
                  });
                });
                </script>
                p>Demonstrate fadeIn() with different parameters.</p>
                <button>Click to fade in boxes</button>
                <br><br>
                <div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
                <div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
                <div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>';
        ?>
        <div class="column-33">
            <div class="window js">
                <pre id="js">
                <i>
                  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                  <script>
                  $(document).ready(function(){
                    $("button").click(function(){
                      $("#div1").fadeIn();
                      $("#div2").fadeIn("slow");
                      $("#div3").fadeIn(3000);
                    });
                  });
                  </script>
                  p>Demonstrate fadeIn() with different parameters.</p>
                  <button>Click to fade in boxes</button>
                  <br><br>
                  <div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
                  <div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
                  <div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>
                  <i>
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
      <iframe id="iframe" name="CloudEdit"
        sandbox="allow-scripts allow-pointer-lock allow-same-origin allow-popups allow-forms"
        allowtransparency="true">
      </iframe>
      <span class="windowLabel" id="iframeLabel">Preview</span>
      <span id="iframeClose">x</span>
    </div>
      </section>
    {{ HTML::script('asset/js/jquery-1.11.1.min.js') }}
    {{ HTML::script('asset/js/ace/ace.js') }}
    {{ HTML::script('asset/js/ace/ext-emmet.js') }}
    {{ HTML::script('asset/js/ace/emmet.js') }}
    {{ HTML::script('asset/js/jquery.ui.position.min.js') }}
    {{ HTML::script('asset/js/contextMenu.min.js') }}
    {{ HTML::script('asset/js/jqconsole.min.js') }}
    {{ HTML::script('asset/js/cloudEdit.min.js') }}
</body>

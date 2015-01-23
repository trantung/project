<head>
<title>JavaScript Templates Demo</title>
{{ HTML::style('/asset/css/demo.css') }}
{{ HTML::script('asset/js/tmpl.js') }}
{{ HTML::script('/asset/js/jquery-1.11.1.min.js') }}
{{ HTML::script('asset/js/demo.js') }}
</head>
<body>
<h1>Project Demo</h1>
day la content post
<form>
    <h2>Template</h2>
    <textarea rows="12" id="template"></textarea>
    <br>
    <div style = "display: none">
    <h2>Data (JSON)</h2>
    <textarea rows="14" id="data"></textarea>
    </div>
    <br>
    <button type="submit" id="render">Render</button>
    <button type="reset" id="reset">Reset</button>
    <h2>Result</h2>
    <div id="result" class="result"></div>
    <br>
</form>
<script type="text/x-tmpl" id="tmpl-demo">
    <b>day la script</b>
</script>

<script type="text/x-tmpl" id="tmpl-data">
{
    "title": "JavaScript Templates",
    "license": {
        "name": "MIT license",
        "url": "http://www.opensource.org/licenses/MIT"
    },
    "features": [
        "lightweight & fast",
        "powerful",
        "zero dependencies"
    ]
}
</script>
<script type="text/x-tmpl" id="tmpl-error">
<code>{%=o%}</code>
</script>
</body> 

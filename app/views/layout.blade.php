<!DOCTYPE html>
<html>
<head>  
    <title>CloudEdit: HTML Live Editor</title>
    {{ HTML::style('asset/css/cloudEdit.min.css') }}
    {{ HTML::style('asset/css/contextMenu.min.css') }}
</head>
<body>
@yield('content')
    {{ HTML::script('asset/js/jquery-1.11.1.min.js') }}
    {{ HTML::script('asset/js/ace/ace.js') }}
    {{ HTML::script('asset/js/ace/ext-emmet.js') }}
    {{ HTML::script('asset/js/ace/emmet.js') }}
    {{ HTML::script('asset/js/jquery.ui.position.min.js') }}
    {{ HTML::script('asset/js/contextMenu.min.js') }}
    {{ HTML::script('asset/js/jqconsole.min.js') }}
    {{ HTML::script('asset/js/cloudEdit.min.js') }}
</body>
    
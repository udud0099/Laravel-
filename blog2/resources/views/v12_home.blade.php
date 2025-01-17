
@include('v12_common.v12_header',['page'=>"this is form home page"])
<h1> This is home page </h1>

<!-- if sub view not exit it is not give a error -->
@includeIf('v12_common.v12_fotter',['page'=>"this is form home page"])

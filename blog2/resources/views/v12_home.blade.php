
@include('v12_common.v12_header',['page'=>"this is form home page"])
<h1> This is home page </h1>

<!-- v13 -->
 <x-v13_message-banner msg="login success" customStyle="succ"/>

 <br>
 <br>
 <br>

 <x-v13_message-banner  msg="login fail" customStyle="err"/>

<!-- if sub view not exit it is not give a error -->
@includeIf('v12_common.v12_fotter',['page'=>"this is form home page"])

<style>
  .succ{
    color:green;
    background-color:gray;
    padding:5px 20px

  }
  .err{
    color:red;
    background-color:gray;
    padding:5px 20px
  }
</style>
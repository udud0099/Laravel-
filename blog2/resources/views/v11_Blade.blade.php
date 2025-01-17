<h1>v11_Blade </h1>
<h2>{{$name}}</h2>

<h1>{{rand()}} </h1>

<h1>{{$users[0]}}</h1>

@if($name == "Ram")
<h1>Hello Ram is a good boy</h1>
@elseif($name == "Sita")
<h1>Hello {{$name}} is a good girl</h1>
@else
<h1>Hello Who are you</h1>
@endif


@for($i=0;$i<2;$i++)
<h1>{{$i}}</h1>
<p>{{$users[$i]}}</p>
@endfor

@foreach($users as $user)
<h1>{{$user}}</h1>
@endforeach

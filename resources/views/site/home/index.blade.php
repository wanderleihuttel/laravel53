@extends('site.template.template1')

@section('content')

<h3>Homepage do Site</h3>
<p>Nome: {{$nome}} - Sobrenome: {{$sobrenome or ''}}</p>

<p>{{ $xss }}</p>

@if( $var1 == 123)
<p>É igual</p>
@else
<p>É diferente</p>
@endif

<pre>
@for ($i = 0; $i < 5; $i++)
   Foreach = {{$i}}
@endfor
</pre>

<pre>
@forelse($var2 as $nome)
   Forelse =>  {{$nome}}
@empty
   Não existem itens para ser impresso!
@endforelse
</pre>


@include('site.includes.sidebar', compact('var1'))
@endsection

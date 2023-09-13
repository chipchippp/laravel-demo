@extends('layouts.app2')
@section('content')

    <h1>This is About Pages</h1>
    {{
    $x = 100

    }}
    @if($x > 2)
        <h3>x is greater than 2</h3>
    @elseif($x < 10)
        <h3> x is less than 10</h3>
    @else
        <h3> x this is not match</h3>
    @endif

{{--    @unless(empty($name))
        <h3> Name is not empty</h3>
        @endunless--}}
{{--    2 caí bằng nhau--}}
    {{--
    @if(!empty($name))
        <h3> Name is not empty</h3>
    @endif
    @empty(!$name)
        <h3> Name is not empty</h3>
    @endempty
       --}}
    {{--
    @empty($age)
        <h3> Age is empty</h3>
    @endempty
    @isset($name)
        <h3> Name has been set</h3>
    @endisset
    @switch($name)
        @case('Loc')
            <h3> This is Mr.Loc</h3>
        @break
        @case('Trang')
            <h3> This is Mrs.Trang</h3>
            @break
        @default
            <h3> No one select</h3>
    @endswitch
    @for($i = 0; $i < 6; $i++)
        <h2> i = {{$i}}</h2>
    @endfor
    --}}


    {{--    it dung for else --}}
    {{--
    @foreach($names as $eachName)
        <h3> each name : {{$eachName}}</h3>
    @endforeach

    @forelse($names as $eachName)
        <h3> each name : {{$eachName}}</h3>
    @empty
        <h3>The array is empty</h3>
    @endforelse
    --}}


    {{--
        {{$i = 0}}
        @while($i < 10)
            <h3> i = {{$i}}</h3>
            {{$i++}}
        @endwhile
        --}}
@endsection

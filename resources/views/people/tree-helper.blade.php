@for ($i = 0; $i < count($trees); $i++)
    <div>
        <span>{{$trees[$i]['name']}} ({{$trees[$i]['age']}})</span>
        <span>{{$trees[$i]['spouse']['name']}}({{$trees[$i]['spouse']['age']}})</span>
    </div>
    @if ($trees[$i]['children'])
        @include('people\tree-helper', ['trees' => $trees[$i]['children']])
    @endif
@endfor

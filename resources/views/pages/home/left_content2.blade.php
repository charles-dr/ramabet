<div class="list-group">
    <a href="{{url('/favourites')}}" class="list-group-item">
        <img class="star"/>
        <span>Favourites</span>
    </a>
    <a href="{{url('/')}}" class="list-group-item">
        <span style="font-size: 14px;">
            <i class="fas fa-home"></i>
        </span>
        <span>Sports</span>
    </a>
    <a href="{{url('/'.$sports)}}" class="list-group-item current_sports">
        <img class="{{$sports}}"/>
        <span>{{ucfirst($sports)}}</span>
    </a>
    <a class="list-group-item" onclick="window.history.go(-1); return false;" style="color: {{$b_color}}">
        <span style="font-size: 14px;">
            <i class="fas fa-chevron-circle-left"></i>
        </span>
        <span>
            Previous
        </span>
    </a>
    @foreach($league as $item)
        <a href="{{url('/'.$sports.'/'.($root+1).'/'.$item['league'].'/'.$item['event_id'])}}" class="list-group-item" style="color: {{$b_color}}">
            <span style="text-overflow: ellipsis;display: inline-block;
    overflow: hidden;
    width: 90%;
    height: 1.2em;
    white-space: nowrap;" title="{{$item['name']}}">{{$item['name']}}</span>
            <span style="float: right;"><i class="fas fa-chevron-right"></i></span>
        </a>
    @endforeach
    {{--<a class="link-lvl-prev" onclick="window.history.go(-1); return false;"><i class="apl-icon-chevron-sign-left"></i>Previous </a>--}}
    @guest
    @else

    @endguest

</div>
<div class="mr-auto">
    <ol class="breadcrumb">
        @if ($current_breadcrumb === null )
        <li class="active"><i class="fa fa-home"></i> Home</li>
        @else
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
        @foreach ($links_breadcrumb as $name_breadcrumb => $link_breadcrumb)
        <li><a href="{{$link_breadcrumb}}"> {{$name_breadcrumb}}</a></li>
        @endforeach
        <li class="active"> {{$current_breadcrumb}}</li>
        @endif
    </ol>
</div>
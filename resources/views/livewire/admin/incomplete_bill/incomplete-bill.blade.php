@push('head')

@endpush
@push('script')

@endpush
@section('breadcrumb')
@livewire('component.breadcrumb',['links_breadcrumb'=>[],'current_breadcrumb'=> 'Incomplete Bills'])
@endsection

@section('content')
<h1>Incomplete Bills</h1>
@endsection
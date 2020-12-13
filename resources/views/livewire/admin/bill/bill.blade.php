@push('head')

@endpush
@push('script')

@endpush
@section('breadcrumb')
@livewire('component.breadcrumb',['links_breadcrumb'=>[],'current_breadcrumb'=>'Bills'])
@endsection

@section('content')
<h1>Bills</h1>
@endsection
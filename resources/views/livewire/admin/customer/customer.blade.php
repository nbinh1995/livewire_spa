@push('head')

@endpush
@push('script')

@endpush
@section('breadcrumb')
@livewire('component.breadcrumb',['links_breadcrumb'=>[],'current_breadcrumb'=>'Customers'])
@endsection

@section('content')
<h1>Customers</h1>
@endsection
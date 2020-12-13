@push('head')

@endpush
@push('script')

@endpush
@section('breadcrumb')
@livewire('component.breadcrumb',['links_breadcrumb'=>[],'current_breadcrumb'=> 'Products'])
@endsection

@section('content')
<h1>Products</h1>
@endsection
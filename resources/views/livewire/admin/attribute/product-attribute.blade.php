@push('head')

@endpush
@push('script')

@endpush
@section('breadcrumb')
@livewire('component.breadcrumb',['links_breadcrumb'=>[],'current_breadcrumb'=> 'Product Attributes'])
@endsection

@section('content')
<h1>Attributes</h1>
@endsection
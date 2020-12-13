@push('head')

@endpush
@push('script')

@endpush
@section('breadcrumb')
@livewire('component.breadcrumb',['links_breadcrumb'=>[],'current_breadcrumb'=> null])
@endsection

@section('content')
@include('partials.common.admin-box_dashboard')

@endsection
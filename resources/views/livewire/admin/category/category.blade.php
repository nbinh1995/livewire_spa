@push('head')

@endpush
@push('script')

@endpush
@section('breadcrumb')
@livewire('component.breadcrumb',['links_breadcrumb'=>[],'current_breadcrumb'=>'Product Categories'])
@endsection

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Product Categories</h3>

        <div class="box-tools pull-right">
            <button class="btn btn-primary" wire:click='create'><i class="fa fa-plus"> Create</i> </button>
        </div>
    </div>
    <div class="box-body table-responsive">
        <table class="table table-condensed">
            <thead class="bg-teal">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Attribute Category</th>
                    <th scope="col" class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $index => $category)
                <tr>
                    <th scope="col">{{$index+1}}</th>
                    <td class="text-capitalize">{{$category->name}}</td>
                    <td>{!!$category->toHtmlCategoryAttrs()!!}</td>
                    <td class="text-right">
                        <button class="btn btn-warning edit" data-id="{{$category->slug}}"><i class="fa fa-pencil"
                                style="pointer-events: none"></i></button>
                        <button class="btn btn-danger remove" data-id="{{$category->slug}}"><i class="fa fa-trash-o"
                                style="pointer-events: none"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer text-right">
        {{ $categories->links() }}
    </div>
</div>
@endsection
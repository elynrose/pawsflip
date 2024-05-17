@extends('layouts.frontend')
@section('content')

<section class="features15 agencym4_features15 cid-ucRMkyKyoy" id="features15-3a">
    <div class="container">
        @can('pet_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('frontend.pets.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.pet.title_singular') }}
                </a>
            </div>
        </div>
        @endcan
        <div class="media-container-row">
            @foreach($pets as $key => $pet)
            <div class="card col-12 col-md-4 col-lg-3">
                <div class="card-img">
                    @foreach($pet->photos as $key => $media)
                    <a href="{{ route('frontend.pets.show', $pet->id) }}" target="_blank" style="display: inline-block">
                        <img class="img-icon" src="{{ $media->getUrl() }}">
                    </a>
                    @endforeach
                </div>
                <div class="card-box">
                    <h4 class="card-title mbr-fonts-style display-5">{{ $pet->name ?? '' }}</h4>
                    <p class="mbr-text mbr-fonts-style display-7"><strong>Gender</strong>: {{ $pet->gender ?? '' }}<br><strong>Breed</strong>: {{ $pet->breed ?? '' }}<br><strong>Age</strong>: {{ $pet->age ?? '' }}</p>
                </div>
                <div class="row">
                    @can('pet_show')
                    <a class="btn btn-xs btn-primary" href="{{ route('frontend.pets.show', $pet->id) }}">
                        {{ trans('global.view') }}
                    </a>
                    @endcan
                    @can('pet_edit')
                    <a class="btn btn-xs btn-info" href="{{ route('frontend.pets.edit', $pet->id) }}">
                        {{ trans('global.edit') }}
                    </a>
                    @endcan
                    @can('pet_delete')
                    <form action="{{ route('frontend.pets.destroy', $pet->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                    </form>
                    @endcan
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">            
        </div>
    </div>
</section>


@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('pet_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.pets.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Pet:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
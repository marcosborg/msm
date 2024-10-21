@extends('layouts.admin')
@section('content')
@can('common_information_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.common-informations.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.commonInformation.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.commonInformation.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CommonInformation">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.commonInformation.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.commonInformation.fields.footer_info') }}
                        </th>
                        <th>
                            {{ trans('cruds.commonInformation.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.commonInformation.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.commonInformation.fields.phone') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($commonInformations as $key => $commonInformation)
                        <tr data-entry-id="{{ $commonInformation->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $commonInformation->id ?? '' }}
                            </td>
                            <td>
                                {{ $commonInformation->footer_info ?? '' }}
                            </td>
                            <td>
                                {{ $commonInformation->address ?? '' }}
                            </td>
                            <td>
                                {{ $commonInformation->email ?? '' }}
                            </td>
                            <td>
                                {{ $commonInformation->phone ?? '' }}
                            </td>
                            <td>
                                @can('common_information_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.common-informations.show', $commonInformation->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('common_information_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.common-informations.edit', $commonInformation->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('common_information_delete')
                                    <form action="{{ route('admin.common-informations.destroy', $commonInformation->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('common_information_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.common-informations.massDestroy') }}",
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
  let table = $('.datatable-CommonInformation:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
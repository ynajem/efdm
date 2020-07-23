@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-header text-bold">Import Data From Excell</div>
  <div class="card-body">


    <form method="POST" action="{{ route('import.process') }}">
      @csrf

      {{-- <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}" /> --}}

      <table class="table datatable table-striped table-sm projects">
        <thead>
          <tr>
            @foreach ($csv_header_fields as $header)
            <th>
              {{ $header }}<br />
              <div class="form-group">
                <select class="form-control form-control-sm select2" name="fields[{{ $header }}]">
                  <option value="">Ignore</option>
                  @foreach ($db_fields as $field)
                  <option value="{{ $field }}" @if ($header==$field) selected @endif>{{ $field }}</option>
                  @endforeach
                </select>
              </div>

            </th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          <tr>
            {{-- @foreach ($csv_header_fields as $header)
            <td>

            </td>
            @endforeach --}}
          </tr>
          @foreach ($csv_data as $row)
          <tr>
            @foreach ($row as $key => $value)
            <td>{{ $value }}</td>
            @endforeach
          </tr>
          @endforeach

        </tbody>
      </table>

      <button type="submit" class="btn btn-primary">
        Import Data
      </button>

    </form>
  </div>
</div>
@endsection

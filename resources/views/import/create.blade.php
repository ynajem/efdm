@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">CSV Import</div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('import.parse') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
              <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

              <div class="col-md-6">
                <input id="csv_file" type="file" class="form-control" name="csv_file" required>

                @if ($errors->has('csv_file'))
                <span class="help-block">
                  <strong>{{ $errors->first('csv_file') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label class="required" for="db_table">DB Table</label>
              <select class="form-control select2 {{ $errors->has('db_table') ? 'is-invalid' : '' }}" name="db_table" id="db_table" required>
                @foreach($db_tables as $table)
                <option value="{{ $table }}">{{ $table }}</option>
                @endforeach
              </select>
              @if($errors->has('db_table'))
              <span class="text-danger">{{ $errors->first('db_table') }}</span>
              @endif
            </div>



            <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Parse CSV
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

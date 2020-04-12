@extends('layouts.admin')

@section('content')
<div class="row center">
    <div class="body col-md-7">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <strong>Modifier</strong>
                <img class="ml-auto" src="/svg/003.svg" height="32" alt="">
            </div>
            <div class="card-body">
                <form class="needs-validation" method="post" action="{{ route('equipements.update',$equipement->id) }}" novalidate>
                    @csrf
                    @method("PUT")
                    @include('equipements.form')
                    <button type="submit" class="btn btn-success">
                        <span class="fa fa-edit mr-2"></span>Modifier
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function subobj(id) {
        // ajax
        $.get('/api/subobj/' + id, function(data) {
            $('#subobj').empty();
            $.each(data, function(i, obj) {
                $('#subobj').append(
                    '<option value="' + obj.id + '">' + obj.name + '</option>'
                );
            });
        });
    }

    $('#objet').on('change', function(e) {
        const id = e.target.value;
        subobj(id);
    });
</script>
@endsection
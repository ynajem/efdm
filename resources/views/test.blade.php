@extends('layouts.admin')

@section('styles')
{{-- <script type="text/javascript" src="/js/jquery.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection

@section('content')
<div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 250px">
  <i class="fa fa-calendar"></i>&nbsp;
  <span></span> <i class="fa fa-caret-down"></i>
</div>

<script type="text/javascript">
  var start = moment().subtract(29, 'days');
  start = start.locale('fr');
  var end = moment();

  function cb(start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  }

  moment.locale('fr');

  $('#reportrange').daterangepicker({
    locale: {
      "format": "DD/MM/YYYY",
      "applyLabel": "Appliquer",
      "cancelLabel": "Annuler",
      "customRangeLabel": "Choisir",
      "daysOfWeek": ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
      "monthNames": ["January", "February", "Mars", "Avril", "May", "June", "July", "Aout", "September", "October", "November", "December"],
      "firstDay": 1
    },
    startDate: start,
    endDate: end,
    language: 'ru',
    ranges: {
      'Aujourd\'hui': [moment(), moment()],
      'Hier': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      '7 derniers jours': [moment().subtract(6, 'days'), moment()],
      '30 derniers jours': [moment().subtract(29, 'days'), moment()],
      'Ce mois-ci': [moment().startOf('month'), moment().endOf('month')],
      'Le mois dernier': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
  }, cb);

  cb(start, end);
</script>
@endsection
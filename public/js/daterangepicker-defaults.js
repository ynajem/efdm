window.start = moment().subtract(1, 'year');
window.end = moment();

function cb(start, end) {
  window.start = start;
  window.end = end;
  range = start.format('DD-MM-YYYY') + ' - ' + end.format('DD-MM-YYYY');
  $('#daterange span').html(range);
  $('title').append(` [${range}]`);
  table.draw();
}

$.fn.daterangepicker.defaultOptions = {
  locale: {
    "format": "DD/MM/YYYY",
    "applyLabel": "Appliquer",
    "cancelLabel": "Annuler",
    "customRangeLabel": "Choisir",
    "daysOfWeek": ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
    "monthNames": ["Janvier", "Février", "Mars", "Avril", "May", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
    "firstDay": 1
  },
  ranges: {
    'Cette semaine': [moment().subtract(6, 'days'), moment()],
    '30 derniers jours': [moment().subtract(29, 'days'), moment()],
    'Ce mois-ci': [moment().startOf('month'), moment().endOf('month')],
    'Le mois dernier': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
    'Les 3 derniers mois': [moment().subtract(3, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
  }
}

$('#daterange').daterangepicker({}, cb);

<x-datatable :title="$objet->name">
  <script>
    var table = $("#datatable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        // url: "/reports/data/{{ request()->query('num',28) }}"
        url: "/reports/data/{{ $objet->id }}",
        data: function(data) {
          data.from_date = window.start.format("YYYY-MM-DD");
          data.to_date = window.end.format("YYYY-MM-DD");
        }
      },
      // title: "bobo",
      columns: [{
        data: "objet",
        title: "Station"
      }, {
        data: "startdate",
        title: "Date de début"
      }, {
        data: "starttime",
        title: "Heure de début"
      }, {
        data: "enddate",
        title: "Date de fin"
      }, {
        data: "endtime",
        title: "Heure de fin"
      }, {
        data: "duration",
        title: "Durée (min)"
      }]
    });
  </script>
</x-datatable>
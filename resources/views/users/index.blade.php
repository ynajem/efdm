<x-datatable title='La liste des utilisateurs'>
  <script>
    var table = $("#datatable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "/allusers",
        "data": function(data) {
          data.from_date = window.start.format('YYYY-MM-DD');
          data.to_date = window.end.format('YYYY-MM-DD');
        }
      },
      columns: [{
          data: "fullname",
          title: "Name"
        },
        {
          data: "badge",
          title: "Matricule"
        },
        {
          data: "entity",
          title: "Entity"
        }, {
          data: "email",
          title: "Email"
        }, {
          data: "created_at",
          title: "Created At",
          render: function(d) {
            date = new Date(d);
            return `<b class="text-bold">${date.toDateString()}</b>`;
          }
        }
      ]
    })
  </script>
</x-datatable>
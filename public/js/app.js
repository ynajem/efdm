/* Select subobjets */
function subobj(id) {
  // ajax
  $.get('/api/subobj/' + id, function (data) {
    $('#subobj').empty();
    $.each(data, function (i, obj) {
      $('#subobj').append(
        '<option value="' + obj.id + '">' + obj.name + '</option>'
      );
    });
  });
}

/* Show subobjets */
$('#objet').on('change', function (e) {
  const id = e.target.value;
  subobj(id);
});

/* Show delete confirmation */
function deleteData(elem) {
  var url = elem.dataset.url;
  $("#deleteForm").attr('action', url).modal('show');
}

/* Delete a record */
function formSubmit() {
  $("#deleteForm").submit();
}
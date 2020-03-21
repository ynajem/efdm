"use strict";
$(function () {
	// Enable bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();

	/* Enable Tagsinput for #tagsinput1 */
	$("#tagsinput1").tagsinput({
		tagClass: "badge badge-dark",
		autocomplete: {
			source: ['jQuery', 'Script', 'Net', 'Demo']
		}
	});

	/* Form validation */
	let forms = document.querySelectorAll('.needs-validation');
	let validation = Array.prototype.filter.call(forms, function (form) {
		form.addEventListener('submit', function (event) {
			if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
		});
	});

	/* Enable CodeMirror Plugin */
	const code = document.querySelector('#codemirror');
	let editor = CodeMirror.fromTextArea(code, {
		lineNumbers: true,
		matchBrackets: true,
		autocapitalize: true,
		tabMode: "indent",
		mode: "sql",
	});
	editor.setSize("100%", "150");
});

/* HLJS Codehighligh Plugin */
hljs.initHighlightingOnLoad();

function sub_obj(obj_id) {
	// ajax
	$.get('/ajax/sub_obj/' + obj_id, function (data) {
		$('#sub_obj').empty();
		$.each(data, function (i, obj) {
			$('#sub_obj').append(
				'<option value="' + obj.id + '">' + obj.name + '</option>'
			);
		});
	});
}

$('#objet').on('change', function (e) {
	const obj_id = e.target.value;
	sub_obj(obj_id);
});


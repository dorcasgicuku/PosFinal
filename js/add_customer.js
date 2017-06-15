$(document).ready(function() {
// validate signup form on keyup and submit
	$("#form1").validate({
		rules: {
			name: {
				required: true,
				minlength: 3,
				maxlength: 200
			},
			address: {
				minlength: 3,
				maxlength: 500
			},
			contact1: {
				minlength: 3,
				maxlength: 20
			},
			contact2: {
				minlength: 3,
				maxlength: 20
			}
		},
		messages: {
			name: {
				required: "Please enter a Customer Name",
				minlength: "Customer must consist of at least 3 characters"
			},
			address: {
				minlength: "Customer Address must be at least 3 characters long",
				maxlength: "Customer Address must be at least 3 characters long"
			}
		}
	});
});
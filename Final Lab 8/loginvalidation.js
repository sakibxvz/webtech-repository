const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');

//show input error message
function showError(input, message) {
	const formControl = input.parentElement;
	formControl.className = 'form-group error';
	const small = formControl.querySelector('small');
	small.innerText = message;
}

function showSuccess(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-group success';
}

//check required field
function checkRequired(inputArr) {
	inputArr.forEach((input) => {
		if (input.value.trim() === '') {
			showError(input, `${getFieldName(input)} is required`);
		} else {
			showSuccess(input);
		}
	});
}
//Check Input Lenght
function checkLength(input, min, max) {
	if (input.value.length < min) {
		showError(
			input,
			`${getFieldName(input)} must be at least ${min} characters`
		);
	} else if (input.value.length > max) {
		showError(
			input,
			`${getFieldName(input)} must be at less ${max} characters`
		);
	} else {
		showSuccess(input);
	}
}

//Get Fieldname
function getFieldName(input) {
	return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

//event Listener
form.addEventListener('submit', function (e) {
	e.preventDefault();

	checkRequired([username, password]);
	checkLength(username, 3, 15);
	checkLength(password, 6, 20);
});

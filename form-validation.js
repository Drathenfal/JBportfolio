// form validation

const form = document.getElementById('form');
const firstname = document.querySelector('.firstname'); // Use querySelector for single elements
const lastname = document.querySelector('.lastname');
const email = document.querySelector('.email');
const subject = document.querySelector('.subject');
const messagearea = document.querySelector('.messagearea');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const firstnameValue = firstname.value.trim();
    const lastnameValue = lastname.value.trim();
    const emailValue = email.value.trim();
    const subjectValue = subject.value.trim();
    const messageareaValue = messagearea.value.trim();

    if (firstnameValue === '') {
        setError(firstname, 'First Name is required');
    } else {
        setSuccess(firstname);
    }

    if (lastnameValue === '') {
        setError(lastname, 'Last Name is required');
    } else {
        setSuccess(lastname);
    }

    if (emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if (subjectValue === '') {
        setError(subject, 'Please input a subject');
    } else {
        setSuccess(subject);
    }

    if (messageareaValue === '') {
        setError(messagearea, "Please leave a message, I'm not a mind reader");
    } else {
        setSuccess(messagearea);
    }
};
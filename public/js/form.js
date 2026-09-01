"use strict"

const contactForm = document.querySelector('#contactForm'),
    submitBtn = contactForm.querySelector('button[type="submit"]'),
    username = contactForm.querySelector('input[name="username"]'),
    useremail = contactForm.querySelector('input[name="useremail"]'),
    usersubject = contactForm.querySelector('input[name="usersubject"]'),
    usermsg = contactForm.querySelector('textarea[name="usermessage"]'),
    selectAllFormControl = contactForm.querySelectorAll(".input"),
    notificationSubmit = contactForm.querySelector(".form--notification span");

usermsg.value = "Write a message here";

function clearDefaultValue() {
    if (usermsg.value == "Write a message here") {
        usermsg.value = "";
    }
}

function restoreDefaultValue() {
    if (usermsg.value == "") {
        usermsg.value = "Write a message here";
    }
}

contactForm.onsubmit = (e) => {
    e.preventDefault();
}

function removeErrorClass() {
    selectAllFormControl.forEach(element => {
        element.addEventListener("mouseover", () => {
            element.classList.remove("error");
        })
    });
}

submitBtn.onclick = (e) => {
    e.preventDefault();
    messageSending();
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../contact_form/contact.php", true);
    xhr.onload = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Parse the JSON response
            console.log(xhr.responseText);
            var response = JSON.parse(xhr.responseText);

            // Name
            if (response.name_error) {
                setErrorFor(username, response.name_error);
            } else {
                setSuccessFor(username);
            }

            // Email
            if (response.email_error) {
                setErrorFor(useremail, response.email_error);
            } else {
                setSuccessFor(useremail);
            }

            // Subject
            if (response.subject_error) {
                setErrorFor(usersubject, response.subject_error);
            } else {
                setSuccessFor(usersubject);
            }

            // Message
            if (response.message_error) {
                setErrorFor(usermsg, response.message_error);
            } else {
                setSuccessFor(usermsg);
            }
        }

        if (response.noError == "No Error") {
            submitBtn.disabled = true;
            submitBtn.style.cursor = "not-allowed";
            if (response.success == true) {
                submitBtn.disabled = false;
                submitBtn.style.cursor = "pointer";
                Swal.fire({
                    title: 'Good job!',
                    text: 'Your email has been sent successfully',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            } else {
                submitBtn.style.cursor = "pointer";
                Swal.fire({
                    title: 'Error!',
                    text: 'Oops! Your Message not send',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }

        } else {
            failureFun()
        }
    };

    let formData = new FormData(contactForm);
    xhr.send(formData);
};

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.classList.remove('success');
    formControl.classList.add('error');
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.classList.remove('error');
    formControl.classList.add('success');
}

function failureFun() {
    notificationSubmit.style.visibility = "visible";
    notificationSubmit.innerText = "Oops! make sure no any error or blank field left...";
    notificationSubmit.style.color = "red";
}

function messageSending() {
    notificationSubmit.innerText = "Sorry! wait a second, message sending...";
    notificationSubmit.style.color = "#2ecc71";
    notificationSubmit.style.visibility = "visible";
}

/**
 * Client portal sign-in and sign-up pages.
 * - Show / hide password buttons
 * - Password strength meter on sign-up
 * - The portal is not live yet, so a submit shows a notice instead of
 *   posting. Remove the submit handler once the form has a real action.
 */
(function () {
  'use strict';

  document.querySelectorAll('[data-hx-show]').forEach(function (button) {
    var input = document.getElementById(button.getAttribute('data-hx-show'));

    if (!input) {
      return;
    }

    button.addEventListener('click', function () {
      var showing = input.type === 'text';

      input.type = showing ? 'password' : 'text';
      button.textContent = showing ? 'Show' : 'Hide';
      button.setAttribute('aria-pressed', showing ? 'false' : 'true');
    });
  });

  var password = document.querySelector('[data-hx-strength]');
  var meter = document.querySelector('[data-hx-meter]');
  var hint = document.querySelector('[data-hx-hint]');

  if (password && meter && hint) {
    var bars = Array.prototype.slice.call(meter.children);
    var labels = ['Use 12 or more characters with a number.', 'Weak. Add more characters.', 'Fair. Add a number or symbol.', 'Good. Longer is stronger.', 'Strong.'];

    password.addEventListener('input', function () {
      var value = password.value;
      var score = 0;

      if (value.length >= 8) { score++; }
      if (value.length >= 12) { score++; }
      if (/\d/.test(value) && /[a-z]/i.test(value)) { score++; }
      if (/[^a-z0-9]/i.test(value) || value.length >= 16) { score++; }
      if (!value) { score = 0; }

      bars.forEach(function (bar, i) {
        bar.className = i < score ? 'auth_meter-bar' : 'auth_meter-off';
      });

      hint.textContent = labels[score];
    });
  }

  document.querySelectorAll('form[data-hx-auth]').forEach(function (form) {
    var message = form.parentNode.querySelector('[data-hx-auth-msg]');

    form.addEventListener('submit', function (event) {
      event.preventDefault();

      if (message) {
        message.hidden = false;
        message.style.display = 'block';
        message.focus();
      }
    });
  });
})();

/* ============================================================
   CONTACT PAGE SCRIPT
   Handles:
     1. Inquiry-type pill selection → hidden field sync
     2. FAQ accordion open / close
     3. Client-side form validation + AJAX submission feedback
   ============================================================ */

(function () {
  'use strict';

  /* ----------------------------------------------------------------
     1. INQUIRY PILLS
     Clicking a pill marks it active and writes the data-type value
     into the hidden #inquiry_type field.
  ---------------------------------------------------------------- */
  var pillGroup = document.querySelector('.inquiry-pills');
  var hiddenType = document.getElementById('inquiry_type');

  if (pillGroup && hiddenType) {
    pillGroup.addEventListener('click', function (e) {
      var pill = e.target.closest('.inquiry-pill');
      if (!pill) return;

      /* Deactivate all, activate clicked */
      pillGroup.querySelectorAll('.inquiry-pill').forEach(function (p) {
        p.classList.remove('active');
        p.setAttribute('aria-pressed', 'false');
      });
      pill.classList.add('active');
      pill.setAttribute('aria-pressed', 'true');

      hiddenType.value = pill.dataset.type || '';
    });

    /* Set initial aria-pressed states */
    pillGroup.querySelectorAll('.inquiry-pill').forEach(function (p) {
      p.setAttribute('aria-pressed', p.classList.contains('active') ? 'true' : 'false');
    });
  }


  /* ----------------------------------------------------------------
     2. FAQ ACCORDION
     Only one item open at a time; button aria-expanded tracks state.
  ---------------------------------------------------------------- */
  var accordion = document.querySelector('.accordion');

  if (accordion) {
    accordion.addEventListener('click', function (e) {
      var trigger = e.target.closest('.accordion__trigger');
      if (!trigger) return;

      var item = trigger.closest('.accordion__item');
      var isOpen = item.classList.contains('open');

      /* Close all items */
      accordion.querySelectorAll('.accordion__item').forEach(function (i) {
        i.classList.remove('open');
        i.querySelector('.accordion__trigger').setAttribute('aria-expanded', 'false');
      });

      /* Toggle clicked item if it was closed */
      if (!isOpen) {
        item.classList.add('open');
        trigger.setAttribute('aria-expanded', 'true');
      }
    });
  }


  /* ----------------------------------------------------------------
     3. CONTACT FORM — validation + submission
  ---------------------------------------------------------------- */
  var form     = document.getElementById('contact-form');
  var feedback = document.getElementById('form-feedback');
  var submit   = document.getElementById('form-submit');

  if (!form || !feedback || !submit) return;

  /* Show a feedback message */
  function showFeedback(message, type) {
    feedback.textContent = message;
    feedback.className = 'form-feedback visible form-feedback--' + type;
  }

  /* Scroll the feedback panel into view */
  function scrollToFeedback() {
    feedback.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  /* Simple required-field check */
  function validate() {
    var name    = form.querySelector('#name').value.trim();
    var email   = form.querySelector('#email').value.trim();
    var message = form.querySelector('#message').value.trim();
    var emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!name)              return 'Please enter your full name.';
    if (!email)             return 'Please enter your email address.';
    if (!emailRe.test(email)) return 'That email address doesn\'t look right — please check it.';
    if (!message)           return 'Please write a message before sending.';
    return null;
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    var error = validate();
    if (error) {
      showFeedback(error, 'error');
      scrollToFeedback();
      return;
    }

    /* Loading state */
    submit.classList.add('btn--loading');
    submit.querySelector('.btn-label').textContent = 'Sending…';

    /* Build the payload */
    var data = new FormData(form);

    fetch('mailer_contact/send.php', {
      method: 'POST',
      body: data
    })
      .then(function (res) {
        return res.ok
          ? res.text()
          : Promise.reject(new Error('Server returned ' + res.status));
      })
      .then(function () {
        showFeedback(
          'Your message is on its way. We\'ll get back to you within one business day.',
          'success'
        );
        form.reset();
        /* Reset pills to default */
        if (pillGroup && hiddenType) {
          pillGroup.querySelectorAll('.inquiry-pill').forEach(function (p) {
            p.classList.remove('active');
            p.setAttribute('aria-pressed', 'false');
          });
          var first = pillGroup.querySelector('.inquiry-pill');
          if (first) {
            first.classList.add('active');
            first.setAttribute('aria-pressed', 'true');
            hiddenType.value = first.dataset.type || '';
          }
        }
        scrollToFeedback();
      })
      .catch(function () {
        showFeedback(
          'Something went wrong on our end. Please email us directly at info@sorwatom.com.',
          'error'
        );
        scrollToFeedback();
      })
      .finally(function () {
        submit.classList.remove('btn--loading');
        submit.querySelector('.btn-label').textContent = 'Send Message';
      });
  });
})();

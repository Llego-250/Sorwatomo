'use strict';

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contact-form');
  const feedback = document.getElementById('form-feedback');
  const submitBtn = document.getElementById('form-submit');
  const btnLabel = submitBtn?.querySelector('.btn-label');

  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    // Clear previous feedback
    feedback.className = 'form-feedback';
    feedback.textContent = '';

    // Basic validation
    const name = form.elements.name.value.trim();
    const email = form.elements.email.value.trim();
    const message = form.elements.message.value.trim();

    if (!name || !email || !message) {
      showFeedback('error', 'Please fill in all required fields.');
      return;
    }

    const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRe.test(email)) {
      showFeedback('error', 'Please enter a valid email address.');
      return;
    }

    // Loading state
    submitBtn.disabled = true;
    if (btnLabel) btnLabel.textContent = 'Sending…';

    try {
      const formData = new FormData(form);
      const response = await fetch('mailer_contact/send.php', {
        method: 'POST',
        body: formData,
      });

      const data = await response.json();

      if (data.success) {
        showFeedback('success', "Your message was sent. We’ll be in touch within one business day.");
        form.reset();
        document.querySelectorAll('.inquiry-pill').forEach((p, i) => p.classList.toggle('active', i === 0));
        const inquiryInput = document.getElementById('inquiry_type');
        if (inquiryInput) inquiryInput.value = 'distribution';
      } else {
        showFeedback('error', data.message || 'Something went wrong. Please try calling us directly.');
      }
    } catch {
      showFeedback('error', 'Could not connect. Please try again or call us directly.');
    } finally {
      submitBtn.disabled = false;
      if (btnLabel) btnLabel.textContent = 'Send Message';
    }
  });

  function showFeedback(type, message) {
    feedback.className = 'form-feedback form-feedback--' + type + ' visible';
    feedback.textContent = message;
    feedback.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }
});

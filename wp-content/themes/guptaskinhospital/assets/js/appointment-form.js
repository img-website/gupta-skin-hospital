(function($) {
    "use strict";

    // Handle Appointment Form Submission
    $(document).ready(function() {
        $('#appointmentForm').on('submit', function(e) {
            e.preventDefault();

            var form = $(this);
            var formData = new FormData(form[0]);
            
            if (typeof appointmentFormData === 'undefined') {
                showFormMessage(form, 'Configuration error. Please refresh the page.', true);
                return;
            }

            formData.append('action', 'schedule_call_form');
            formData.append('security', appointmentFormData.nonce);

            var submitBtn = form.find('button[type="submit"]');
            var originalHtml = submitBtn.html();
            submitBtn.prop('disabled', true);
            submitBtn.html('<span class="spinner"></span> Processing...');

            function doSubmit(token) {
                if (token) {
                    formData.append('g-recaptcha-response', token);
                }
                submitForm(form, formData, submitBtn, originalHtml);
            }

            // reCAPTCHA with timeout so form never hangs (e.g. wrong domain or script blocked on live)
            if (typeof getRecaptchaToken !== 'undefined') {
                var recaptchaTimeout = setTimeout(function() {
                    doSubmit('');
                }, 8000);
                var promise = getRecaptchaToken();
                if (promise && promise.then) {
                    promise.then(function(token) {
                        clearTimeout(recaptchaTimeout);
                        doSubmit(token || '');
                    }).catch(function() {
                        clearTimeout(recaptchaTimeout);
                        doSubmit('');
                    });
                } else {
                    clearTimeout(recaptchaTimeout);
                    doSubmit('');
                }
            } else {
                submitForm(form, formData, submitBtn, originalHtml);
            }
        });

        function showFormMessage(form, text, isError) {
            var msgDiv = form.find('#msgSubmit');
            msgDiv.removeClass('hidden h3 alert-success alert-danger').addClass(isError ? 'alert alert-danger' : 'alert alert-success').text(text);
        }

        function submitForm(form, formData, submitBtn, originalHtml) {
            $.ajax({
                url: appointmentFormData.ajax_url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                timeout: 30000,
                success: function(response) {
                    if (response && response.success) {
                        showFormMessage(form, response.data || 'Thank you! We will contact you shortly.', false);
                        form[0].reset();
                        setTimeout(function() {
                            form.find('#msgSubmit').addClass('hidden');
                        }, 5000);
                    } else {
                        var errMsg = (response && response.data) ? response.data : 'An error occurred. Please try again.';
                        showFormMessage(form, errMsg, true);
                    }
                },
                error: function(xhr, status, error) {
                    var msg = 'Unable to send. Please check your connection and try again.';
                    if (xhr.status === 403) msg = 'Security check failed. Please refresh the page and try again.';
                    else if (xhr.status === 500) msg = 'Server error. Please try again later.';
                    else if (xhr.responseText && xhr.responseText.length < 500) msg = xhr.responseText;
                    showFormMessage(form, msg, true);
                },
                complete: function() {
                    submitBtn.prop('disabled', false);
                    submitBtn.html(originalHtml);
                }
            });
        }
    });

})(jQuery);

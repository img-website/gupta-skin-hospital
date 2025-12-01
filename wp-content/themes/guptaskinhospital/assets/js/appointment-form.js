(function($) {
    "use strict";

    // Handle Appointment Form Submission
    $(document).ready(function() {
        $('#appointmentForm').on('submit', function(e) {
            e.preventDefault();

            var form = $(this);
            var formData = new FormData(form[0]);
            
            // Add security nonce
            formData.append('action', 'schedule_call_form');
            formData.append('security', appointmentFormData.nonce);

            // Disable submit button
            var submitBtn = form.find('button[type="submit"]');
            var originalText = submitBtn.find('.btn-text').text() || submitBtn.text();
            submitBtn.prop('disabled', true);
            submitBtn.html('<span class="spinner"></span> Processing...');

            // Get reCAPTCHA token if available
            if (typeof getRecaptchaToken !== 'undefined') {
                getRecaptchaToken().then(function(token) {
                    if (token) {
                        formData.append('g-recaptcha-response', token);
                    }
                    submitForm(form, formData, submitBtn, originalText);
                }).catch(function() {
                    // If reCAPTCHA fails, still try to submit
                    submitForm(form, formData, submitBtn, originalText);
                });
            } else {
                submitForm(form, formData, submitBtn, originalText);
            }
        });

        function submitForm(form, formData, submitBtn, originalText) {
            $.ajax({
                url: appointmentFormData.ajax_url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        // Show success message
                        var msgDiv = form.find('#msgSubmit');
                        msgDiv.removeClass('hidden').removeClass('h3').addClass('alert alert-success');
                        msgDiv.text(response.data);

                        // Reset form
                        form[0].reset();

                        // Hide message after 5 seconds
                        setTimeout(function() {
                            msgDiv.addClass('hidden');
                        }, 5000);
                    } else {
                        // Show error message
                        var msgDiv = form.find('#msgSubmit');
                        msgDiv.removeClass('hidden').removeClass('h3').addClass('alert alert-danger');
                        msgDiv.text(response.data || 'An error occurred. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    var msgDiv = form.find('#msgSubmit');
                    msgDiv.removeClass('hidden').removeClass('h3').addClass('alert alert-danger');
                    msgDiv.text('An error occurred. Please try again later.');
                    console.error('AJAX Error:', error);
                },
                complete: function() {
                    // Re-enable submit button
                    submitBtn.prop('disabled', false);
                    submitBtn.html(originalText);
                }
            });
        }
    });

})(jQuery);

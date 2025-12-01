/* Helper for handling invisible reCAPTCHA v2 token retrieval
   - Exposes `getRecaptchaToken()` which returns a Promise resolving to token string.
   - If site key is not configured, resolves to an empty string.
*/
(function(window, document){
    'use strict';

    var siteKey = (window.edooviRecaptcha && window.edooviRecaptcha.site_key) ? window.edooviRecaptcha.site_key : '';
    var widgetId = null;
    var ready = false;
    var pendingResolvers = [];

    function ensureGreCaptchaRendered() {
        return new Promise(function(resolve) {
            if (!siteKey) {
                resolve(null);
                return;
            }

            if (typeof grecaptcha !== 'undefined' && grecaptcha.render && widgetId !== null) {
                resolve(widgetId);
                return;
            }

            // wait for grecaptcha to become available
            var checkCount = 0;
            var checkInterval = setInterval(function(){
                checkCount++;
                if (typeof grecaptcha !== 'undefined' && grecaptcha.render) {
                    clearInterval(checkInterval);

                    // create a hidden container
                    var containerId = 'edoovi-recaptcha-container';
                    var container = document.getElementById(containerId);
                    if (!container) {
                        container = document.createElement('div');
                        container.id = containerId;
                        container.style.display = 'none';
                        document.body.appendChild(container);
                    }

                    // render invisible widget
                    try {
                        widgetId = grecaptcha.render(containerId, {
                            'sitekey': siteKey,
                            'size': 'invisible',
                            'callback': function(token) {
                                // resolve all pending resolvers
                                while (pendingResolvers.length) {
                                    var r = pendingResolvers.shift();
                                    try { r.resolve(token); } catch(e){}
                                }
                            }
                        });
                    } catch(e) {
                        // if render fails, resolve with null
                        while (pendingResolvers.length) {
                            var r2 = pendingResolvers.shift();
                            try { r2.resolve(''); } catch(e){}
                        }
                    }

                    resolve(widgetId);
                } else if (checkCount > 60) {
                    // timeout after ~6s
                    clearInterval(checkInterval);
                    resolve(null);
                }
            }, 100);
        });
    }

    // Public: returns Promise resolving to token string (or empty string when not configured)
    function getRecaptchaToken() {
        return new Promise(function(resolve, reject){
            if (!siteKey) {
                resolve('');
                return;
            }

            ensureGreCaptchaRendered().then(function(wid){
                if (!wid && typeof grecaptcha === 'undefined') {
                    // grecaptcha not available
                    resolve('');
                    return;
                }

                // If widget id ready, execute and push resolver
                var resolver = { resolve: resolve, reject: reject };
                pendingResolvers.push(resolver);

                try {
                    grecaptcha.execute(wid);
                } catch(e) {
                    // fallback: if execute fails, resolve empty
                    // clear pending and resolve
                    while (pendingResolvers.length) {
                        var r3 = pendingResolvers.shift();
                        try { r3.resolve(''); } catch(e){}
                    }
                }
            }).catch(function(){ resolve(''); });
        });
    }

    // Export
    window.getRecaptchaToken = getRecaptchaToken;

})(window, document);

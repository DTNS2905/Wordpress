document.addEventListener('DOMContentLoaded', function() {
    var groundwpNotice = document.querySelector('.groundwp-admin-notice');

    if (groundwpNotice) {
        groundwpNotice.addEventListener('click', function(event) {
            if (event.target.classList.contains('notice-dismiss')) {
                var xhr = new XMLHttpRequest();
                var data = new FormData();
                data.append('action', 'groundwp_dismiss_notice');
                data.append('security', groundwp_ajax.nonce);

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            groundwpNotice.style.display = 'none'; // Hide the notice on successful response
                            console.log(JSON.parse(xhr.responseText));
                        } else {
                            console.error('Error: ' + xhr.status);
                        }
                    }
                };

                xhr.open('POST', groundwp_ajax.ajax_url, true);
                xhr.send(data);
            }
        });
    }
});

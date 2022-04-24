$(function() {
    checkIfRunning();

    loadUsers();

    function checkIfRunning() {
        $.get('is_running.php', function(data) {
            if(data.running) {
                $('#status').addClass('running');
            } else {
                $('#status').removeClass('running');
            }

            setTimeout(checkIfRunning, 5000);
        });
    }

    function loadUsers() {
        $.get('get_users.php', function(data) {
            let $usersTable = $('#users table');

            $usersTable.empty();

            data.forEach(user => {
                let shift = (user.shift === '1') ? 'Day' : 'Night';
                let notificationsOn = (user.notifications_on === '1') ? ' class="notifications-on"' : '';

                const $tr = $(`<tr${notificationsOn} data-user-id="${user.id}"><td>${user.name}</td><td>${shift}</td><td></td></tr>`);

                $tr.click(function() {
                    addUser(
                        user.id,
                        user.name,
                        user.shift,
                        user.phone,
                        user.carrier_id,
                        user.notifications_on === '1'
                    );
                });

                $usersTable.append($tr);
            });
        });
    }

    function addUser(
        userId = null,
        name = null,
        shift = null,
        phone = null,
        carrier = null,
        notificationsOn = false
    ) {
        $('.wrapper').addClass('show-user-details');

        if(userId !== null) {
            $('#delete-user').show();
        } else {
            $('#delete-user').hide();
        }

        $('#user-details input[name=name]').val(name);
        $('#user-details select[name=shift]').val(shift);
        $('#user-details input[name=phone]').val(phone);
        $('#user-details select[name=carrier]').val(carrier);
        $('#user-details input[name=notifications]').prop('checked', notificationsOn);

        $('#delete-user').off('click').click(function() {
            deleteUser(userId);
        });

        $('#save-user').off('click').click(function() {
            let name = $('#user-details input[name=name]').val();
            let shift = $('#user-details select[name=shift]').val();
            let phone = $('#user-details input[name=phone]').val();
            let carrier = $('#user-details select[name=carrier]').val();
            let notificationsOn = $('#user-details input[name=notifications]').is(':checked');

            saveUser(userId, name, shift, phone, carrier, notificationsOn);
        });
    }

    function saveUser(
        userId,
        name,
        shift,
        phone,
        carrier,
        notificationsOn
    ) {
        $.get('update_user.php',
            {
                id: userId,
                name: name,
                shift: shift,
                phone: phone,
                carrier_id: carrier,
                notifications_on: notificationsOn
            },
            function(data) {
                $('.wrapper').removeClass('show-user-details');

                if(userId) {
                    showToast('User updated!', 'success');
                } else {
                    showToast('User added!', 'success');
                }

                loadUsers();
            }
        );
    }

    function deleteUser(userId) {
        $.get('delete_user.php', {id: userId}, function(data) {
            $('.wrapper').removeClass('show-user-details');

            showToast('User deleted!', 'success');

            loadUsers();
        });
    }

    function showToast(message, type = 'info') {
        if(!['success', 'error', 'info', 'warning'].includes(type)) {
            type = 'info';
        }
        const $toast = $(`<div class="toast ${type}"><div class="toast-message">${message}</div><div class="toast-close"></div></div>`);

        $('.wrapper').append($toast);
    }

    $('#copy-to-clipboard').click(function() {
        navigator.clipboard.writeText(`function updateLanes(){const t=document.getElementsByTagName("tspan"),e=/reqDestStatus-(FL\d{3}):LANE_FULL:\s+(\d+)/,n={};for(tspan of t){const t=tspan.textContent.match(e);t&&3===t.length&&(n[t[1]]=t[2])}const a=new XMLHttpRequest,s=new URLSearchParams(n);a.open("GET","http://localhost/recirc/update_lanes.php?"+s),a.send(),setTimeout(updateLanes,6e4)}updateLanes();`);
        // navigator.clipboard.writeText(`function updateLanes(){const e=document.getElementsByTagName("tspan"),t=/reqDestStatus-(FL\d{3}):LANE_FULL:\s+(\d+)/,n={};for(tspan of e){const e=tspan.textContent.match(t);e&&3===e.length&&(n[e[1]]=e[2])}const s=new XMLHttpRequest,a=new URLSearchParams(n);s.open("GET","https://brentonsaunders.me/recirc/update_lanes.php?"+a),s.send(),setTimeout(updateLanes,6e4)}updateLanes();`);

        showToast('Copied to clipboard');
    });

    $('#back-button').click(function() {
        $('.wrapper').removeClass('show-user-details');
    });

    $('#add-user').click(function() {
        addUser();
    });

    $('#stop').click(function() {
        $.get('stop.php', function() {
            checkIfRunning();
        });
    });

    $('#user-details input[name=phone]').on('input', function() {
        /*
        let val = $(this).val();

        val = val.replace(/\D/g, '');

        $(this).val(val.slice(0, 3) + '-' + val.slice(3, 6) + '-' + val.slice(6));*/
    });
});

/*
// https://brentonsaunders.me/recirc/update_lanes.php
function updateLanes() {
    const tspans = document.getElementsByTagName('tspan');

    const regexp = /reqDestStatus-(FL\d{3}):LANE_FULL:\s+(\d+)/;
    const lanes = {};
    
    for(tspan of tspans) {
        const match = tspan.textContent.match(regexp);

        if(match && match.length === 3) {
            lanes[match[1]] = match[2];
        }
    }

    const xhttp = new XMLHttpRequest();

    const qs = new URLSearchParams(lanes);

    xhttp.open('GET', 'http://localhost/recirc/update_lanes.php?' + qs);
    xhttp.send();

    setTimeout(updateLanes, 60000);
}

updateLanes();
*/
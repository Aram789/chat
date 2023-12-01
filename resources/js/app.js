import './bootstrap';

import $ from 'jquery';
import axios from "axios";

$(document).ready(function () {

    $('.send').click(async function () {
        let selector = $('.message');
        if (selector.val()) {
            try {
                const response = await axios.post(window.home, {
                    content: selector.val(),
                    user_id:  window.userId,
                });

                const chatMessage = response.data;
                selector.val('');

                $('.message_field').append(chatMessage + ' ' + new Date().toLocaleTimeString() + ' ' + window.user + '\n');
            } catch (error) {
                console.error('Error:', error);
            }
        }

    });
    $('.message').on('input', function () {
        let selector = $('.form-group');
        selector.children('.alert-danger').remove();
        if (!$(this).val().trim()) {
            selector.prepend('<div class="alert alert-danger" role="alert">The content field is required</div>');
        }
    });
})




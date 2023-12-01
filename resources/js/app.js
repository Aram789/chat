import './bootstrap';

import $ from 'jquery';
import axios from "axios";

$(document).ready(function () {

    $('.send').click(async function () {
        let selector = $('.message');
        if(selector.val()){
            try {
                const response = await axios.post(window.home, {
                    message: selector.val()
                });

                const chatMessage = response.data;

                selector.val('');

                $('.message_field').append(chatMessage + ' ' + new Date().toLocaleTimeString() + ' ' + window.user + '\n');
            } catch (error) {
                console.error('Error:', error);
            }
        }

        $('.alert-danger').removeClass('fade').text("The message field required")
    });
})




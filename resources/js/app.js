require('./bootstrap');

import '@popperjs/core';
import 'bootstrap';

import { tns } from 'tiny-slider';

window.addEventListener('DOMContentLoaded', (event) => {

    const mainCarousel = document.getElementById('mainCarousel'),
        customerCarousel = document.getElementById('customerCarousel');

    if (mainCarousel) {
        const sliderMain = tns({
            container: mainCarousel,
            items: 1,
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            controlsText: ['<', '>'],
        });
    }

    if (customerCarousel) {
        const sliderCustomer = tns({
            container: customerCarousel,
            gutter: 20,
            controls: false,
            items: 1,
            responsive: {
                "576": {
                    items: 2,
                    controls: true
                },
                "768": {
                    items: 3
                },
                "992": {
                    items: 4
                }
            },
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            controlsText: ['<', '>'],
        });
    }

});

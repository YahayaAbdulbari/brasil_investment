           'use strict';

            const boxses = document.querySelectorAll('section');

            const obseever = new IntersectionObserver(entries => {

                entries.forEach(entry => {
                    entry.target.classList.toggle('visible', entry.isIntersecting);
                })

            },{
                threshold: 0.3,
            })



            boxses.forEach(box => {
                obseever.observe(box);
            })
   'use strict';



            // const investment_plans = document.querySelectorAll('.observe');

            // const investment_plan_obseever = new IntersectionObserver(plans => {

            //     plans.forEach(plan => {
            //         plan.target.classList.toggle('animate', entry.isIntersecting);
            //     })

            // },{
            //     threshold: 0.4,
            // })

            // investment_plans.forEach(plan => {
            //     obseever.observe(plan);
            // })


            const boxses = document.querySelectorAll('sections');

            const obseever = new IntersectionObserver(entries => {

                entries.forEach(entry => {
                    entry.target.classList.toggle('visible', entry.isIntersecting);
                })

            },{
                threshold: 0.4,
            })



            boxses.forEach(box => {
                obseever.observe(box);
            })
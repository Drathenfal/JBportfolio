// banner animation

        // Text to animate
        const textToAnimate = "Coding Examples";

        // Get the text container element
        const textContainer = document.querySelector('.text-container');

        let index = 0;

        function animateText() {
            textContainer.textContent = textToAnimate.slice(0, index);
            index++;

            if (index <= textToAnimate.length) {
                setTimeout(animateText, 200); // Adjust the speed (in milliseconds) of typing
            }
        }

        // Start the animation
        animateText();
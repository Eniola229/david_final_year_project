document.addEventListener('DOMContentLoaded', function() {
    // Select all the plus buttons
    const plusButtons = document.querySelectorAll('.announcements li button');

    // Add click event listeners to all plus buttons
    plusButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Toggle the display of the more-info section
            const moreInfo = this.nextElementSibling;
            if (moreInfo.style.display === 'block') {
                moreInfo.style.display = 'none';
                this.textContent = '+';
            } else {
                moreInfo.style.display = 'block';
                this.textContent = '-';
            }
        });
    });
});

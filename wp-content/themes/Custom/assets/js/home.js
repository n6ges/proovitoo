

// Add class
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-loaded');
});

// Function for Eye movement
document.addEventListener('DOMContentLoaded', function () {
    const eye = document.querySelector('#eye');
    const area = document.querySelector('.bigeye');

    if (!eye || !area) return;

    const maxOffset = 40; // max px movement

    document.addEventListener('mousemove', function (e) {
        const rect = area.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;

        const relX = e.clientX - centerX;
        const relY = e.clientY - centerY;

        const normX = Math.max(-1, Math.min(1, relX / (rect.width / 2)));
        const normY = Math.max(-1, Math.min(1, relY / (rect.height / 2)));

        const dx = normX * maxOffset;
        const dy = normY * maxOffset;

        // translate only the eyeball path
        eye.style.transform = `translate(${dx}px, ${dy}px)`;
    });

    document.addEventListener('mouseleave', function () {
        eye.style.transform = 'translate(0px, 0px)';
    });
});


// Function to conditionally display text
document.addEventListener("DOMContentLoaded", function () {
    const beforeDiv = document.getElementById("before-submit");
    const afterDiv  = document.getElementById("after-submit");

    // Initial state
    beforeDiv.style.display = "block";
    afterDiv.style.display = "none";

    function showAfterSubmit() {
        beforeDiv.style.display = "none";
        afterDiv.style.display = "flex";
    }

    // Event for most Ninja Forms versions
    document.addEventListener('nfFormSubmitResponse', showAfterSubmit);

    // Backup event
    document.addEventListener('nfFormSubmit', showAfterSubmit);

    // Final fallback
    const observer = new MutationObserver(() => {
        if (document.querySelector('.nf-response-msg')?.textContent.length > 0) {
            showAfterSubmit();
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
});


// Open pop-up
document.addEventListener("click", function(e) {
    if (e.target.id === "nf-label-field-5") {

        // prevent toggling the checkbox
        e.preventDefault();

        document.getElementById("myPopup").style.display = "flex";
    }
});

// Close when clicking the X
document.getElementById("closePopup").addEventListener("click", function() {
    document.getElementById("myPopup").style.display = "none";
});

// Close when clicking outside the popup content
document.addEventListener("click", function(e) {
    const popup = document.getElementById("myPopup");
    const content = document.querySelector(".popup-content");

// if popup is open AND click target is the popup background (not the content), close it
    if (e.target === popup) {
        popup.style.display = "none";
    }
});



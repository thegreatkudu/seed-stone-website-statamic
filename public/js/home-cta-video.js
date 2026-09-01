(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", function () {
        const iframe = document.getElementById("ctaBgVideoFrame");
        if (!iframe) return;

        let revealed = false;

        function revealSound() {
            if (revealed) return;
            revealed = true;

            iframe.src =
                "https://www.youtube.com/embed/R45KmBrn0fU?autoplay=1&mute=0&loop=1&playlist=R45KmBrn0fU&controls=0&showinfo=0&rel=0&modestbranding=1&playsinline=1&iv_load_policy=3";

            events.forEach(function (event) {
                document.removeEventListener(event, revealSound);
            });
        }

        const events = ["click", "touchstart"];
        events.forEach(function (event) {
            document.addEventListener(event, revealSound, { passive: true });
        });
    });
})();

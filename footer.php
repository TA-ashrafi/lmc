<?php wp_footer(); ?>

<script>
    // 1. Loader Animation Logic
    window.addEventListener("load", function() {
        const loader = document.getElementById("custom-loader");
        if(loader) {
            setTimeout(() => {
                loader.style.opacity = "0";
                loader.style.visibility = "hidden";
            }, 1500); 
        }
    });

    // 2. Interactive Circle Logic
    function toggleCircle(clickedBtn) {
        const allBtns = document.querySelectorAll('.circle-btn');
        const isActive = clickedBtn.classList.contains('active');

        // Pehle sabko band karo
        allBtns.forEach(btn => {
            btn.classList.remove('active');
        });

        // Agar pehle se active nahi tha, toh active karo
        if (!isActive) {
            clickedBtn.classList.add('active');
        }
    }
</script>

</body>
</html>
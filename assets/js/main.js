/**
 * Lemon Media Theme Interactive Logic
 * GSAP + ScrollTrigger + Lenis Smooth Scroll + Cursor + Filtering
 *
 * @package LemonMedia
 */

document.addEventListener("DOMContentLoaded", function () {
    // -------------------------------------------------------------
    // 1. LENIS SMOOTH SCROLL INITIALIZATION
    // -------------------------------------------------------------
    let lenis = null;
    if (typeof Lenis !== "undefined") {
        lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: "vertical",
            gestureOrientation: "vertical",
            smoothWheel: true,
            wheelMultiplier: 1,
            touchMultiplier: 2,
            infinite: false,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Connect Lenis to GSAP ScrollTrigger if present
        if (typeof ScrollTrigger !== "undefined") {
            lenis.on("scroll", ScrollTrigger.update);
            gsap.ticker.add((time) => {
                lenis.raf(time * 1000);
            });
            gsap.ticker.lagSmoothing(0);
        }
    }

    // -------------------------------------------------------------
    // 2. PRELOADER ANIMATION WITH PROGRESS COUNTER
    // -------------------------------------------------------------
    const loader = document.getElementById("custom-loader");
    const loaderPercent = document.getElementById("loader-percent");
    const loaderBarFill = document.getElementById("loader-bar-fill");

    if (loader && loaderPercent && loaderBarFill) {
        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.floor(Math.random() * 15) + 10;
            if (progress >= 100) {
                progress = 100;
                clearInterval(interval);
                loaderPercent.textContent = progress;
                loaderBarFill.style.width = "100%";

                setTimeout(() => {
                    loader.classList.add("hidden");
                    animateHeroReveal();
                }, 400);
            } else {
                loaderPercent.textContent = progress;
                loaderBarFill.style.width = progress + "%";
            }
        }, 50);
    } else if (loader) {
        loader.classList.add("hidden");
    }

    // -------------------------------------------------------------
    // 3. CUSTOM INTERACTIVE FLUID CURSOR
    // -------------------------------------------------------------
    const cursor = document.getElementById("custom-cursor");
    const cursorLabel = document.getElementById("cursor-label");

    if (cursor) {
        let mouseX = window.innerWidth / 2;
        let mouseY = window.innerHeight / 2;
        let cursorX = mouseX;
        let cursorY = mouseY;

        window.addEventListener("mousemove", (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        function renderCursor() {
            cursorX += (mouseX - cursorX) * 0.18;
            cursorY += (mouseY - cursorY) * 0.18;
            cursor.style.transform = `translate(${cursorX}px, ${cursorY}px)`;
            requestAnimationFrame(renderCursor);
        }
        requestAnimationFrame(renderCursor);

        // Hover elements interaction
        const interactiveElements = document.querySelectorAll(
            "a, button, .service-card, .work-card, .pill-checkbox, .press-item, [data-cursor]"
        );

        interactiveElements.forEach((el) => {
            el.addEventListener("mouseenter", () => {
                cursor.classList.add("hovering");
                const label = el.getAttribute("data-cursor-label");
                if (label && cursorLabel) {
                    cursorLabel.textContent = label;
                } else if (cursorLabel) {
                    cursorLabel.textContent = "VIEW";
                }
            });

            el.addEventListener("mouseleave", () => {
                cursor.classList.remove("hovering");
            });
        });
    }

    // -------------------------------------------------------------
    // 4. GSAP & SCROLLTRIGGER HERO REVEAL ANIMATION
    // -------------------------------------------------------------
    function animateHeroReveal() {
        if (typeof gsap === "undefined") return;

        const tl = gsap.timeline();

        tl.from(".site-header", {
            y: -50,
            opacity: 0,
            duration: 0.8,
            ease: "power3.out",
        })
            .from(
                ".hero-badge-row .hero-badge",
                {
                    opacity: 0,
                    y: 20,
                    stagger: 0.1,
                    duration: 0.6,
                    ease: "power2.out",
                },
                "-=0.4"
            )
            .from(
                ".hero-title .title-row",
                {
                    opacity: 0,
                    y: 40,
                    stagger: 0.15,
                    duration: 0.9,
                    ease: "power3.out",
                },
                "-=0.4"
            )
            .from(
                ".hero-subtitle-block",
                {
                    opacity: 0,
                    y: 30,
                    duration: 0.8,
                    ease: "power2.out",
                },
                "-=0.5"
            );
    }

    // -------------------------------------------------------------
    // 5. METRIC NUMBER COUNTERS ANIMATION ON SCROLL
    // -------------------------------------------------------------
    const metricNumbers = document.querySelectorAll(".metric-number");

    if (metricNumbers.length > 0) {
        const observerOptions = {
            threshold: 0.4,
        };

        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.getAttribute("data-target"), 10);
                    let count = 0;
                    const speed = Math.max(1, Math.floor(target / 40));

                    const timer = setInterval(() => {
                        count += speed;
                        if (count >= target) {
                            el.textContent = target;
                            clearInterval(timer);
                        } else {
                            el.textContent = count;
                        }
                    }, 30);

                    observer.unobserve(el);
                }
            });
        }, observerOptions);

        metricNumbers.forEach((num) => counterObserver.observe(num));
    }

    // -------------------------------------------------------------
    // 6. PORTFOLIO WORK FILTERING
    // -------------------------------------------------------------
    const filterButtons = document.querySelectorAll(".filter-btn");
    const workCards = document.querySelectorAll(".work-card");

    if (filterButtons.length > 0 && workCards.length > 0) {
        filterButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                filterButtons.forEach((b) => b.classList.remove("active"));
                btn.classList.add("active");

                const filter = btn.getAttribute("data-filter");

                workCards.forEach((card) => {
                    const category = card.getAttribute("data-category");
                    if (filter === "all" || category === filter) {
                        card.style.display = "flex";
                        if (typeof gsap !== "undefined") {
                            gsap.fromTo(
                                card,
                                { opacity: 0, y: 20 },
                                { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" }
                            );
                        } else {
                            card.style.opacity = "1";
                        }
                    } else {
                        card.style.display = "none";
                    }
                });
            });
        });
    }

    // -------------------------------------------------------------
    // 7. MOBILE MENU DRAWER TOGGLE
    // -------------------------------------------------------------
    const mobileMenuTrigger = document.getElementById("mobileMenuTrigger");
    const mobileDrawer = document.getElementById("mobileDrawer");
    const drawerClose = document.getElementById("drawerClose");
    const drawerLinks = document.querySelectorAll(".drawer-link");

    if (mobileMenuTrigger && mobileDrawer) {
        mobileMenuTrigger.addEventListener("click", () => {
            mobileDrawer.classList.toggle("open");
        });

        if (drawerClose) {
            drawerClose.addEventListener("click", () => {
                mobileDrawer.classList.remove("open");
            });
        }

        drawerLinks.forEach((link) => {
            link.addEventListener("click", () => {
                mobileDrawer.classList.remove("open");
            });
        });
    }

    // -------------------------------------------------------------
    // 8. BACK TO TOP BUTTON
    // -------------------------------------------------------------
    const backToTop = document.getElementById("backToTop");
    if (backToTop) {
        backToTop.addEventListener("click", (e) => {
            e.preventDefault();
            if (lenis) {
                lenis.scrollTo(0);
            } else {
                window.scrollTo({ top: 0, behavior: "smooth" });
            }
        });
    }

    // -------------------------------------------------------------
    // 9. HEADER SCROLL HIDE/SHOW LOGIC
    // -------------------------------------------------------------
    let lastScrollY = window.scrollY;
    const siteHeader = document.getElementById("siteHeader");

    window.addEventListener("scroll", () => {
        const currentScrollY = window.scrollY;
        if (siteHeader) {
            if (currentScrollY > 100 && currentScrollY > lastScrollY) {
                siteHeader.style.transform = "translateY(-120%)";
            } else {
                siteHeader.style.transform = "translateY(0)";
            }
        }
        lastScrollY = currentScrollY;
    });

    // -------------------------------------------------------------
    // 10. STUDIO AMBIENT SOUND/VIBE TOGGLE
    // -------------------------------------------------------------
    const soundToggle = document.getElementById("soundToggle");
    if (soundToggle) {
        soundToggle.addEventListener("click", () => {
            soundToggle.classList.toggle("active");
            const label = soundToggle.querySelector(".pill-label");
            if (label) {
                label.textContent = soundToggle.classList.contains("active")
                    ? "STUDIO MODE [ON]"
                    : "STUDIO MODE";
            }
        });
    }
});

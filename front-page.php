<?php get_header(); ?>

<!-- HERO SECTION -->
<main class="hero-brutalist">
    <div class="hero-content">
        <h1 class="main-title">
            FOR BRANDS <br>
            
            <span class="middle-row">
                <span class="bracket">(</span>
                <span class="editorial-text">Do Things <span class="arrow">→</span> That<br>Change Things <span class="star">✳</span></span>
                <span class="bracket">)</span>N A
            </span> <br>
            
            MISSION
        </h1>
        
        <div class="side-text">
            HOPEFUL MONSTERS.
        </div>
    </div>

    <div class="bottom-arrow">
        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 4V20M12 20L20 12M12 20L4 12" stroke="black" stroke-width="4" stroke-linecap="square"/>
        </svg>
    </div>

    <div class="corner-text bottom-left">HOPEFUL MONSTERS</div>
    <div class="corner-text bottom-right">DO THINGS THAT CHANGE THINGS</div>
</main>

<!-- INTERACTIVE SECTION -->
<section class="interactive-section">
    
    <div class="interactive-text">
        <h2>Brands built,<br><span class="italic-serif">just for you</span></h2>
        <p>We only do what we're good at and that's pretty much everything you'll ever need. And with us, you can:</p>
    </div>

    <div class="interactive-graphic">
        
        <!-- SVG Lines: Graph jaisa curve -->
        <svg class="connecting-lines" viewBox="0 0 1000 600" preserveAspectRatio="none">
            <!-- Niche wali line (Revenue se Impression) -->
            <path d="M 0 400 Q 300 500 600 350 T 1050 200" fill="none" stroke="#222" stroke-width="1.5" opacity="0.6"/>
            
            <!-- Upar wali line (Impression se Reach) -->
            <path d="M 600 350 L 850 150" fill="none" stroke="#222" stroke-width="1.5" opacity="0.6"/>
        </svg>

        <div class="circles-container">
            
            <!-- 1. Impression (Sabse Bada - Right Niche) -->
            <div class="circle-group pos-impression">
                <div class="circle-btn circle-large">
                    <div class="circle-content">
                        <span class="small-label">LEAVE A LASTING</span>
                        <span class="big-label">Impression</span>
                    </div>
                </div>
            </div>

            <!-- 2. Reach (Medium - Center) -->
            <div class="circle-group pos-reach">
                <div class="circle-btn circle-medium">
                    <span class="plus-icon">+</span>
                </div>
            </div>

            <!-- 3. Revenue (Small - Left) -->
            <div class="circle-group pos-revenue">
                <div class="circle-btn circle-small">
                    <span class="plus-icon">+</span>
                </div>
            </div>

            <!-- Chota Dot (Bina click ke) -->
            <div class="small-dot"></div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
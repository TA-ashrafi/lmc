document.addEventListener("DOMContentLoaded", function() {
    const cards = [
        `<div style="inset:0;background:#e9d9c6"></div><div class="t" style="left:8%;top:8%;font-size:28px;color:#222">2026</div><div style="left:55%;top:12%;width:35%;height:70%;background:linear-gradient(#b9a089,#6d5a4a)"></div>`,
        `<div style="inset:0;background:linear-gradient(135deg,#ef6aa8,#c93a86)"></div><div class="t" style="left:8%;bottom:10%;font-size:24px;color:#fff">NOVAGLAM<br>FASHION</div>`,
        `<div style="inset:0;background:#fff"></div><div style="left:8%;top:12%;width:38%;height:30%;background:#9a8f86"></div><div style="left:30%;top:46%;width:40%;height:28%;background:#555"></div><div style="left:52%;top:70%;width:24%;height:22%;background:#e8501f"></div>`,
        `<div style="inset:0;background:#5a2e22"></div><div style="right:0;top:0;width:55%;height:100%;background:linear-gradient(#9b6b4c,#2a1a14)"></div><div class="t" style="left:7%;top:34%;font-size:38px;color:#fff">SWANK®</div>`,
        `<div style="inset:0;background:#f1f1f1"></div><div class="t" style="left:7%;top:10%;font-size:20px;color:#111">Building the<br>future of music</div><div style="left:30%;top:42%;width:30%;height:52%;background:linear-gradient(#ff7a2f,#d93a0c);border-radius:14px"></div>`,
        `<div style="inset:0;background:linear-gradient(120deg,#222,#777)"></div><div style="left:8%;top:10%;width:62%;height:80%;background:#f4f4f4;border-radius:4px"></div><div style="left:14%;top:20%;width:14%;height:58%;background:#1c1c1c;border-radius:20px"></div>`,
        `<div style="inset:0;background:#cbbfb9"></div><div style="right:8%;top:8%;width:36%;height:84%;background:linear-gradient(#e9dfd6,#8e7e74)"></div><div class="t" style="left:8%;top:38%;font-size:20px;color:#fff">WE BRING<br>IMAGINATION</div>`,
        `<div style="inset:0;background:#f2f7f4"></div><div style="left:30%;top:14%;width:30%;height:52%;background:linear-gradient(#ff6a1a,#d84000)"></div><div class="t" style="right:6%;top:12%;font-size:24px;color:#111;text-align:right">LOOSE<br>SKETCHES</div>`,
        `<div style="inset:0;background:linear-gradient(135deg,#4d5a63,#9fb3be 60%,#e8e2da)"></div><div style="left:30%;top:30%;width:30%;height:50%;background:#d6cbbf"></div><div class="t" style="left:7%;top:10%;font-size:22px;color:#fff">DESIGNED FOR<br>EVERY NOTE</div>`,
        `<div style="inset:0;background:#f4f4f4"></div><div style="left:0;top:0;width:100%;height:50%;background:linear-gradient(#bbb,#555)"></div><div style="left:30%;top:20%;width:38%;height:55%;background:#fff"></div><div style="left:38%;top:28%;width:22%;height:38%;background:#1d1d1d;border-radius:50%"></div>`
    ];

    const helix = document.getElementById('helix');
    const track = document.getElementById('track');
    const w1 = document.getElementById('w1');
    const w2 = document.getElementById('w2');
    
    if(!helix) return; 

    const N = cards.length * 2; 
    const STEP = 14; // Gap kam kiya (pehle 26 tha)
    const RISE = 30; 

    cards.concat(cards).forEach((h, i) => {
        const c = document.createElement('div');
        c.className = 'card';
        c.innerHTML = `<div class="f">${h}</div><div class="b">${h}</div>`;
        helix.appendChild(c);
    });
    
    let R, cw, ch;
    function size() {
        // Card size chota kiya (max 300px)
        cw = Math.max(140, Math.min(300, innerWidth * 0.18)); 
        ch = cw * 0.7; // Thoda wide ratio
        R = cw * 4; // Radius thoda badhaya taaki circle bada lage
        
        document.querySelectorAll('.card').forEach((c, i) => {
            c.style.setProperty('--w', cw + 'px');
            c.style.setProperty('--h', ch + 'px');
            // Continuous ribbon ke liye transform
            c.style.transform = `rotateY(${i * STEP}deg) translateY(${-i * RISE * cw / 300}px) translateZ(${R}px)`;
        });
    }
    
    size();
    window.addEventListener('resize', size);
    
    let cur = -0.1, target = 0;
    const cs = [...document.querySelectorAll('.card')];
    
    function onScroll() {
        const m = track.offsetHeight - innerHeight;
        target = Math.min(1, Math.max(0, scrollY / m));
    }
    
    window.addEventListener('scroll', onScroll);
    onScroll();
    
    function tick() {
        // Smooth lerp
        cur += (target - cur) * 0.05; 
        
        const span = N - 5; // Cards ki flow length
        const rot = cur * span * STEP;
        const up = cur * span * RISE * cw / 300;
        
        // Helix Movement
        helix.style.transform = `translateY(${up + ch}px) translateZ(${-R}px) rotateY(${-rot}deg)`;
        
        // Text Left-Right Movement
        const dx = innerWidth * (cur * 0.8);
        w1.style.transform = `translateX(${dx}px)`;
        w2.style.transform = `translateX(${-dx}px)`;
        
        // Opacity fade for back cards
        cs.forEach((c, i) => {
            const a = (i * STEP - rot) * Math.PI / 180;
            c.style.opacity = (0.4 + 0.6 * (Math.cos(a) + 1) / 2).toFixed(2);
        });
        
        requestAnimationFrame(tick);
    }
    
    tick();
});
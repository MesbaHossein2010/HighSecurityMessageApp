<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSMA | High Security Message App</title>
    <style>
        *{box-sizing:border-box;margin:0;padding:0;font-family:'Poppins',sans-serif;scroll-behavior:smooth}body{background:#ffffff;color:#111827;overflow-x:hidden}a{text-decoration:none}/* Nav */.top-nav{position:fixed;top:0;left:0;width:100%;background:#fff;display:flex;justify-content:space-between;align-items:center;padding:10px 50px;box-shadow:0 4px 15px rgba(0,0,0,0.1);z-index:999} .top-nav .nav-links{display:flex;gap:25px} .top-nav .nav-links a{color:#111827;font-weight:500;position:relative;transition:all 0.3s ease} .top-nav .nav-links a.active::after{content:'';position:absolute;bottom:-5px;left:0;width:100%;height:2px;background:#4f46e5;border-radius:2px} .top-nav .auth-buttons a{padding:6px 15px;border-radius:50px;font-weight:500;margin-left:10px;transition:all 0.3s ease} .top-nav .auth-buttons a.login{background:transparent;color:#4f46e5;border:2px solid #4f46e5} .top-nav .auth-buttons a.register{background:#4f46e5;color:#fff} .top-nav .auth-buttons a:hover{transform:translateY(-3px) scale(1.05);box-shadow:0 8px 20px rgba(79,70,229,0.5)} /* Intro */ .intro-container{display:flex;flex-direction:column;justify-content:center;align-items:center;height:100vh;text-align:center;padding:20px;position:relative;overflow:hidden} h1{font-size:3rem;margin-bottom:1rem;background:linear-gradient(135deg,#4f46e5,#6366f1,#f97316,#facc15);-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:fadeInDown 1s ease forwards;opacity:0}.typed-text{font-size:1.5rem;font-weight:500;height:2rem;margin-bottom:2rem;color:#374151;opacity:0}.btn{display:inline-block;padding:0.75rem 2rem;background-color:#4f46e5;color:#fff;font-weight:600;border-radius:50px;transition:all 0.3s ease;box-shadow:0 4px 15px rgba(0,0,0,0.15);opacity:0;animation:fadeInUp 1s ease 1s forwards} .btn:hover{transform:translateY(-5px) scale(1.05);box-shadow:0 8px 25px rgba(79,70,229,0.6);text-shadow:0 0 8px #4f46e5} @keyframes fadeInDown{0%{transform:translateY(-50px);opacity:0}100%{transform:translateY(0);opacity:1}}@keyframes fadeInUp{0%{transform:translateY(50px);opacity:0}100%{transform:translateY(0);opacity:1}} /* Floating */ .floating{position:absolute;border-radius:50%;opacity:0.15;animation:float 6s ease-in-out infinite}@keyframes float{0%,100%{transform:translateY(0) rotate(0deg)}50%{transform:translateY(-30px) rotate(180deg)}} /* Content */ section{padding:120px 20px;max-width:1000px;margin:0 auto;opacity:0;transform:translateY(50px) scale(0.95);transition:opacity 0.8s ease,transform 0.8s ease;border-radius:15px} section.show{opacity:1;transform:translateY(0) scale(1)} section h2{font-size:2rem;margin-bottom:1rem;color:#4f46e5} section p,section ul{font-size:1.1rem;margin-bottom:1rem;line-height:1.6} section ul{margin-left:20px} section ul li{margin-bottom:0.5rem} section.feature-card{background:linear-gradient(135deg,#f97316,#facc15,#4f46e5);color:#111827;padding:20px;margin:20px 0;box-shadow:0 8px 25px rgba(0,0,0,0.15);border-radius:15px;opacity:0;transform:translateY(50px) scale(0.95);transition:opacity 0.5s ease,transform 0.5s ease} section.feature-card.show{opacity:1;transform:translateY(0) scale(1)} /* Animated circles */ .color-circle{position:absolute;border-radius:50%;opacity:0.2;animation:jump 4s linear infinite}@keyframes jump{0%{transform:translateY(0) scale(1)}25%{transform:translateY(-20px) scale(1.1)}50%{transform:translateY(0) scale(1)}75%{transform:translateY(-15px) scale(1.05)}100%{transform:translateY(0) scale(1)}}
    </style>
</head>
<body>

<nav class="top-nav">
    <div class="nav-links">
        <a href="#section1" class="nav-link">About</a>
        <a href="#section2" class="nav-link">Features</a>
        <a href="#section3" class="nav-link">Privacy</a>
        <a href="#section4" class="nav-link">Teams</a>
        <a href="#section5" class="nav-link">Why HSMA</a>
    </div>
    <div class="auth-buttons">
        <a href="{{ route('ShowLogin') }}" class="login">Login</a>
        <a href="{{ route('ShowRegister') }}" class="register">Register</a>
    </div>
</nav>

<div class="intro-container">
    <div class="floating" style="width:100px;height:100px;top:5%;left:10%;background:#4f46e5"></div>
    <div class="floating" style="width:120px;height:120px;top:30%;right:15%;background:#f97316"></div>
    <div class="floating" style="width:80px;height:80px;top:50%;left:70%;background:#6366f1"></div>
    <div class="color-circle" style="width:40px;height:40px;top:20%;left:40%;background:#facc15"></div>
    <div class="color-circle" style="width:30px;height:30px;top:60%;left:60%;background:#10b981"></div>
    <div class="color-circle" style="width:50px;height:50px;top:40%;left:20%;background:#f43f5e"></div>
    <h1>High Security Message App</h1>
    <div class="typed-text" id="typedText"></div>
    <a href="#section1" class="btn">Get Started</a>
</div>

<section id="section1"><h2>About HSMA</h2><p>HSMA is a next-generation messaging app that ensures your communication remains private and secure. No one can read your messages except the intended recipients.</p></section>

<section id="section2"><h2>Core Features</h2>
    <div class="feature-card"><h3>End-to-End Encryption</h3><p>All messages are encrypted on your device and decrypted on the recipient’s device.</p></div>
    <div class="feature-card"><h3>Self-Destruct Messages</h3><p>Optionally set messages to self-destruct after reading to maintain complete privacy.</p></div>
    <div class="feature-card"><h3>Two-Factor Authentication</h3><p>Accounts are protected with two-step verification for added security.</p></div>
    <div class="feature-card"><h3>Offline Encryption</h3><p>Messages are encrypted even when offline, ensuring security at all times.</p></div>
</section>

<section id="section3"><h2>Privacy & Trust</h2><p>We never track user activity, sell data, or display ads. You control your messages entirely.</p>
    <ul><li>No user tracking or profiling.</li><li>Minimal metadata storage.</li><li>Optional anonymous usage.</li></ul></section>

<section id="section4"><h2>For Teams & Businesses</h2><p>Create secure channels for confidential communication. Only authorized members can access shared content.</p></section>

<section id="section5"><h2>Why Choose HSMA?</h2><ul><li>Fast, reliable messaging.</li><li>Regular security updates.</li><li>Peace of mind with complete privacy.</li></ul></section>

<script>
    const floating=document.querySelectorAll('.floating,.color-circle');document.addEventListener('mousemove',e=>{const x=e.clientX/window.innerWidth;const y=e.clientY/window.innerHeight;floating.forEach((el,i)=>{const moveX=(x-0.5)*50*(i+1);const moveY=(y-0.5)*50*(i+1);el.style.transform=`translate(${moveX}px, ${moveY}px)`})});const sections=document.querySelectorAll('section');const revealOnScroll=()=>{const triggerBottom=window.innerHeight*0.85;sections.forEach(section=>{const sectionTop=section.getBoundingClientRect().top;if(sectionTop<triggerBottom){section.classList.add('show');const cards=section.querySelectorAll('.feature-card');cards.forEach((card,i)=>setTimeout(()=>card.classList.add('show'),i*200))}})};window.addEventListener('scroll',revealOnScroll);window.addEventListener('load',revealOnScroll);const typedText=document.getElementById('typedText');const sentences=["Your messages stay private.","Encrypted communication, always.","HSMA keeps your secrets safe.","Secure chat for individuals and teams."];let currentSentence=0;let currentChar=0;let deleting=false;function typeLoop(){const sentence=sentences[currentSentence];if(!deleting){typedText.textContent=sentence.slice(0,currentChar+1);currentChar++;if(currentChar===sentence.length){deleting=true;setTimeout(typeLoop,1000);return}}else{typedText.textContent=sentence.slice(0,currentChar-1);currentChar--;if(currentChar===0){deleting=false;currentSentence=(currentSentence+1)%sentences.length}}typedText.style.opacity=1;setTimeout(typeLoop,deleting?50:100)}typeLoop();const navLinks=document.querySelectorAll('.nav-link');window.addEventListener('scroll',()=>{let fromTop=window.scrollY+60;navLinks.forEach(link=>{const section=document.querySelector(link.getAttribute('href'));if(section.offsetTop<=fromTop&&section.offsetTop+section.offsetHeight>fromTop){link.classList.add('active')}else{link.classList.remove('active')}})});
</script>

</body>
</html>

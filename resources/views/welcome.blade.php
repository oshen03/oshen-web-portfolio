<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Primary Meta Tags -->
    <title>Oshen Sathsara Hettiwana | Full-Stack Software Engineer & Digital Marketer</title>
    <meta name="title" content="Oshen Sathsara Hettiwana | Full-Stack Software Engineer & Digital Marketer">
    <meta name="description" content="Portfolio of Oshen Sathsara Hettiwana. A multifaceted Full-Stack Software Engineer, Digital Marketing Specialist, and Director based in Sri Lanka, creating digital solutions and brand identities.">
    <meta name="keywords" content="Oshen Sathsara Hettiwana, Software Engineer, Web Developer, Digital Marketing, Laravel, PHP, Sri Lanka, Kegalle, Win Win Solutions, KVTC">
    <meta name="author" content="Oshen Sathsara Hettiwana">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://oshen.web.lk/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://oshen.web.lk/">
    <meta property="og:title" content="Oshen Sathsara Hettiwana | Full-Stack Software Engineer">
    <meta property="og:description" content="Portfolio of Oshen Sathsara Hettiwana. A multifaceted Full-Stack Software Engineer, Digital Marketing Specialist, and Director based in Sri Lanka.">
    <meta property="og:image" content="{{ asset('images/oshen-sathsara-hettiwana.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://oshen.web.lk/">
    <meta property="twitter:title" content="Oshen Sathsara Hettiwana | Full-Stack Software Engineer">
    <meta property="twitter:description" content="Portfolio of Oshen Sathsara Hettiwana. A multifaceted Full-Stack Software Engineer, Digital Marketing Specialist, and Director based in Sri Lanka.">
    <meta property="twitter:image" content="{{ asset('images/oshen-sathsara-hettiwana.png') }}">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Person",
      "name": "Oshen Sathsara Hettiwana",
      "jobTitle": "Full-Stack Software Engineer & Digital Marketing Specialist",
      "url": "https://oshen.web.lk/",
      "image": "{{ asset('images/oshen-sathsara-hettiwana.png') }}",
      "sameAs": [
        "https://www.linkedin.com/in/oshen-sathsara03/",
        "https://github.com/oshen03"
      ],
      "worksFor": {
        "@@type": "Organization",
        "name": "Win Win Solutions"
      },
      "alumniOf": [
        {
          "@@type": "CollegeOrUniversity",
          "name": "Birmingham City University"
        },
        {
          "@@type": "CollegeOrUniversity",
          "name": "Java Institute for Advanced Technology"
        }
      ]
    }
    </script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    <div class="bg-glow"></div>
    
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-grid">
            <div class="hero-content">
                <h1 class="text-gradient">Engineering Digital Solutions. Architecting Brand Identities.</h1>
                <p>Hi, I'm Oshen. A Full-Stack Software Engineer, Digital Marketing Specialist, and Director bringing modern web applications and compelling brand stories to life.</p>
                <div class="hero-actions">
                    <a href="#projects" class="btn btn-primary">Explore My Tech Projects</a>
                    <a href="#branding" class="btn btn-outline">View Branding Portfolio</a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <img src="{{ asset('images/oshen-sathsara-hettiwana.png') }}" alt="Oshen Sathsara Hettiwana" class="hero-image">
            </div>
        </div>
    </section>

    <!-- Branding & Digital Design Experience -->
    <section class="highlight-section" id="branding">
        <div class="container">
            <h2 class="section-title">Branding & <span class="text-gradient">Digital Design</span></h2>
            <p class="section-subtitle">Crafting professional, minimalist, and high-impact digital assets that tell a story.</p>
            
            <div class="branding-grid">
                <div class="branding-image-wrapper">
                    <img src="{{ asset('images/branding_showcase.png') }}" alt="Digital Design Workspace" class="branding-image">
                </div>
                <div class="branding-content">
                    <h2>Visual Storytelling</h2>
                    <p>As a Graphic Designer and Video Editor, I specialize in building cohesive brand identities from the ground up. My experience spans from designing social media posters to utilizing multilingual typographic assets (Sinhala and Tamil fonts) for targeted local marketing.</p>
                    <p><strong>Key Achievement:</strong> Directed the complete brand identity for <a href="https://winwinsolutions.lk/" target="_blank" rel="noopener noreferrer"><em>Win Win Solutions</em></a>, including logo design, website UI/UX, and comprehensive social media strategy.</p>
                    <p>Additionally, I have executed comprehensive branding for <a href="https://web.facebook.com/gayanholdings" target="_blank" rel="noopener noreferrer">Gayan Holdings</a>, alongside actively managing the digital presence for the <a href="https://kvtcampus.lk/" target="_blank" rel="noopener noreferrer">Kegalle Vocational Training Campus (KVTC)</a>.</p>
                    
                    <div class="toolkit">
                        <span class="tool-tag">Adobe Photoshop</span>
                        <span class="tool-tag">Adobe Illustrator</span>
                        <span class="tool-tag">Canva</span>
                        <span class="tool-tag">Filmora</span>
                        <span class="tool-tag">UI/UX Design</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Software Engineering & Projects -->
    <section id="projects">
        <div class="container">
            <h2 class="section-title">Software Engineering & <span class="text-gradient">Projects</span></h2>
            <p class="section-subtitle">A showcase of full-stack web applications and robust digital systems I've architected.</p>
            
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <img src="{{ asset('images/project_kvtc.png') }}" alt="KVTC Student Management System" class="project-image">
                    <div class="project-info">
                        <h3>KVTC Student Management System</h3>
                        <p>A comprehensive web-based platform tailored for the <a href="https://kvtcampus.lk/" target="_blank" rel="noopener noreferrer">Kegalle Vocational Training Campus</a> to efficiently manage student data, enrollment, and academic progress.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">Tailwind CSS</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="project-card">
                    <img src="{{ asset('images/project_sangamaya.png') }}" alt="Kegalu Welanda Sangamaya System" class="project-image">
                    <div class="project-info">
                        <h3>Kegalu Welanda Sangamaya System</h3>
                        <p>A robust web-based membership and cash book system designed to digitize and streamline the administrative workflows for the association.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">Bootstrap</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Vanilla JS</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="project-card">
                    <img src="{{ asset('images/project_iscomprinters.png') }}" alt="Computer Shop System" class="project-image">
                    <div class="project-info">
                        <h3>ISCOM Printers management system</h3>
                        <p>A successfully completed full-stack e-commerce and inventory application providing a seamless shopping experience and back-office management.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">Java</span>
                            <span class="tech-tag">Swing</span>
                            <span class="tech-tag">Hibernate</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership & Certifications -->
    <section class="highlight-section" id="leadership">
        <div class="container">
            <div class="leadership-grid">
                <div class="card-glass">
                    <h3>Director at <a href="https://winwinsolutions.lk/" target="_blank" rel="noopener noreferrer" class="text-gradient">Win Win Solutions</a></h3>
                    <p>At <a href="https://winwinsolutions.lk/" target="_blank" rel="noopener noreferrer">Win Win Solutions</a>, I merge real estate, construction, and digital solutions into a unified business strategy. In this leadership role, I oversee project execution, drive digital transformation, and ensure client satisfaction across diverse sectors.</p>
                    <img src="{{ asset('images/leadership_oshen.png') }}" alt="Leadership & Certification" class="leadership-image">
                </div>
                
                <div class="card-glass">
                    <h3><span class="text-gradient">Professional Certifications</span></h3>
                    <p>Committed to continuous learning, I hold industry-recognized certifications that validate my expertise in cloud technologies and artificial intelligence.</p>
                    
                    <ul class="cert-list">
                        <li>
                            <span class="cert-icon">✦</span>
                            <span>Oracle Cloud Infrastructure 2025 Certified AI Foundations Associate</span>
                        </li>
                        <li>
                            <span class="cert-icon">✦</span>
                            <span>Oracle Cloud Infrastructure 2025 Certified Foundations Associate</span>
                        </li>
                        <li>
                            <span class="cert-icon">✦</span>
                            <span>BSc Hons Software Engineering (Undergraduate, 3rd Year) - <a href="https://www.bcu.ac.uk/" target="_blank" rel="noopener noreferrer">Birmingham City University</a></span>
                        </li>
                        <li>
                            <span class="cert-icon">✦</span>
                            <span>Professional Higher Diploma in Software Engineering (FQ-UK) - <a href="https://www.javainstitute.edu.lk/" target="_blank" rel="noopener noreferrer">Java Institute for Advanced Technology</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me -->
    <section id="about">
        <div class="container about-grid">
            <div class="about-content">
                <h2>Beyond the <span class="text-gradient">Code</span></h2>
                <p>I am driven by an immense passion to continually expand my knowledge, particularly in the fields of Cloud Infrastructure and Artificial Intelligence.</p>
                <p>I continuously explore emerging technologies and enjoy building robust applications that make a tangible impact on real-world problems.</p>
                <a href="#contact" class="btn btn-primary mt-4">Let's Connect</a>
            </div>
            <div class="about-image-wrapper">
                <img src="{{ asset('images/about_hobbies.png') }}" alt="Oshen's Hobbies" class="about-image shadow-[var(--shadow-glow)]">
            </div>
        </div>
    </section>

    <!-- Footer & Contact -->
    <footer id="contact">
        <div class="bg-glow" style="top: auto; bottom: -200px; left: -200px; right: auto;"></div>
        <div class="container">
            <div class="footer-grid">
                <div class="contact-info">
                    <h2>Let's build something <span class="text-gradient">amazing.</span></h2>
                    <p>Whether you need a robust software solution, a compelling brand identity, or just want to say hi, my inbox is always open.</p>
                    
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/oshen-sathsara03/" class="social-link" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <a href="https://github.com/oshen03" class="social-link" aria-label="GitHub" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        </a>
                        <a href="https://wa.me/94774486310" class="social-link" aria-label="WhatsApp" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </a>
                        <a href="mailto:oshensathsara2003@gmail.com" class="social-link" aria-label="Email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </a>
                    </div>
                </div>
                
                <div class="contact-form-wrapper">
                    @if (session('success'))
                        <div style="background-color: rgba(74, 222, 128, 0.1); color: #4ade80; border: 1px solid #4ade80; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; text-align: center;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Oshen Sathsara" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="oshensathsara2003@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" placeholder="How can I help you?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 0.5rem;">Send Message</button>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Oshen Sathsara Hettiwana. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>

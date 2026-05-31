<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philanthropy Reform Alliance</title>
    @vite('resources/css/site.css')
</head>

<body class="min-h-screen flex flex-col bg-[#fdf7f5]">
    {{-- Hero Section --}}
    <div class="relative bg-cover bg-center min-h-screen px-6 md:px-14 lg:px-20 pt-4 pb-4"
        style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('assets/landing/hero.jpg') }}')">
        {{-- Navbar --}}
        @include('static.navbar')

        <div class="relative mt-10 pt-14">
            <div class="flex flex-col items-center text-center gap-4 pt-6 md:pt-14">
                <h1 class="text-white text-4xl font-bold mb-4">Changing Lives for Lasting Impact</h1>
                <h3 class="text-white text-xl font-light max-w-2xl">We bring together innovators, funders and
                    communities to reshape how philanthropy works</h3>
            </div>
            <div class="flex flex-col md:flex-row justify-center mt-6 md:mt-16 gap-4">
                <button class="button rounded-full bg-orange-500 px-8 py-4 transition-all duration-200">
                    <a href="#" class="text-white text-sm md:text-md font-medium">Become a Member</a>
                </button>
                <button
                    class="rounded-full bg-white/20 border border-white/40 px-8 py-4 backdrop-blur-sm hover:bg-white/30 transition-all duration-200">
                    <a href="#" class="text-white text-sm md:text-md font-medium">Explore Our Programs</a>
                </button>
            </div>
        </div>
    </div>

    {{-- Story info --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6 md:px-14 lg:px-20 mt-30 mb-20">
        <div class="mt-30">
            <h3 class="text-3xl font-bold mb-2">Philanthropy Reform Alliance</h3>
            <p class="mb-8 font-light">
                Philanthropy Reform Alliance was founded on a simple belief: meaningful change happens when resources,
                ideas, and communities work together differently. </p>
            <p class="mb-8 font-light">
                Traditional philanthropy models often exclude the very communities they aim to serve. We exist to
                challenge that status quo by fostering collaboration, supporting bold ideas, and building platforms
                where local leadership drives sustainable impact.
            </p>
            <p class="mb-8 font-light">
                Through fellowship programs, catalytic funding, and collaborative roundtables, we empower changemakers
                to design solutions that respond to real community needs.
            </p>
        </div>
        <div class="max-h-[600px] items-end">
            <div class="flex-1 relative h-auto md:h-[600px]">
                <img src="{{ asset('assets/landing/story.jpeg') }}" class="rounded-2xl w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/50 rounded-2xl"></div>
            </div>
        </div>
    </div>

    <div class="flex flex-col px-6 md:px-14 lg:px-20 py-24">
        <h1 class="text-3xl text-center font-bold mb-16">Our Core Values</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-between">
            <div class="flex-1 flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-6">
                <div class="flex items-center justify-center bg-orange-300 h-20 w-20 rounded-full mb-6">
                    <img src="{{ asset('assets/landing/collaboration.png') }}" class="h-8" />
                </div>
                <h1 class="text-md font-bold mb-4">Collaboration</h1>
                <p class="text-center font-light">Together we create lasting change and hope</p>
            </div>
            <div class="flex-1 flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-6">
                <div class="flex items-center justify-center bg-orange-300 h-20 w-20 rounded-full mb-6">
                    <img src="{{ asset('assets/landing/equity.png') }}" class="h-6" />
                </div>
                <h1 class="text-md font-bold mb-4">Equity</h1>
                <p class="text-center font-light">We believe in a just and inclusive world where everyone has the
                    opportunity to thrive</p>
            </div>
            <div class="flex-1 flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-6">
                <div class="flex items-center justify-center bg-orange-300 h-20 w-20 rounded-full mb-6">
                    <img src="{{ asset('assets/landing/innovation.png') }}" class="h-6" />
                </div>
                <h1 class="text-md font-bold mb-4">Innovation</h1>
                <p class="text-center font-light">We embrace creativity and bold ideas to drive transformative change
                </p>
            </div>
            <div class="flex-1 flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-6">
                <div class="flex items-center justify-center bg-orange-300 h-20 w-20 rounded-full mb-6">
                    <img src="{{ asset('assets/landing/accountability.png') }}" class="h-6" />
                </div>
                <h1 class="text-md font-bold mb-4">Accountability</h1>
                <p class="text-center font-light">We are committed to transparency, learning, and continuous improvement
                    in all we do</p>
            </div>
        </div>
        <div class="flex justify-center mt-16 mx-auto bg-white shadow-lg rounded-2xl p-8 md:p-14">
            <h2 class="text-xl md:text-2xl text-center">
                "The smallest act of love can change the biggest story."
            </h2>
        </div>
    </div>

    <div class="flex flex-col px-6 md:px-14 lg:px-20 py-24">
        <h1 class="text-3xl text-center font-bold mb-16">Our Impact in Numbers</h1>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <div class="flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-10">
                <span class="text-5xl font-bold text-orange-400 mb-3" data-count="1200">0</span>
                <h2 class="text-lg font-bold mb-1">Members</h2>
                <p class="text-center text-sm font-light text-gray-500">People who make change possible</p>
            </div>

            <div class="flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-10">
                <span class="text-5xl font-bold text-orange-400 mb-3" data-count="340">0</span>
                <h2 class="text-lg font-bold mb-1">Events</h2>
                <p class="text-center text-sm font-light text-gray-500">Community gatherings held to date</p>
            </div>

            <div class="flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-10">
                <span class="text-5xl font-bold text-orange-400 mb-3" data-count="85">0</span>
                <h2 class="text-lg font-bold mb-1">Publications</h2>
                <p class="text-center text-sm font-light text-gray-500">Research and reports published</p>
            </div>
        </div>
    </div>

    <script>
        const counters = document.querySelectorAll('[data-count]');
        const speed = 2000;

        const animate = (el) => {
            const target = +el.getAttribute('data-count');
            const step = target / (speed / 16);
            let current = 0;

            const update = () => {
                current += step;
                if (current < target) {
                    el.textContent = Math.ceil(current).toLocaleString();
                    requestAnimationFrame(update);
                } else {
                    el.textContent = target.toLocaleString();
                }
            };
            update();
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animate(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));
    </script>

    <div class="flex flex-col px-6 md:px-14 lg:px-20 pb-24 pt-10 bg-gray-50">

        <!-- Heading -->
        <div class="flex flex-col items-center mb-16">
            <h1 class="text-3xl text-center font-bold mb-4">
                Our Approach
            </h1>
            <div class="flex items-center gap-2">
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
                <div class="h-[3px] w-6 bg-orange-500 rounded-full"></div>
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
            </div>
        </div>

        <!-- Steps -->
        <div class="flex flex-wrap justify-center gap-8">

            <div class="w-full sm:w-[45%] lg:w-[22%] max-w-sm flex flex-col items-center text-center p-6">
                <div class="text-orange-500 font-bold text-3xl mb-4">01</div>
                <h3 class="text-lg font-semibold mb-3">Unlearn</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Question dominant narratives and rethink assumptions in development practice.
                </p>
            </div>

            <div class="w-full sm:w-[45%] lg:w-[22%] max-w-sm flex flex-col items-center text-center p-6">
                <div class="text-orange-500 font-bold text-3xl mb-4">02</div>
                <h3 class="text-lg font-semibold mb-3">Reflect</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Create honest spaces for practitioners to examine contradictions and challenges.
                </p>
            </div>

            <div class="w-full sm:w-[45%] lg:w-[22%] max-w-sm flex flex-col items-center text-center p-6">
                <div class="text-orange-500 font-bold text-3xl mb-4">03</div>
                <h3 class="text-lg font-semibold mb-3">Collaborate</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Engage diverse actors as equal partners in shaping development solutions.
                </p>
            </div>

            <div class="w-full sm:w-[45%] lg:w-[22%] max-w-sm flex flex-col items-center text-center p-6">
                <div class="text-orange-500 font-bold text-3xl mb-4">04</div>
                <h3 class="text-lg font-semibold mb-3">Act</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Support collective initiatives that lead to meaningful, systemic change.
                </p>
            </div>

        </div>
    </div>

    <div class="flex flex-col px-6 md:px-14 lg:px-20 pb-24 pt-10 bg-white">

        <!-- Heading -->
        <div class="flex flex-col items-center mb-16">
            <h1 class="text-3xl text-center font-bold mb-4">
                Our Team
            </h1>
            <div class="flex items-center gap-2">
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
                <div class="h-[3px] w-6 bg-orange-500 rounded-full"></div>
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
            </div>
        </div>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Member -->
            <div class="flex flex-col items-center text-center">
                <div class="w-32 h-32 rounded-full overflow-hidden mb-4 shadow-md">
                    <img src="/images/team1.jpg" class="w-full h-full object-cover" />
                </div>
                <h3 class="text-lg font-semibold">Jane Doe</h3>
                <p class="text-orange-500 text-sm mb-3">Executive Director</p>
                <p class="text-sm text-gray-600 leading-relaxed max-w-xs">
                    Leads strategic direction and partnerships with a focus on equitable development.
                </p>
            </div>

            <!-- Member -->
            <div class="flex flex-col items-center text-center">
                <div class="w-32 h-32 rounded-full overflow-hidden mb-4 shadow-md">
                    <img src="/images/team2.jpg" class="w-full h-full object-cover" />
                </div>
                <h3 class="text-lg font-semibold">John Smith</h3>
                <p class="text-orange-500 text-sm mb-3">Research Lead</p>
                <p class="text-sm text-gray-600 leading-relaxed max-w-xs">
                    Drives research initiatives and knowledge generation across programs.
                </p>
            </div>

            <!-- Member -->
            <div class="flex flex-col items-center text-center">
                <div class="w-32 h-32 rounded-full overflow-hidden mb-4 shadow-md">
                    <img src="/images/team3.jpg" class="w-full h-full object-cover" />
                </div>
                <h3 class="text-lg font-semibold">Amina K.</h3>
                <p class="text-orange-500 text-sm mb-3">Community Engagement</p>
                <p class="text-sm text-gray-600 leading-relaxed max-w-xs">
                    Facilitates collaboration and dialogue with community partners.
                </p>
            </div>

        </div>

    </div>

    <div class="flex flex-col md:flex-row gap-12 px-6 md:px-14 lg:px-20 pt-20 mb-20">
        <div class="flex w-full md:w-[45%] max-h-[600px]">
            <div class="w-full h-[600px] relative rounded-xl overflow-hidden">
                <img src="{{ asset('assets/landing/story.jpeg') }}" class="w-full h-full object-center" />
                <div class="absolute inset-0 bg-black/40 rounded-2xl"></div>
            </div>
        </div>
        <div class="w-full md:w-[55%]">
            <h3 class="font-bold text-xl md:text-3xl mb-6">Our Programs</h3>
            <p class="font-light mb-6">
                Our work bridges philanthropy, innovation, and social impact — creating ecosystems where generosity
                leads to measurable transformation
            </p>
            <div class="flex gap-4 mb-8">
                <div class="flex">
                    <div class="flex items-center justify-center bg-orange-300 text-white h-12 w-12 rounded-full">01
                    </div>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold">Fellowship Program</h6>
                    <p class="font-light">
                        A leadership development initiative supporting emerging changemakers working at the intersection
                        of philanthropy, policy, and community development.
                    </p>
                    <button class="w-fit text-left bg-orange-400 text-white mt-2 px-6 py-2 rounded-full">
                        <a href="#">Learn more</a>
                    </button>
                </div>
            </div>
            <div class="flex gap-4 mb-8">
                <div class="flex">
                    <div class="flex items-center justify-center bg-orange-300 text-white h-12 w-12 rounded-full">02
                    </div>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold">Catalytic Seed Fund</h6>
                    <p class="font-light">
                        We provide early-stage funding to innovative ideas that have strong potential for community
                        transformation but limited access to traditional funding.
                    </p>
                    <button class="w-fit text-left bg-orange-400 text-white mt-2 px-6 py-2 rounded-full">
                        <a href="#">Learn more</a>
                    </button>
                </div>
            </div>
            <div class="flex gap-4 mb-8">
                <div class="flex">
                    <div class="flex items-center justify-center bg-orange-300 text-white h-12 w-12 rounded-full">03
                    </div>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold">Roundtables</h6>
                    <p class="font-light">
                        Curated conversations bringing together funders, practitioners, policymakers, and community
                        leaders to rethink philanthropy practices
                    </p>
                    <button class="w-fit text-left bg-orange-400 text-white mt-2 px-6 py-2 rounded-full">
                        <a href="#">Learn more</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col px-6 md:px-14 lg:px-20 py-16 bg-white">

        <!-- Heading -->
        <div class="flex flex-col items-center mb-12">
            <h2 class="text-2xl md:text-3xl text-center font-bold mb-4">
                Why Partner with PRA
            </h2>

            <div class="flex items-center gap-2">
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
                <div class="h-[3px] w-6 bg-orange-500 rounded-full"></div>
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
            </div>
        </div>

        <!-- List -->
        <div class="max-w-3xl mx-auto space-y-6">

            <div class="flex items-start gap-4">
                <div class="mt-2 h-2 w-2 bg-orange-500 rounded-full shrink-0"></div>
                <p class="text-gray-700 leading-relaxed">
                    Collaborate on flagship initiatives like the Collaborative Unlearning Lab.
                </p>
            </div>

            <div class="flex items-start gap-4">
                <div class="mt-2 h-2 w-2 bg-orange-500 rounded-full shrink-0"></div>
                <p class="text-gray-700 leading-relaxed">
                    Co-design tools and frameworks to surface and shift power in systems.
                </p>
            </div>

            <div class="flex items-start gap-4">
                <div class="mt-2 h-2 w-2 bg-orange-500 rounded-full shrink-0"></div>
                <p class="text-gray-700 leading-relaxed">
                    Participate in facilitated dialogues and roundtables that surface hidden dynamics and drive shared learning.
                </p>
            </div>

            <div class="flex items-start gap-4">
                <div class="mt-2 h-2 w-2 bg-orange-500 rounded-full shrink-0"></div>
                <p class="text-gray-700 leading-relaxed">
                    Influence cross-sector change while strengthening your own institutional practice.
                </p>
            </div>

        </div>

    </div>

    {{-- Our story section --}}
    <div class="flex flex-col bg-white px-6 md:px-14 lg:px-20 py-20">
        <h3 class="text-3xl font-bold mb-6">Our Story</h3>
        <div class="font-light">
            RefugeeSkills was founded in 2018 with a simple but powerful mission: to help refugees rebuild their lives
            through education and skills training.

            What started as a small community initiative has grown into a comprehensive support organization serving
            hundreds of refugees each year.

            We believe that everyone deserves the opportunity to learn, grow, and contribute to their community,
            regardless of their circumstances.
        </div>
    </div>

    {{-- Mission Vision --}}
    <div class="flex flex-col px-6 md:px-14 lg:px-20 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Mission --}}
            <div class="flex flex-col bg-white shadow-lg rounded-2xl p-8 border-t-4 border-orange-400">
                <div class="flex items-center justify-center bg-orange-100 h-14 w-14 rounded-full mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                <p class="font-light text-gray-600 leading-relaxed">
                    Our mission is to empower refugees and immigrants with the skills and resources they need to build
                    successful lives in their new communities.
                </p>
            </div>

            {{-- Vision --}}
            <div class="flex flex-col bg-white shadow-lg rounded-2xl p-8 border-t-4 border-orange-400">
                <div class="flex items-center justify-center bg-orange-100 h-14 w-14 rounded-full mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
                <p class="font-light text-gray-600 leading-relaxed">
                    We envision a world where all individuals have equal opportunities to thrive, regardless of their
                    background or circumstances.
                </p>
            </div>

        </div>
    </div>

    {{-- action cards --}}
    <div class="flex flex-col px-6 md:px-14 lg:px-20 py-20 bg-gray-50">
        <!-- Heading -->
        <div class="flex flex-col items-center mb-14">
            <h2 class="text-3xl font-bold text-center mb-4">
                Get Involved / Take Action
            </h2>

            <div class="flex items-center gap-2">
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
                <div class="h-[3px] w-6 bg-orange-500 rounded-full"></div>
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
            </div>

            <p class="text-gray-600 text-center mt-4 max-w-2xl">
                Join PRA in shaping more reflective, inclusive, and transformative development practice.
            </p>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <!-- Donate -->
            <div class="flex flex-col items-center text-center bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition">
                <div class="text-orange-500 font-bold text-2xl mb-4">
                    Donate
                </div>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Support PRA’s initiatives and help sustain collaborative learning spaces and field programs.
                </p>

                <a href="#"
                class="px-6 py-2 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition">
                    Donate Now
                </a>
            </div>

            <!-- Volunteer / Join Cohort -->
            <div class="flex flex-col items-center text-center bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition">
                <div class="text-orange-500 font-bold text-2xl mb-4">
                    Volunteer / Join a Cohort
                </div>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Participate in learning cohorts, facilitation labs, and collaborative reflection spaces.
                </p>

                <a href="#"
                class="px-6 py-2 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition">
                    Join Us
                </a>
            </div>

            <!-- Advocacy -->
            <div class="flex flex-col items-center text-center bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition">
                <div class="text-orange-500 font-bold text-2xl mb-4">
                    Advocacy / Campaigns
                </div>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Engage in campaigns that challenge systems, amplify voices, and influence policy and practice.
                </p>

                <a href="#"
                class="px-6 py-2 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition">
                    Take Action
                </a>
            </div>

        </div>

    </div>

    {{-- Testimonials --}}
    <div class="px-6 md:px-14 lg:px-20 py-24">
        {{-- Section heading --}}
        <div class="flex flex-col items-center mb-12">
            <h2 class="text-3xl font-bold mb-4 text-center">What People Say</h2>
            <div class="flex items-center gap-2">
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
                <div class="h-[3px] w-6 bg-orange-500 rounded-full"></div>
                <div class="h-[2px] w-12 bg-orange-300 rounded-full"></div>
            </div>
        </div>

        {{-- Carousel track --}}
        <div class="overflow-hidden" id="t-wrap">
            <div class="flex gap-5 mb-2 transition-transform duration-500 ease-in-out" id="t-track">

                <div class="flex-none w-full sm:w-[calc(50%-10px)] lg:w-[calc(33.333%-14px)] bg-white shadow-md rounded-2xl p-7 flex flex-col gap-4">
                    <p class="text-gray-500 text-sm leading-relaxed flex-1 pt-6 relative before:content-['\201C'] before:absolute before:top-0 before:left-0 before:text-5xl before:text-orange-400 before:opacity-50 before:font-serif">
                        Joining this network changed how I think about philanthropy. The conversations are real, the connections lasting, and the impact speaks for itself.
                    </p>
                    <div class="flex items-center gap-3 border-t border-gray-100 pt-4">
                        <img
                            src=""
                            alt=""
                            class="h-11 w-11 rounded-full object-cover border-2 border-orange-200 flex-shrink-0"
                        />
                        {{-- <div class="h-11 w-11 rounded-full bg-orange-50 border-2 border-orange-200 flex items-center justify-center text-orange-600 font-medium text-sm flex-shrink-0">AM</div> --}}
                        <div>
                            <p class="font-semibold text-sm">Amara Mensah</p>
                            <p class="text-gray-400 text-xs">GivingForward Foundation</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-full sm:w-[calc(50%-10px)] lg:w-[calc(33.333%-14px)] bg-white shadow-md rounded-2xl p-7 flex flex-col gap-4">
                    <p class="text-gray-500 text-sm leading-relaxed flex-1 pt-6 relative before:content-['\201C'] before:absolute before:top-0 before:left-0 before:text-5xl before:text-orange-400 before:opacity-50 before:font-serif">
                        Joining this network changed how I think about philanthropy. The conversations are real, the connections lasting, and the impact speaks for itself.
                    </p>
                    <div class="flex items-center gap-3 border-t border-gray-100 pt-4">
                        <div class="h-11 w-11 rounded-full bg-orange-50 border-2 border-orange-200 flex items-center justify-center text-orange-600 font-medium text-sm flex-shrink-0">AM</div>
                        <div>
                            <p class="font-semibold text-sm">Amara Mensah</p>
                            <p class="text-gray-400 text-xs">GivingForward Foundation</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-full sm:w-[calc(50%-10px)] lg:w-[calc(33.333%-14px)] bg-white shadow-md rounded-2xl p-7 flex flex-col gap-4">
                    <p class="text-gray-500 text-sm leading-relaxed flex-1 pt-6 relative before:content-['\201C'] before:absolute before:top-0 before:left-0 before:text-5xl before:text-orange-400 before:opacity-50 before:font-serif">
                        Joining this network changed how I think about philanthropy. The conversations are real, the connections lasting, and the impact speaks for itself.
                    </p>
                    <div class="flex items-center gap-3 border-t border-gray-100 pt-4">
                        <div class="h-11 w-11 rounded-full bg-orange-50 border-2 border-orange-200 flex items-center justify-center text-orange-600 font-medium text-sm flex-shrink-0">AM</div>
                        <div>
                            <p class="font-semibold text-sm">Amara Mensah</p>
                            <p class="text-gray-400 text-xs">GivingForward Foundation</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-full sm:w-[calc(50%-10px)] lg:w-[calc(33.333%-14px)] bg-white shadow-md rounded-2xl p-7 flex flex-col gap-4">
                    <p class="text-gray-500 text-sm leading-relaxed flex-1 pt-6 relative before:content-['\201C'] before:absolute before:top-0 before:left-0 before:text-5xl before:text-orange-400 before:opacity-50 before:font-serif">
                        Joining this network changed how I think about philanthropy. The conversations are real, the connections lasting, and the impact speaks for itself.
                    </p>
                    <div class="flex items-center gap-3 border-t border-gray-100 pt-4">
                        <div class="h-11 w-11 rounded-full bg-orange-50 border-2 border-orange-200 flex items-center justify-center text-orange-600 font-medium text-sm flex-shrink-0">AM</div>
                        <div>
                            <p class="font-semibold text-sm">Amara Mensah</p>
                            <p class="text-gray-400 text-xs">GivingForward Foundation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Controls --}}
        <div class="flex items-center justify-center gap-3 mt-8" id="t-controls"></div>
    </div>

    <script>
        const track = document.getElementById('t-track');
        const wrap = document.getElementById('t-wrap');
        const controls = document.getElementById('t-controls');
        const cards = track.querySelectorAll(':scope > div');
        let current = 0;

        const visible = () => wrap.offsetWidth < 640 ? 1 : wrap.offsetWidth < 1024 ? 2 : 3;
        const total = () => Math.ceil(cards.length / visible());

        function buildControls() {
            controls.innerHTML = '';
            const prev = document.createElement('button');
            prev.className = 'h-9 w-9 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition';
            prev.innerHTML = '<svg class="h-4 w-4 stroke-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>';
            prev.onclick = () => go(current - 1);
            controls.appendChild(prev);

            for (let i = 0; i < total(); i++) {
                const dot = document.createElement('div');
                dot.className = `h-2 w-2 rounded-full cursor-pointer transition-all ${i === current ? 'bg-orange-500 scale-125' : 'bg-gray-300'}`;
                dot.onclick = () => go(i);
                controls.appendChild(dot);
            }

            const next = document.createElement('button');
            next.className = 'h-9 w-9 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition';
            next.innerHTML = '<svg class="h-4 w-4 stroke-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
            next.onclick = () => go(current + 1);
            controls.appendChild(next);
        }

        function go(idx) {
            current = Math.max(0, Math.min(idx, total() - 1));
            const cardW = cards[0].offsetWidth + 20;
            track.style.transform = `translateX(-${current * visible() * cardW}px)`;
            buildControls();
        }

        buildControls();
        window.addEventListener('resize', () => { buildControls(); go(0); });
    </script>
    {{-- end testimonials --}}


    <section class="px-6 md:px-14 lg:px-20 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col">

                <img src="{{ asset('assets/landing/hero.jpg') }}" alt="alt image" class="w-full h-48 object-cover" />

                <div class="p-5 flex flex-col flex-1">
                    <span class="text-xs font-medium px-2 py-1 rounded-full w-fit mb-3
                        bg-orange-100 text-orange-600">
                        Toolkit
                    </span>

                    <h3 class="font-bold text-gray-900 text-lg mb-2">The title</h3>


                    <p class="text-sm text-gray-400 mb-1">Author 1</p>


                    <p class="text-sm text-gray-400 mb-3">2009</p>

                    <p class="text-gray-500 text-sm mb-4 flex-1">now this is the summary</p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-1 rounded-full">Tag value</span>
                    </div>

                    {{-- {{ if file }}
                    <a href="{{ file }}" target="_blank"
                        class="mt-auto inline-flex items-center gap-2 text-sm font-medium text-white bg-orange-500 hover:bg-orange-600 transition px-4 py-2 rounded-full w-fit">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Download
                    </a>
                    {{ elseif external_url }}
                    <a href="{{ external_url }}" target="_blank"
                        class="mt-auto inline-flex items-center gap-2 text-sm font-medium text-white bg-orange-500 hover:bg-orange-600 transition px-4 py-2 rounded-full w-fit">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        View Resource
                    </a>
                    {{ /if }} --}}
                </div>
            </div>
        </div>

    </section>


    {{-- Footer --}}
    @include('static.footer')
</body>

</html>

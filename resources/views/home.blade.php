@extends('layouts.app')

@section('title', 'AGBO Charles - Portfolio UX/UI Designer Junior')
@section('meta_description', "Portfolio de Charles AGBO, UX/UI Designer junior en recherche d'alternance.")
@section('canonical', url('/'))
@section('og_title', 'AGBO Charles - Portfolio UX/UI Designer Junior')
@section('og_description', "UX/UI Designer junior en recherche d'alternance. Decouvrez mes projets et realisations.")
@section('og_url', url('/'))

@section('content')

    {{-- Section principale --}}
    <section class="relative overflow-hidden px-6 pt-28 pb-20">
        <div class="absolute inset-0 -z-10 bg-linear-to-br from-[#17A096]/50 to-[#ff5c7a]/50 blur-3xl"></div>

        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">

                <h1 class="text-5xl md:text-6xl font-black leading-[0.95] tracking-tight text-[#17A096] mb-2">
                    UX/UI Designer Junior
                </h1>
                <span class="text-2xl md:text-3xl font-bold block text-gray-500">avec un esprit de développeur Full
                    Stack</span>

                <p class="text-lg md:text-xl text-[#5b616e] mt-7 max-w-xl leading-relaxed">
                    Diplômé d'un Mastère 2 Expert en Développement Web, j'oriente désormais mon parcours vers l'UX/UI
                    Design. Apte à travailler en équipe, je recherche un contrat d'apprentissage de 12 mois à partir de
                    septembre 2026 afin d'intégrer le Bachelor UX/UI Designer de MyDigitalSchool en alternance. Mon objectif
                    est de combiner expertise technique et conception centrée utilisateur pour développer des produits
                    digitaux performants et intuitifs.
                </p>

                <div class="flex flex-wrap gap-4 mt-10">
                    <a href="#projects"
                        class="px-8 py-3 rounded-full bg-[#17A096] text-white font-medium hover:bg-[#12857D] hover:shadow-lg hover:scale-105 transition-all duration-200">
                        Voir mes projets
                    </a>
                    <a href="#contact"
                        class="px-8 py-3 rounded-full border-2 border-[#ff5c7a] text-[#ff5c7a] font-medium hover:bg-[#ff5c7a] hover:text-white hover:shadow-lg hover:scale-105 transition-all duration-200">
                        Me contacter
                    </a>
                </div>
            </div>

            <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                <div class="relative">
                    <div class="absolute -inset-3 rounded-4xl bg-[#ff5c7a]/15 blur-2xl"></div>
                    <img src="{{ asset('images/profile.jpg') }}" alt="Portrait de Charles AGBO, UX/UI Designer junior"
                        class="relative w-70 h-85 md:w-90 md:h-110 object-cover rounded-4xl shadow-xl">

                    <div class="absolute -bottom-3 -right-3 md:-bottom-4 md:-right-4">
                        <div
                            class="inline-flex items-center gap-2 rounded-full bg-white/90 px-3 py-1.5 text-sm text-[#0F172A] shadow-sm ring-1 ring-[#17A096]/20 backdrop-blur">
                            <span class="relative flex size-3" aria-hidden="true">
                                <span
                                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-[#17A096] opacity-70"></span>
                                <span class="relative inline-flex size-3 rounded-full bg-[#17A096]"></span>
                            </span>
                            <span>À la recherche d'une alternance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section des projets --}}
    <section id="projects" class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-[#17A096] mb-12 text-center">Mes projets</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                {{-- Project Site Calan'Couleurs --}}
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition group h-full flex flex-col">
                    <div class="h-52 flex items-center justify-center p-6">
                        <img src="{{ asset('projects/CalanCouleurs/Logo-Calan.png') }}"
                            alt="Logo officiel du festival Calan'Couleurs" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-2xl font-semibold text-[#17A096] mb-2">Calan'Couleurs Festival</h3>
                        <p class="text-gray-600 mb-4 flex-1">
                            Conception et développement du site officiel du festival musical Calan'Couleurs.
                            Le projet combine une partie publique (vitrine) et une interface d'administration permettant
                            de gérer différentes parties du festival.
                        </p>
                        <div class="mt-auto">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">Laravel</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">React</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">Tailwind CSS</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">Back Office</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">CI/CD</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">UX/UI Design</span>
                            </div>
                            <a href="https://calan-couleurs.fr/" target="_blank"
                                class="inline-flex items-center gap-2 text-[#17A096] hover:text-[#12857D] font-medium transition group-hover:gap-3">
                                Voir le site <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Project Foyer des Jeunes - Déclinaisons --}}
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition group h-full flex flex-col">
                    <div class="h-52 bg-[#0F172A] flex items-center justify-center p-6">
                        <img src="{{ asset('projects/FoyerDesJeunes/Logo Foyer Sans Contoure (1).svg') }}"
                            alt="Logo officiel du Foyer des Jeunes" class="max-h max-w">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-2xl font-semibold text-[#17A096] mb-2">Déclinaison multi-supports</h3>
                        <p class="text-gray-600 mb-4 flex-1">
                            Déclinaisons visuelles réalisées pour un prochain événement organisé par le Foyer des Jeunes, association de ma commune.
                            À partir d'une affiche principale conçue par le graphiste
                            <a href="https://lr-lucasrousseau-site.fr/" target="_blank" rel="noopener noreferrer"
                                class="text-[#17A096] hover:text-[#12857D] underline underline-offset-2">Lucas Rousseau</a>,
                            j'ai produit plusieurs formats adaptés sur Adobe Illustrator : posts Instagram, couverture
                            Facebook,
                            panneaux d'affichage, bannières et vignettes HelloAsso, en respectant les dimensions et
                            contraintes
                            spécifiques de chaque support.
                        </p>
                        <div class="mt-auto">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">Adobe
                                    Illustrator</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">Déclinaisons</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">Social Media</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">Print</span>
                            </div>
                            <a href="{{ asset('projects/FoyerDesJeunes/Supports Communication Foyer Des Jeunes.pdf') }}"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 text-[#17A096] hover:text-[#12857D] font-medium transition group-hover:gap-3">
                                Voir les supports <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Project Adobe XD --}}
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition group h-full flex flex-col">
                    <div class="h-52 flex items-center justify-center p-6">
                        <img src="{{ asset('projects/CalanCouleurs/Logo-Calan.png') }}"
                            alt="Logo officiel du festival Calan'Couleurs" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-2xl font-semibold text-[#17A096] mb-2">Maquette Boutique - Adobe XD</h3>
                        <p class="text-gray-600 mb-4 flex-1">
                            Maquette réalisée avec Adobe XD dans le cadre de ma montée en compétences en UX/UI Design.
                            Ce travail illustre ma capacité à concevoir une interface e-commerce claire, cohérente et
                            orientée utilisateur.
                        </p>
                        <div class="mt-auto">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">Adobe XD</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">UI Design</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">Prototype</span>
                                <span class="px-3 py-1 bg-[#ff5c7a] text-white text-xs rounded-full">E-commerce</span>
                            </div>
                            <a href="https://xd.adobe.com/view/966e36e2-1886-47a2-b227-a07990fe2b6a-c33d/" target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 text-[#17A096] hover:text-[#12857D] font-medium transition group-hover:gap-3">
                                Voir la maquette <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- Section à propos --}}
    <section id="about" class="pb-24 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-[#17A096] mb-8 text-center">À propos</h2>
            <div class="prose prose-lg">
                <p class="text-xl text-gray-600 leading-relaxed text-center">
                    Après plusieurs années en tant que développeur Full Stack, je souhaite m'orienter vers l'UX/UI Design.
                    Cette transition me permet de mettre mon expérience technique au service de la conception d'expériences
                    utilisateur, en mettant l'accent sur l'utile et l'agréable.
                </p>
                <div class="mt-8 text-center">
                    <a href="{{ asset('docs/AGBO_Charles_Curriculum_Vitae.pdf') }}" target="_blank"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#17A096] text-white font-medium hover:bg-[#12857D] transition">
                        <i class="fa-solid fa-file-arrow-down"></i>
                        Télécharger mon CV
                    </a>
                    <p class="mt-3 text-sm text-gray-500">
                        Pour en apprendre davantage sur mon parcours et mes compétences.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section des compétences Professionnelles --}}
    <section id="skills" class="pb-24 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-[#17A096] mb-16 text-center">Compétences</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Programmation & Web --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-[#ff5c7a]/80 flex items-center gap-3">
                        <i class="fa-solid fa-code text-2xl"></i>
                        Programmation & Web
                    </h3>
                    <p class="text-gray-600">PHP, JavaScript, HTML/CSS</p>
                </div>

                {{-- Framework & Outils --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-[#ff5c7a]/80 flex items-center gap-3">
                        <i class="fa-solid fa-gears text-2xl"></i>
                        Framework & Outils
                    </h3>
                    <p class="text-gray-600">Symfony, Laravel, Tailwind CSS, Postman</p>
                </div>

                {{-- Base de données --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-[#ff5c7a]/80 flex items-center gap-3">
                        <i class="fa-solid fa-database text-2xl"></i>
                        Base de données
                    </h3>
                    <p class="text-gray-600">SQL, MariaDB, MySQL, PostgreSQL</p>
                </div>

                {{-- DevOps & Environnements --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-[#ff5c7a]/80 flex items-center gap-3">
                        <i class="fa-solid fa-server text-2xl"></i>
                        DevOps & Environnements
                    </h3>
                    <p class="text-gray-600">Docker, Linux, Git, GitHub/GitLab, CI/CD</p>
                </div>

                {{-- UX/UI Design & Outils créatifs --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-[#ff5c7a]/80 flex items-center gap-3">
                        <i class="fa-solid fa-palette"></i>
                        UX/UI Design
                    </h3>
                    <p class="text-gray-600">Figma, Adobe Creative Cloud, Capcut</p>
                </div>

                {{-- Méthodologie & Gestion --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-[#ff5c7a]/80 flex items-center gap-3">
                        <i class="fa-solid fa-tasks text-2xl"></i>
                        Méthodologie
                    </h3>
                    <p class="text-gray-600">SCRUM, Agile, Notion</p>
                </div>

                {{-- Développement --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-[#ff5c7a]/80 flex items-center gap-3">
                        <i class="fa-solid fa-laptop-code text-2xl"></i>
                        Développement
                    </h3>
                    <p class="text-gray-600">Applications Web, Desktop, API / Web Services</p>
                </div>

                {{-- IDE --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-[#ff5c7a]/80 flex items-center gap-3">
                        <i class="fa-solid fa-computer text-2xl"></i>
                        IDE
                    </h3>
                    <p class="text-gray-600">Visual Studio, IntelliJ</p>
                </div>

                {{-- Langues --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-4 text-[#ff5c7a]/80 flex items-center gap-3">
                        <i class="fa-solid fa-language text-2xl"></i>
                        Langues
                    </h3>
                    <p class="text-gray-600">Anglais (Niveau B1)</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section de contact --}}
    <section id="contact" class="pb-24 px-6">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-[#17A096] mb-8">Travaillons ensemble</h2>
            <p class="text-xl text-gray-600 mb-6">
                Je suis disponible pour des opportunités en tant que UX/UI Designer junior, dans le cadre d'une alternance à
                partir de septembre 2025.
            </p>

            <div class="flex flex-col gap-4 max-w-md mx-auto">
                <a href="mailto:agbo.charles85@gmail.com"
                    class="px-8 py-3 rounded-full bg-[#17A096] text-white font-medium hover:bg-[#12857D] hover:shadow-lg hover:scale-105 transition-all duration-200">
                    M'envoyer un mail
                </a>
                <a href="https://www.linkedin.com/in/charles-agbo/" target="_blank"
                    class="px-8 py-3 rounded-full border-2 border-[#ff5c7a] text-[#ff5c7a] font-medium hover:bg-[#ff5c7a] hover:text-white hover:shadow-lg hover:scale-105 transition-all duration-200">
                    Voir mon LinkedIn
                </a>
            </div>
        </div>
    </section>

@endsection

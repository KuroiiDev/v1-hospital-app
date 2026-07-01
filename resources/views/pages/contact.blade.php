@extends('app')

@section('content')
    <!-- Page Header Start -->
    <div class="relative bg-secondary overflow-hidden py-16 flex items-center min-h-[220px]">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover opacity-25" src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1920&q=80" alt="Hospital background">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/90 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-center lg:text-left">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight tracking-tight mb-3">
                Contact Us
            </h1>
            <div class="inline-flex items-center space-x-2 text-sm text-slate-350 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full">
                <a href="{{ route('home') }}" class="text-primary hover:underline">Home</a>
                <span class="text-slate-400">/</span>
                <span class="text-white">Contact Us</span>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Contact Us</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Please Feel Free To Contact Us</h2>
            </div>

            <!-- Contact Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Card 1 -->
                <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 transition-all duration-300 rounded-3xl p-8 text-center flex flex-col items-center shadow-sm">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    </div>
                    <h3 class="text-lg font-bold text-secondary mb-2">Our Office</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">123 Street, New York, USA</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 transition-all duration-300 rounded-3xl p-8 text-center flex flex-col items-center shadow-sm">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    </div>
                    <h3 class="text-lg font-bold text-secondary mb-2">Email Us</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        <a href="mailto:info@example.com" class="hover:text-primary transition-colors">info@example.com</a>
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 transition-all duration-300 rounded-3xl p-8 text-center flex flex-col items-center shadow-sm">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    </div>
                    <h3 class="text-lg font-bold text-secondary mb-2">Call Us</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        <a href="tel:+0123456789" class="hover:text-primary transition-colors">+012 345 6789</a>
                    </p>
                </div>
            </div>

            <!-- Map and Form Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
                <!-- Map iframe container -->
                <div class="rounded-3xl overflow-hidden shadow-md border border-slate-100 min-h-[350px] lg:min-h-full relative">
                    <iframe class="absolute inset-0 w-full h-full border-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4731422705!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de18b28f!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0" title="Google Map location of Medinova">
                    </iframe>
                </div>

                <!-- Form Section -->
                <div class="bg-slate-50 rounded-3xl p-8 sm:p-12 border border-slate-100/60 shadow-sm flex flex-col justify-center">
                    <h3 class="text-2xl font-bold text-secondary mb-8">Send Us A Message</h3>
                    <form action="#" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="sr-only">Your Name</label>
                                <input type="text" id="name" placeholder="Your Name" class="w-full bg-white border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                            </div>
                            <div>
                                <label for="email" class="sr-only">Your Email</label>
                                <input type="email" id="email" placeholder="Your Email" class="w-full bg-white border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" id="subject" placeholder="Subject" class="w-full bg-white border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                        </div>
                        <div>
                            <label for="message" class="sr-only">Message</label>
                            <textarea id="message" rows="5" placeholder="Message" class="w-full bg-white border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm resize-none"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full py-4 bg-primary hover:bg-primary-hover text-secondary font-bold rounded-lg shadow-lg hover:shadow-xl transition-all uppercase text-sm">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
@endsection
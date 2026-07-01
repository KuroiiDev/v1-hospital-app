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
                Our Services
            </h1>
            <div class="inline-flex items-center space-x-2 text-sm text-slate-350 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full">
                <a href="{{ route('home') }}" class="text-primary hover:underline">Home</a>
                <span class="text-slate-400">/</span>
                <span class="text-white">Our Services</span>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Services</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Excellent Medical Services</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service item 1 -->
                <div class="group bg-slate-50 hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-user-md text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Emergency Care</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="#!" class="w-12 h-12 bg-white group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1 shadow-sm" aria-label="Emergency Care Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 2 -->
                <div class="group bg-slate-50 hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-procedures text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Operation & Surgery</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="#!" class="w-12 h-12 bg-white group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1 shadow-sm" aria-label="Operation & Surgery Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 3 -->
                <div class="group bg-slate-50 hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-stethoscope text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Outdoor Checkup</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="#!" class="w-12 h-12 bg-white group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1 shadow-sm" aria-label="Outdoor Checkup Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 4 -->
                <div class="group bg-slate-50 hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-ambulance text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Ambulance Service</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="#!" class="w-12 h-12 bg-white group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1 shadow-sm" aria-label="Ambulance Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 5 -->
                <div class="group bg-slate-50 hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-pills text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Medicine & Pharmacy</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="#!" class="w-12 h-12 bg-white group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1 shadow-sm" aria-label="Medicine & Pharmacy Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 6 -->
                <div class="group bg-slate-50 hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-microscope text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Blood Testing</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="#!" class="w-12 h-12 bg-white group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1 shadow-sm" aria-label="Blood Testing Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->


    <!-- Appointment Start -->
    <section id="appointment-section" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-primary rounded-3xl overflow-hidden shadow-xl">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <!-- Text Section -->
                    <div class="p-12 lg:p-16 flex flex-col justify-center text-white">
                        <div class="mb-6">
                            <h5 class="text-secondary text-sm font-bold uppercase tracking-widest border-b-4 border-secondary pb-1 inline-block mb-3">Appointment</h5>
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight">Make An Appointment For Your Family</h2>
                        </div>
                        <p class="text-white/80 leading-relaxed mb-8">
                            Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a class="px-8 py-3 bg-secondary hover:bg-secondary-hover text-white font-bold rounded-full transition-all shadow-md hover:shadow-lg" href="#!">Find Doctor</a>
                            <a class="px-8 py-3 border border-white hover:bg-white hover:text-secondary text-white font-bold rounded-full transition-all shadow-md hover:shadow-lg" href="#!">Read More</a>
                        </div>
                    </div>
                    <!-- Form Section -->
                    <div class="p-8 sm:p-12 lg:p-16 bg-white flex flex-col justify-center">
                        <h3 class="text-2xl sm:text-3xl font-bold text-secondary text-center mb-8">Book An Appointment</h3>
                        <form action="#" class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="dept" class="sr-only">Choose Department</label>
                                    <select id="dept" class="w-full bg-slate-50 border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                                        <option selected>Choose Department</option>
                                        <option value="1">Department 1</option>
                                        <option value="2">Department 2</option>
                                        <option value="3">Department 3</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="doctor" class="sr-only">Select Doctor</label>
                                    <select id="doctor" class="w-full bg-slate-50 border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                                        <option selected>Select Doctor</option>
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="name" class="sr-only">Your Name</label>
                                    <input type="text" id="name" placeholder="Your Name" class="w-full bg-slate-50 border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                                </div>
                                <div>
                                    <label for="email" class="sr-only">Your Email</label>
                                    <input type="email" id="email" placeholder="Your Email" class="w-full bg-slate-50 border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                                </div>
                                <div>
                                    <label for="date-input" class="sr-only">Date</label>
                                    <input type="date" id="date-input" class="w-full bg-slate-50 border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                                </div>
                                <div>
                                    <label for="time-input" class="sr-only">Time</label>
                                    <input type="time" id="time-input" class="w-full bg-slate-50 border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="w-full py-4 bg-primary hover:bg-primary-hover text-secondary font-bold rounded-lg shadow-lg hover:shadow-xl transition-all uppercase text-sm">
                                    Make An Appointment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Testimonial</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Patients Say About Our Services</h2>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Testimonial card 1 -->
                <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 text-center flex flex-col justify-between">
                    <div>
                        <div class="relative inline-block mb-6">
                            <img class="w-20 h-20 rounded-full mx-auto ring-4 ring-primary/20" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&h=150&q=80" alt="Patient Avatar">
                            <div class="absolute -bottom-2 right-1/2 translate-x-1/2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                                <i class="fa fa-quote-left text-primary text-xs"></i>
                            </div>
                        </div>
                        <p class="text-slate-500 italic text-base leading-relaxed mb-6">"Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat."</p>
                    </div>
                    <div>
                        <hr class="w-12 mx-auto border-slate-200 mb-4">
                        <h3 class="text-lg font-bold text-secondary">Jane Smith</h3>
                        <h6 class="text-primary text-xs font-semibold uppercase tracking-wider">Teacher</h6>
                    </div>
                </div>

                <!-- Testimonial card 2 -->
                <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 text-center flex flex-col justify-between">
                    <div>
                        <div class="relative inline-block mb-6">
                            <img class="w-20 h-20 rounded-full mx-auto ring-4 ring-primary/20" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&h=150&q=80" alt="Patient Avatar">
                            <div class="absolute -bottom-2 right-1/2 translate-x-1/2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                                <i class="fa fa-quote-left text-primary text-xs"></i>
                            </div>
                        </div>
                        <p class="text-slate-500 italic text-base leading-relaxed mb-6">"Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat."</p>
                    </div>
                    <div>
                        <hr class="w-12 mx-auto border-slate-200 mb-4">
                        <h3 class="text-lg font-bold text-secondary">Robert Johnson</h3>
                        <h6 class="text-primary text-xs font-semibold uppercase tracking-wider">Business Owner</h6>
                    </div>
                </div>

                <!-- Testimonial card 3 -->
                <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 text-center flex flex-col justify-between">
                    <div>
                        <div class="relative inline-block mb-6">
                            <img class="w-20 h-20 rounded-full mx-auto ring-4 ring-primary/20" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=150&h=150&q=80" alt="Patient Avatar">
                            <div class="absolute -bottom-2 right-1/2 translate-x-1/2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                                <i class="fa fa-quote-left text-primary text-xs"></i>
                            </div>
                        </div>
                        <p class="text-slate-500 italic text-base leading-relaxed mb-6">"Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat."</p>
                    </div>
                    <div>
                        <hr class="w-12 mx-auto border-slate-200 mb-4">
                        <h3 class="text-lg font-bold text-secondary">Emily Davis</h3>
                        <h6 class="text-primary text-xs font-semibold uppercase tracking-wider">Software Engineer</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->
@endsection
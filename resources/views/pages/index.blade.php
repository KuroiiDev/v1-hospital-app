@extends('app')

@section('content')
    <!-- Hero Start -->
    <div class="relative bg-secondary overflow-hidden py-24 md:py-32 lg:py-48 flex items-center min-h-[600px] lg:min-h-[750px]">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover opacity-35" src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1920&q=80" alt="Hospital lobby background">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/85 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-2xl lg:max-w-3xl">
                <h5 class="text-primary text-base md:text-lg font-bold uppercase tracking-widest border-b-4 border-primary pb-2 inline-block mb-6">Welcome To PresiMedic</h5>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight mb-8">
                    Best Healthcare Solution In Your City
                </h1>
                <p class="text-lg md:text-xl text-slate-300 mb-10 leading-relaxed max-w-xl">
                    We offer comprehensive outpatient services, advanced diagnostic tools, and state-of-the-art emergency rooms to keep you and your family healthy.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('service') }}" class="px-8 py-4 bg-white hover:bg-slate-100 text-secondary font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px]">
                        Our Services
                    </a>
                    <a href="#appointment-section" class="px-8 py-4 border-2 border-white hover:bg-white hover:text-secondary text-white font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px]">
                        Appointment
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <section class="py-20 lg:py-28 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <!-- Image side -->
                <div class="lg:col-span-5 h-[400px] sm:h-[500px] lg:h-[600px] relative">
                    <img class="w-full h-full object-cover rounded-2xl shadow-xl" src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80" alt="About PresiMedic doctors">
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-primary/10 rounded-full -z-10"></div>
                </div>

                <!-- Text side -->
                <div class="lg:col-span-7">
                    <div class="mb-8">
                        <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">About Us</h5>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary leading-tight">Best Medical Care For Yourself and Your Family</h2>
                    </div>
                    <p class="text-slate-500 text-lg leading-relaxed mb-10">
                        Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod.
                    </p>
                    
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                        <div class="bg-slate-50 hover:bg-white hover:shadow-md border border-slate-100 transition-all duration-300 text-center rounded-2xl p-6">
                            <div class="inline-flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full mb-4">
                                <i class="fa fa-user-md text-2xl text-primary"></i>
                            </div>
                            <h3 class="font-bold text-secondary text-sm sm:text-base leading-tight">Qualified<span class="block text-primary text-xs font-normal mt-1">Doctors</span></h3>
                        </div>
                        
                        <div class="bg-slate-50 hover:bg-white hover:shadow-md border border-slate-100 transition-all duration-300 text-center rounded-2xl p-6">
                            <div class="inline-flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full mb-4">
                                <i class="fa fa-procedures text-2xl text-primary"></i>
                            </div>
                            <h3 class="font-bold text-secondary text-sm sm:text-base leading-tight">Emergency<span class="block text-primary text-xs font-normal mt-1">Services</span></h3>
                        </div>
                        
                        <div class="bg-slate-50 hover:bg-white hover:shadow-md border border-slate-100 transition-all duration-300 text-center rounded-2xl p-6">
                            <div class="inline-flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full mb-4">
                                <i class="fa fa-microscope text-2xl text-primary"></i>
                            </div>
                            <h3 class="font-bold text-secondary text-sm sm:text-base leading-tight">Accurate<span class="block text-primary text-xs font-normal mt-1">Testing</span></h3>
                        </div>
                        
                        <div class="bg-slate-50 hover:bg-white hover:shadow-md border border-slate-100 transition-all duration-300 text-center rounded-2xl p-6">
                            <div class="inline-flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full mb-4">
                                <i class="fa fa-ambulance text-2xl text-primary"></i>
                            </div>
                            <h3 class="font-bold text-secondary text-sm sm:text-base leading-tight">Free<span class="block text-primary text-xs font-normal mt-1">Ambulance</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->


    <!-- Services Start -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Services</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Excellent Medical Services</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service item 1 -->
                <div class="group bg-white hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-user-md text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Emergency Care</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="{{ route('service') }}" class="w-12 h-12 bg-slate-100 group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1" aria-label="Emergency Care Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 2 -->
                <div class="group bg-white hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-procedures text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Operation & Surgery</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="{{ route('service') }}" class="w-12 h-12 bg-slate-100 group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1" aria-label="Operation & Surgery Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 3 -->
                <div class="group bg-white hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-stethoscope text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Outdoor Checkup</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="{{ route('service') }}" class="w-12 h-12 bg-slate-100 group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1" aria-label="Outdoor Checkup Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 4 -->
                <div class="group bg-white hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-ambulance text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Ambulance Service</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="{{ route('service') }}" class="w-12 h-12 bg-slate-100 group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1" aria-label="Ambulance Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 5 -->
                <div class="group bg-white hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-pills text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Medicine & Pharmacy</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="{{ route('service') }}" class="w-12 h-12 bg-slate-100 group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1" aria-label="Medicine & Pharmacy Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>

                <!-- Service item 6 -->
                <div class="group bg-white hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa fa-microscope text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">Blood Testing</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                        Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit.
                    </p>
                    <a href="{{ route('service') }}" class="w-12 h-12 bg-slate-100 group-hover:bg-primary text-secondary group-hover:text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1" aria-label="Blood Testing Service">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->


    <!-- Appointment Start -->
    <section id="appointment-section" class="py-20 bg-primary/10">
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


    <!-- Pricing Plan Start -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Medical Packages</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Awesome Medical Programs</h2>
            </div>

            <!-- Pricing Grid (Migrated from Slider to responsive 4-column Grid) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Package 1 -->
                <div class="bg-slate-50 hover:bg-white border border-slate-100 hover:shadow-xl transition-all duration-300 rounded-3xl overflow-hidden flex flex-col justify-between">
                    <div class="relative h-48 overflow-hidden group">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1518241353330-0f7941c2d9b5?auto=format&fit=crop&w=600&q=80" alt="Pregnancy Care">
                        <div class="absolute inset-0 bg-secondary/80 flex flex-col items-center justify-center p-4">
                            <h3 class="text-white text-xl font-bold mb-2">Pregnancy Care</h3>
                            <div class="text-white flex items-baseline">
                                <span class="text-lg font-semibold mr-1">$</span>
                                <span class="text-4xl font-extrabold">49</span>
                                <span class="text-sm font-normal text-slate-300 ml-1">/ Year</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 text-center flex-grow flex flex-col justify-between">
                        <ul class="space-y-4 text-sm text-slate-500 mb-8">
                            <li class="border-b border-slate-200/50 pb-2">Emergency Medical Treatment</li>
                            <li class="border-b border-slate-200/50 pb-2">Highly Experienced Doctors</li>
                            <li class="border-b border-slate-200/50 pb-2">Highest Success Rate</li>
                            <li class="pb-2">Telephone Service</li>
                        </ul>
                        <a href="#!" class="inline-block py-3 px-8 bg-primary hover:bg-primary-hover text-secondary font-bold rounded-full transition-all shadow-md">Apply Now</a>
                    </div>
                </div>

                <!-- Package 2 -->
                <div class="bg-slate-50 hover:bg-white border border-slate-100 hover:shadow-xl transition-all duration-300 rounded-3xl overflow-hidden flex flex-col justify-between">
                    <div class="relative h-48 overflow-hidden group">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=600&q=80" alt="Health Checkup">
                        <div class="absolute inset-0 bg-secondary/80 flex flex-col items-center justify-center p-4">
                            <h3 class="text-white text-xl font-bold mb-2">Health Checkup</h3>
                            <div class="text-white flex items-baseline">
                                <span class="text-lg font-semibold mr-1">$</span>
                                <span class="text-4xl font-extrabold">99</span>
                                <span class="text-sm font-normal text-slate-300 ml-1">/ Year</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 text-center flex-grow flex flex-col justify-between">
                        <ul class="space-y-4 text-sm text-slate-500 mb-8">
                            <li class="border-b border-slate-200/50 pb-2">Emergency Medical Treatment</li>
                            <li class="border-b border-slate-200/50 pb-2">Highly Experienced Doctors</li>
                            <li class="border-b border-slate-200/50 pb-2">Highest Success Rate</li>
                            <li class="pb-2">Telephone Service</li>
                        </ul>
                        <a href="#!" class="inline-block py-3 px-8 bg-primary hover:bg-primary-hover text-secondary font-bold rounded-full transition-all shadow-md">Apply Now</a>
                    </div>
                </div>

                <!-- Package 3 -->
                <div class="bg-slate-50 hover:bg-white border border-slate-100 hover:shadow-xl transition-all duration-300 rounded-3xl overflow-hidden flex flex-col justify-between">
                    <div class="relative h-48 overflow-hidden group">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=600&q=80" alt="Dental Care">
                        <div class="absolute inset-0 bg-secondary/80 flex flex-col items-center justify-center p-4">
                            <h3 class="text-white text-xl font-bold mb-2">Dental Care</h3>
                            <div class="text-white flex items-baseline">
                                <span class="text-lg font-semibold mr-1">$</span>
                                <span class="text-4xl font-extrabold">149</span>
                                <span class="text-sm font-normal text-slate-300 ml-1">/ Year</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 text-center flex-grow flex flex-col justify-between">
                        <ul class="space-y-4 text-sm text-slate-500 mb-8">
                            <li class="border-b border-slate-200/50 pb-2">Emergency Medical Treatment</li>
                            <li class="border-b border-slate-200/50 pb-2">Highly Experienced Doctors</li>
                            <li class="border-b border-slate-200/50 pb-2">Highest Success Rate</li>
                            <li class="pb-2">Telephone Service</li>
                        </ul>
                        <a href="#!" class="inline-block py-3 px-8 bg-primary hover:bg-primary-hover text-secondary font-bold rounded-full transition-all shadow-md">Apply Now</a>
                    </div>
                </div>

                <!-- Package 4 -->
                <div class="bg-slate-50 hover:bg-white border border-slate-100 hover:shadow-xl transition-all duration-300 rounded-3xl overflow-hidden flex flex-col justify-between">
                    <div class="relative h-48 overflow-hidden group">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&w=600&q=80" alt="Operation & Surgery">
                        <div class="absolute inset-0 bg-secondary/80 flex flex-col items-center justify-center p-4">
                            <h3 class="text-white text-xl font-bold mb-2">Operation & Surgery</h3>
                            <div class="text-white flex items-baseline">
                                <span class="text-lg font-semibold mr-1">$</span>
                                <span class="text-4xl font-extrabold">199</span>
                                <span class="text-sm font-normal text-slate-300 ml-1">/ Year</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 text-center flex-grow flex flex-col justify-between">
                        <ul class="space-y-4 text-sm text-slate-500 mb-8">
                            <li class="border-b border-slate-200/50 pb-2">Emergency Medical Treatment</li>
                            <li class="border-b border-slate-200/50 pb-2">Highly Experienced Doctors</li>
                            <li class="border-b border-slate-200/50 pb-2">Highest Success Rate</li>
                            <li class="pb-2">Telephone Service</li>
                        </ul>
                        <a href="#!" class="inline-block py-3 px-8 bg-primary hover:bg-primary-hover text-secondary font-bold rounded-full transition-all shadow-md">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Our Doctors</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Qualified Healthcare Professionals</h2>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Doctor Card 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64">
                    <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?auto=format&fit=crop&w=600&q=80" alt="Doctor Name">
                    </div>
                    <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-1">Dr. John Doe</h3>
                            <h6 class="text-primary text-xs font-semibold uppercase tracking-wider italic mb-4">Cardiology Specialist</h6>
                            <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor.</p>
                        </div>
                        <div class="flex items-center space-x-3 mt-4 border-t border-slate-100 pt-4">
                            <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="#!" aria-label="Twitter"><i class="fab fa-twitter text-sm"></i></a>
                            <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f text-sm"></i></a>
                            <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-sm"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Doctor Card 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64">
                    <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=600&q=80" alt="Doctor Name">
                    </div>
                    <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-1">Dr. Alex Smith</h3>
                            <h6 class="text-primary text-xs font-semibold uppercase tracking-wider italic mb-4">Cardiology Specialist</h6>
                            <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor.</p>
                        </div>
                        <div class="flex items-center space-x-3 mt-4 border-t border-slate-100 pt-4">
                            <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="#!" aria-label="Twitter"><i class="fab fa-twitter text-sm"></i></a>
                            <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f text-sm"></i></a>
                            <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-sm"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Doctor Card 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64">
                    <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=600&q=80" alt="Doctor Name">
                    </div>
                    <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-1">Dr. Sarah Jenkins</h3>
                            <h6 class="text-primary text-xs font-semibold uppercase tracking-wider italic mb-4">Cardiology Specialist</h6>
                            <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor.</p>
                        </div>
                        <div class="flex items-center space-x-3 mt-4 border-t border-slate-100 pt-4">
                            <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="#!" aria-label="Twitter"><i class="fab fa-twitter text-sm"></i></a>
                            <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f text-sm"></i></a>
                            <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->


    <!-- Search Start -->
    <section class="bg-secondary py-16 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-15">
            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1920&q=80" alt="Hospital search background">
        </div>
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-10 max-w-xl mx-auto">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Find A Doctor</h5>
                <h2 class="text-3xl sm:text-4xl font-bold leading-tight">Find Healthcare Professionals</h2>
                <p class="text-slate-400 mt-4 text-sm leading-relaxed">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est.</p>
            </div>
            
            <form action="#" class="max-w-2xl mx-auto bg-white/10 backdrop-blur-md p-3 rounded-2xl shadow-xl flex flex-col md:flex-row gap-3">
                <div class="w-full md:w-1/3">
                    <label for="search-dept" class="sr-only">Department</label>
                    <select id="search-dept" class="w-full bg-slate-900/40 text-white border-0 border-b border-white/20 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-sm placeholder-slate-400">
                        <option selected>Department</option>
                        <option value="1">Department 1</option>
                        <option value="2">Department 2</option>
                        <option value="3">Department 3</option>
                    </select>
                </div>
                <div class="w-full md:w-1/2">
                    <label for="keyword" class="sr-only">Keyword</label>
                    <input type="text" id="keyword" placeholder="Keyword" class="w-full bg-slate-900/40 text-white border-0 border-b border-white/20 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-sm placeholder-slate-400">
                </div>
                <div class="w-full md:w-1/6">
                    <button type="submit" class="w-full py-3 bg-primary hover:bg-primary-hover text-secondary font-bold rounded-lg transition-colors text-sm uppercase">Search</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Search End -->


    <!-- Testimonial Start -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Testimonial</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Patients Say About Our Services</h2>
            </div>

            <!-- Testimonials Grid (Premium static cards instead of carousel) -->
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


    <!-- Blog Start -->
    <section class="py-20 lg:py-28 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Blog Post</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Our Latest Medical Blog Posts</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Blog Item 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 overflow-hidden group">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80" alt="Blog Post Title">
                        </div>
                        <div class="p-6">
                            <a href="#!" class="h4 text-xl font-bold text-secondary hover:text-primary transition-colors mb-3 block leading-tight">Dolor clita vero elitr sea stet dolor justo diam</a>
                            <p class="text-slate-500 text-sm leading-relaxed mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna rebum clita rebum dolor stet amet justo.</p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img class="w-7 h-7 rounded-full object-cover ring-2 ring-primary/20" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=100&h=100&q=80" alt="Author">
                            <span class="text-xs text-slate-500 font-medium">John Doe</span>
                        </div>
                        <div class="flex items-center space-x-3 text-xs text-slate-400">
                            <span><i class="far fa-eye text-primary mr-1"></i>12k</span>
                            <span><i class="far fa-comment text-primary mr-1"></i>89</span>
                        </div>
                    </div>
                </div>

                <!-- Blog Item 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 overflow-hidden group">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=600&q=80" alt="Blog Post Title">
                        </div>
                        <div class="p-6">
                            <a href="#!" class="h4 text-xl font-bold text-secondary hover:text-primary transition-colors mb-3 block leading-tight">Dolor clita vero elitr sea stet dolor justo diam</a>
                            <p class="text-slate-500 text-sm leading-relaxed mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna rebum clita rebum dolor stet amet justo.</p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img class="w-7 h-7 rounded-full object-cover ring-2 ring-primary/20" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=100&h=100&q=80" alt="Author">
                            <span class="text-xs text-slate-500 font-medium">John Doe</span>
                        </div>
                        <div class="flex items-center space-x-3 text-xs text-slate-400">
                            <span><i class="far fa-eye text-primary mr-1"></i>9.4k</span>
                            <span><i class="far fa-comment text-primary mr-1"></i>74</span>
                        </div>
                    </div>
                </div>

                <!-- Blog Item 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative h-56 overflow-hidden group">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1504813184591-01557010c722?auto=format&fit=crop&w=600&q=80" alt="Blog Post Title">
                        </div>
                        <div class="p-6">
                            <a href="#!" class="h4 text-xl font-bold text-secondary hover:text-primary transition-colors mb-3 block leading-tight">Dolor clita vero elitr sea stet dolor justo diam</a>
                            <p class="text-slate-500 text-sm leading-relaxed mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna rebum clita rebum dolor stet amet justo.</p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img class="w-7 h-7 rounded-full object-cover ring-2 ring-primary/20" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=100&h=100&q=80" alt="Author">
                            <span class="text-xs text-slate-500 font-medium">John Doe</span>
                        </div>
                        <div class="flex items-center space-x-3 text-xs text-slate-400">
                            <span><i class="far fa-eye text-primary mr-1"></i>14.8k</span>
                            <span><i class="far fa-comment text-primary mr-1"></i>105</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->
@endsection
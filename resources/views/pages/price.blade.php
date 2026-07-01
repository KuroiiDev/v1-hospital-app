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
                Pricing Plan
            </h1>
            <div class="inline-flex items-center space-x-2 text-sm text-slate-350 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full">
                <a href="{{ route('home') }}" class="text-primary hover:underline">Home</a>
                <span class="text-slate-400">/</span>
                <span class="text-white">Pricing Plan</span>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Pricing Plan Start -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Medical Packages</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Awesome Medical Programs</h2>
            </div>

            <!-- Pricing Grid -->
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


    <!-- Team Start -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">Our Doctors</h5>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Qualified Healthcare Professionals</h2>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Doctor Card 1 -->
                <div class="bg-slate-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64">
                    <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?auto=format&fit=crop&w=600&q=80" alt="Doctor Name">
                    </div>
                    <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-1">Dr. John Doe</h3>
                            <h6 class="text-primary text-xs font-semibold uppercase tracking-wider italic mb-4">Cardiology Specialist</h6>
                            <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor.</p>
                        </div>
                        <div class="flex items-center space-x-3 mt-4 border-t border-slate-200/60 pt-4">
                            <a class="w-9 h-9 bg-white text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors shadow-sm" href="#!" aria-label="Twitter"><i class="fab fa-twitter text-sm"></i></a>
                            <a class="w-9 h-9 bg-white text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors shadow-sm" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f text-sm"></i></a>
                            <a class="w-9 h-9 bg-white text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors shadow-sm" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-sm"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Doctor Card 2 -->
                <div class="bg-slate-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64">
                    <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=600&q=80" alt="Doctor Name">
                    </div>
                    <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-1">Dr. Alex Smith</h3>
                            <h6 class="text-primary text-xs font-semibold uppercase tracking-wider italic mb-4">Cardiology Specialist</h6>
                            <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor.</p>
                        </div>
                        <div class="flex items-center space-x-3 mt-4 border-t border-slate-200/60 pt-4">
                            <a class="w-9 h-9 bg-white text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors shadow-sm" href="#!" aria-label="Twitter"><i class="fab fa-twitter text-sm"></i></a>
                            <a class="w-9 h-9 bg-white text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors shadow-sm" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f text-sm"></i></a>
                            <a class="w-9 h-9 bg-white text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors shadow-sm" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-sm"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Doctor Card 3 -->
                <div class="bg-slate-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64">
                    <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=600&q=80" alt="Doctor Name">
                    </div>
                    <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-1">Dr. Sarah Jenkins</h3>
                            <h6 class="text-primary text-xs font-semibold uppercase tracking-wider italic mb-4">Cardiology Specialist</h6>
                            <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor.</p>
                        </div>
                        <div class="flex items-center space-x-3 mt-4 border-t border-slate-200/60 pt-4">
                            <a class="w-9 h-9 bg-white text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors shadow-sm" href="#!" aria-label="Twitter"><i class="fab fa-twitter text-sm"></i></a>
                            <a class="w-9 h-9 bg-white text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors shadow-sm" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f text-sm"></i></a>
                            <a class="w-9 h-9 bg-white text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors shadow-sm" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->
@endsection
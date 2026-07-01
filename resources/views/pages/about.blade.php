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
                About Us
            </h1>
            <div class="inline-flex items-center space-x-2 text-sm text-slate-350 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full">
                <a href="{{ route('home') }}" class="text-primary hover:underline">Home</a>
                <span class="text-slate-400">/</span>
                <span class="text-white">About Us</span>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <section class="py-20 lg:py-28 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <!-- Image side -->
                <div class="lg:col-span-5 h-[400px] sm:h-[500px] lg:h-[600px] relative">
                    <img class="w-full h-full object-cover rounded-2xl shadow-xl" src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80" alt="About Medinova doctors">
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
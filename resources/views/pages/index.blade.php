@extends('app')

@section('content')

@auth
    <form action="{{ route('home.update') }}" method="POST" id="content-edit-form" class="m-0 p-0">
        @csrf
        @method('PUT')
        <div id="deleted-cards-container"></div>
@endauth

    <div class="relative bg-secondary overflow-hidden py-24 md:py-32 lg:py-48 flex items-center min-h-[600px] lg:min-h-[750px]">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover opacity-35" src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1920&q=80" alt="Hospital lobby background">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/85 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-2xl lg:max-w-3xl">
                @auth
                    <input type="text" 
                        name="texts[hero_badge]" 
                        value="{{ $texts['hero_badge'] }}" 
                        class="bg-transparent text-primary text-base md:text-lg font-bold uppercase tracking-widest border-b-4 border-dashed border-primary/60 pb-2 inline-block mb-6 focus:border-primary focus:ring-0 p-0 max-w-full"
                        style="width: {{ strlen($texts['hero_badge'] ?? '') * 0.65 }}rem;">
                @else
                    <h5 class="text-primary text-base md:text-lg font-bold uppercase tracking-widest border-b-4 border-primary pb-2 inline-block mb-6">
                        {{ $texts['hero_badge'] }}
                    </h5>
                @endauth
                
                @auth
                    <input type="text" 
                        name="texts[hero_title]" 
                        value="{{ $texts['hero_title'] }}" 
                        class="bg-transparent text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight tracking-tight mb-8 border-b-4 border-dashed border-white/20 focus:border-primary focus:ring-0 p-0 w-full">
                @else
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight mb-8">
                        {{ $texts['hero_title'] }}
                    </h1>
                @endauth

                @auth
                    <textarea name="texts[hero_desc]" 
                        rows="3"
                        class="w-full bg-transparent text-lg md:text-xl text-slate-300 mb-10 leading-relaxed max-w-xl border-2 border-dashed border-white/20 focus:border-primary focus:ring-0 p-0 resize-none">{{ $texts['hero_desc'] }}</textarea>
                @else
                    <p class="text-lg md:text-xl text-slate-300 mb-10 leading-relaxed max-w-xl">
                        {{ $texts['hero_desc'] }}
                    </p>
                @endauth
                
                <div class="flex flex-wrap gap-4">
                    @auth
                        <input type="text" 
                            name="texts[hero_btn_1_text]" 
                            value="{{ $texts['hero_btn_1_text'] }}" 
                            class="px-8 py-4 bg-white hover:bg-slate-100 text-secondary font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px] border-2 border-dashed border-primary/40 focus:border-primary focus:ring-0 p-0">
                        <input type="text" 
                            name="texts[hero_btn_2_text]" 
                            value="{{ $texts['hero_btn_2_text'] }}" 
                            class="px-8 py-4 border-2 border-white hover:bg-white hover:text-secondary text-white font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px] border-2 border-dashed border-white/40 focus:border-primary focus:ring-0 p-0">
                    @else
                        <a href="#" class="px-8 py-4 bg-white hover:bg-slate-100 text-secondary font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px]">
                            {{ $texts['hero_btn_1_text'] }}
                        </a>
                        <a href="#" class="px-8 py-4 border-2 border-white hover:bg-white hover:text-secondary text-white font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px]">
                            {{ $texts['hero_btn_2_text'] }}
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <section class="py-20 lg:py-28 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-5 h-[400px] sm:h-[500px] lg:h-[600px] relative">
                    <img class="w-full h-full object-cover rounded-2xl shadow-xl" src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80" alt="About PresiMedic doctors">
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-primary/10 rounded-full -z-10"></div>
                </div>

                <div class="lg:col-span-7">
                    <div class="mb-8">
                        @auth
                            <input type="text" 
                                name="texts[about_badge]" 
                                value="{{ $texts['about_badge'] }}" 
                                class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 max-w-full"
                                style="width: {{ strlen($texts['about_badge'] ?? '') * 0.65 }}rem;">
                        @else
                            <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                                {{ $texts['about_badge'] }}
                            </h5>
                        @endauth

                        @auth
                            <input type="text" 
                                name="texts[about_title]" 
                                value="{{ $texts['about_title'] }}" 
                                class="bg-transparent text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary leading-tight border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 w-full">
                        @else
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary leading-tight">
                                {{ $texts['about_title'] }}
                            </h2>
                        @endauth
                    </div>

                    @auth
                        <textarea name="texts[about_desc]" 
                            rows="4"
                            class="w-full bg-transparent text-slate-500 text-lg leading-relaxed mb-10 border-2 border-dashed border-slate-200 focus:border-primary focus:ring-0 p-0 resize-none">{{ $texts['about_desc'] }}</textarea>
                    @else
                        <p class="text-slate-500 text-lg leading-relaxed mb-10">
                            {{ $texts['about_desc'] }}
                        </p>
                    @endauth
                    
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6" id="about-cards-container">
                        @foreach($aboutCards as $card)
                            <div class="bg-slate-50 hover:bg-white hover:shadow-md border border-slate-100 transition-all duration-300 text-center rounded-2xl p-6 relative group card-item" data-id="{{ $card->id }}">
                                @auth
                                    <button type="button" onclick="removeCard(this, '{{ $card->id }}')" class="absolute top-2 right-2 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow" title="Hapus Card">
                                        <i class="fas fa-trash-alt text-xs"></i>
                                    </button>
                                @endauth
                                <div class="inline-flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full mb-4">
                                    @auth
                                        <input type="text" name="cards[{{ $card->id }}][icon]" value="{{ $card->icon }}" class="bg-transparent text-primary text-center text-xs focus:ring-0 p-0 border-b border-dashed border-primary/40 w-full" placeholder="Icon Class">
                                    @else
                                        <i class="{{ $card->icon }} text-2xl text-primary"></i>
                                    @endauth
                                </div>
                                @auth
                                    <input type="text" name="cards[{{ $card->id }}][title]" value="{{ $card->title }}" class="bg-transparent font-bold text-secondary text-sm sm:text-base text-center focus:ring-0 p-0 border-b border-dashed border-primary/20 w-full" placeholder="Judul Card">
                                    <input type="hidden" name="cards[{{ $card->id }}][section]" value="about">
                                @else
                                    <h3 class="font-bold text-secondary text-sm sm:text-base leading-tight">
                                        {{ explode(' ', $card->title)[0] ?? '' }}<span class="block text-primary text-xs font-normal mt-1">{{ substr(strstr($card->title ?? '', ' '), 1) }}</span>
                                    </h3>
                                @endauth
                            </div>
                        @endforeach

                        @auth
                            <button type="button" onclick="addAboutCard()" class="bg-slate-50 hover:bg-slate-100 border-2 border-dashed border-slate-300 transition-all duration-300 flex flex-col items-center justify-center rounded-2xl p-6 min-h-[140px]" id="btn-add-about">
                                <i class="fa fa-plus text-xl text-slate-400 mb-2"></i>
                                <span class="text-xs font-bold text-slate-500">Tambah Card</span>
                            </button>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                @auth
                    <input type="text" 
                        name="texts[services_badge]" 
                        value="{{ $texts['services_badge'] }}" 
                        class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 max-w-full text-center"
                        style="width: {{ strlen($texts['services_badge'] ?? '') * 0.65 }}rem;">
                @else
                    <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                        {{ $texts['services_badge'] }}
                    </h5>
                @endauth

                @auth
                    <input type="text" 
                        name="texts[services_title]" 
                        value="{{ $texts['services_title'] }}" 
                        class="bg-transparent text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 text-center w-full">
                @else
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">
                        {{ $texts['services_title'] }}
                    </h2>
                @endauth
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="service-cards-container">
                @foreach($serviceCards as $card)
                    <div class="group bg-white hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center relative card-item" data-id="{{ $card->id }}">
                        @auth
                            <button type="button" onclick="removeCard(this, '{{ $card->id }}')" class="absolute top-4 right-4 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-7 h-7 rounded-full flex items-center justify-center shadow z-10" title="Hapus Card">
                                <i class="fas fa-trash-alt text-xs"></i>
                            </button>
                        @endauth
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                            @auth
                                <input type="text" name="cards[{{ $card->id }}][icon]" value="{{ $card->icon }}" class="bg-transparent text-white text-center text-xs focus:ring-0 p-0 border-b border-dashed border-white/40 w-full" placeholder="Icon Class">
                            @else
                                <i class="{{ $card->icon }} text-2xl"></i>
                            @endauth
                        </div>
                        @auth
                            <input type="text" name="cards[{{ $card->id }}][title]" value="{{ $card->title }}" class="bg-transparent text-xl font-bold text-secondary group-hover:text-white mb-4 text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full" placeholder="Judul Layanan">
                            <textarea name="cards[{{ $card->id }}][text]" rows="3" class="w-full bg-transparent text-slate-500 group-hover:text-slate-400 mb-6 text-sm text-center border border-dashed border-slate-200 focus:ring-0 p-0 resize-none" placeholder="Deskripsi Singkat">{{ $card->text }}</textarea>
                            <input type="hidden" name="cards[{{ $card->id }}][section]" value="service">
                        @else
                            <h3 class="text-xl font-bold text-secondary group-hover:text-white mb-4 transition-colors">{{ $card->title }}</h3>
                            <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                                {{ $card->text }}
                            </p>
                        @endauth
                        <a href="{{ route('service') }}" class="w-12 h-12 bg-slate-100 group-hover:bg-primary text-secondary rounded-full flex items-center justify-center transition-all group-hover:translate-y-1">
                            <i class="bi bi-arrow-right text-lg"></i>
                        </a>
                    </div>
                @endforeach

                @auth
                    <button type="button" onclick="addServiceCard()" class="group bg-transparent hover:bg-white border-2 border-dashed border-slate-300 hover:border-primary rounded-2xl p-8 min-h-[320px] transition-all duration-300 flex flex-col items-center justify-center text-center w-full" id="btn-add-service">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-slate-100 group-hover:bg-primary/10 text-slate-400 group-hover:text-primary rounded-2xl mb-6 transition-all">
                            <i class="fa fa-plus text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-400 group-hover:text-primary mb-2">Tambah Layanan</h3>
                        <p class="text-slate-400 text-sm max-w-[200px]">Klik di sini untuk menambahkan kartu layanan medis baru</p>
                    </button>
                @endauth
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                @auth
                    <input type="text" 
                        name="texts[doctors_badge]" 
                        value="{{ $texts['doctors_badge'] }}" 
                        class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 max-w-full text-center"
                        style="width: {{ strlen($texts['doctors_badge'] ?? '') * 0.65 }}rem;">
                @else
                    <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                        {{ $texts['doctors_badge'] }}
                    </h5>
                @endauth

                @auth
                    <input type="text" 
                        name="texts[doctors_title]" 
                        value="{{ $texts['doctors_title'] }}" 
                        class="bg-transparent text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 text-center w-full">
                @else
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">
                        {{ $texts['doctors_title'] }}
                    </h2>
                @endauth
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8" id="doctors-container">
                @foreach($doctors as $doctor)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64 relative group card-item" data-id="{{ $doctor->id }}">
                        @auth
                            <button type="button" onclick="removeDoctorCard(this, '{{ $doctor->id }}')" class="absolute top-2 right-2 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow z-20" title="Hapus Dokter">
                                <i class="fas fa-trash-alt text-xs"></i>
                            </button>
                        @endauth
                        <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden relative">
                            <img class="w-full h-full object-cover" src="{{ $doctor->image }}" alt="{{ $doctor->name }}">
                            @auth
                                <input type="text" name="doctors[{{ $doctor->id }}][image]" value="{{ $doctor->image }}" class="absolute bottom-0 inset-x-0 bg-black/60 text-white text-[10px] p-1 focus:ring-0 border-none text-center" placeholder="URL Gambar">
                            @endauth
                        </div>
                        <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                            <div>
                                @auth
                                    <input type="text" name="doctors[{{ $doctor->id }}][name]" value="{{ $doctor->name }}" class="bg-transparent text-xl font-bold text-secondary focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-1" placeholder="Nama Dokter">
                                    <input type="text" name="doctors[{{ $doctor->id }}][title]" value="{{ $doctor->title }}" class="bg-transparent text-primary text-xs font-semibold uppercase tracking-wider italic focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-3" placeholder="Spesialisasi">
                                    <textarea name="doctors[{{ $doctor->id }}][text]" rows="2" class="w-full bg-transparent text-slate-500 text-sm border border-dashed border-slate-200 focus:ring-0 p-0 resize-none leading-relaxed" placeholder="Biografi singkat">{{ $doctor->text }}</textarea>
                                @else
                                    <h3 class="text-xl font-bold text-secondary mb-1">{{ $doctor->name }}</h3>
                                    <h6 class="text-primary text-xs font-semibold uppercase tracking-wider italic mb-4">{{ $doctor->title }}</h6>
                                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">{{ $doctor->text }}</p>
                                @endauth
                            </div>
                            <div class="flex items-center space-x-3 mt-4 border-t border-slate-100 pt-4">
                                @auth
                                    <input type="text" name="doctors[{{ $doctor->id }}][twitter]" value="{{ $doctor->twitter }}" class="bg-transparent text-[10px] w-12 border-b border-dashed border-slate-300 focus:ring-0 p-0" placeholder="Twitter">
                                    <input type="text" name="doctors[{{ $doctor->id }}][fb]" value="{{ $doctor->fb }}" class="bg-transparent text-[10px] w-12 border-b border-dashed border-slate-300 focus:ring-0 p-0" placeholder="Facebook">
                                    <input type="text" name="doctors[{{ $doctor->id }}][linkedin]" value="{{ $doctor->linkedin }}" class="bg-transparent text-[10px] w-12 border-b border-dashed border-slate-300 focus:ring-0 p-0" placeholder="LinkedIn">
                                @else
                                    <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="{{ $doctor->twitter }}"><i class="fab fa-twitter text-sm"></i></a>
                                    <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="{{ $doctor->fb }}"><i class="fab fa-facebook-f text-sm"></i></a>
                                    <a class="w-9 h-9 bg-slate-100 text-slate-500 hover:bg-primary hover:text-secondary rounded-full flex items-center justify-center transition-colors" href="{{ $doctor->linkedin }}"><i class="fab fa-linkedin-in text-sm"></i></a>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach

                @auth
                    <button type="button" onclick="addDoctorCard()" class="group bg-transparent hover:bg-white border-2 border-dashed border-slate-300 hover:border-primary rounded-2xl overflow-hidden shadow-sm h-auto sm:h-64 transition-all duration-300 flex flex-col items-center justify-center text-center p-6 w-full" id="btn-add-doctor">
                        <div class="inline-flex items-center justify-center w-14 h-14 bg-slate-100 group-hover:bg-primary/10 text-slate-400 group-hover:text-primary rounded-full mb-3 transition-all">
                            <i class="fa fa-plus text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-400 group-hover:text-primary mb-1">Tambah Dokter</h3>
                        <p class="text-slate-400 text-xs max-w-[180px]">Klik untuk mendaftarkan tenaga medis baru</p>
                    </button>
                @endauth
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-16">
                @auth
                    <input type="text" 
                        name="texts[testimony_badge]" 
                        value="{{ $texts['testimony_badge'] }}" 
                        class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 max-w-full text-center"
                        style="width: {{ strlen($texts['testimony_badge'] ?? '') * 0.65 }}rem;">
                @else
                    <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                        {{ $texts['testimony_badge'] }}
                    </h5>
                @endauth

                @auth
                    <input type="text" 
                        name="texts[testimony_title]" 
                        value="{{ $texts['testimony_title'] }}" 
                        class="bg-transparent text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 text-center w-full">
                @else
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">
                        {{ $texts['testimony_title'] }}
                    </h2>
                @endauth
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8" id="testimonials-container">
                @foreach($testimonials as $testimony)
                    <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 text-center flex flex-col justify-between relative group card-item" data-id="{{ $testimony->id }}">
                        @auth
                            <button type="button" onclick="removeTestimonyCard(this, '{{ $testimony->id }}')" class="absolute top-4 right-4 group-hover:opacity-100 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow z-20" title="Hapus Testimoni">
                                <i class="fas fa-trash-alt text-xs"></i>
                            </button>
                        @endauth
                        <div>
                            <div class="relative inline-block mb-6">
                                <img class="w-20 h-20 rounded-full mx-auto ring-4 ring-primary/20" src="{{ $testimony->image }}" alt="Patient Avatar">
                                @auth
                                    <input type="text" name="testimonials[{{ $testimony->id }}][image]" value="{{ $testimony->image }}" class="absolute bottom-0 inset-x-0 bg-black/60 text-white text-[9px] p-0.5 focus:ring-0 border-none text-center rounded" placeholder="Img URL">
                                @endauth
                                <div class="absolute -bottom-2 right-1/2 translate-x-1/2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                                    <i class="fa fa-quote-left text-primary text-xs"></i>
                                </div>
                            </div>
                            @auth
                                <textarea name="testimonials[{{ $testimony->id }}][text]" rows="4" class="w-full bg-transparent text-slate-500 italic text-base text-center border border-dashed border-slate-200 focus:ring-0 p-0 resize-none mb-6" placeholder="Tulis review pasien...">{{ $testimony->text }}</textarea>
                            @else
                                <p class="text-slate-500 italic text-base leading-relaxed mb-6">"{{ $testimony->text }}"</p>
                            @endauth
                        </div>
                        <div>
                            <hr class="w-12 mx-auto border-slate-200 mb-4">
                            @auth
                                <input type="text" name="testimonials[{{ $testimony->id }}][name]" value="{{ $testimony->name }}" class="bg-transparent text-lg font-bold text-secondary text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-1" placeholder="Nama Pasien">
                                <input type="text" name="testimonials[{{ $testimony->id }}][title]" value="{{ $testimony->title }}" class="bg-transparent text-primary text-xs font-semibold uppercase tracking-wider text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full" placeholder="Pekerjaan / Jabatan">
                            @else
                                <h3 class="text-lg font-bold text-secondary">{{ $testimony->name }}</h3>
                                <h6 class="text-primary text-xs font-semibold uppercase tracking-wider">{{ $testimony->title }}</h6>
                            @endauth
                        </div>
                    </div>
                @endforeach

                @auth
                    <button type="button" onclick="addTestimonyCard()" class="group bg-transparent hover:bg-slate-50 border-2 border-dashed border-slate-300 hover:border-primary rounded-3xl p-8 transition-all duration-300 text-center flex flex-col items-center justify-center min-h-[360px] w-full" id="btn-add-testimony">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-slate-100 group-hover:bg-primary/10 text-slate-400 group-hover:text-primary rounded-full mb-4 transition-all">
                            <i class="fa fa-plus text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-400 group-hover:text-primary mb-1">Tambah Testimoni</h3>
                        <p class="text-slate-400 text-xs max-w-[180px]">Klik untuk memasukkan review pasien baru</p>
                    </button>
                @endauth
            </div>
        </div>
    </section>

    @auth
        <div class="fixed bottom-6 right-6 flex flex-col gap-3 z-50">
            <a href="{{ url()->current() }}" 
                class="w-14 h-14 bg-white text-slate-500 border border-slate-200 rounded-full flex items-center justify-center shadow-lg hover:bg-red-50 hover:text-danger hover:border-danger hover:scale-110 active:scale-95 transition-all duration-300" 
                title="Batal & Refresh">
                <i class="fas fa-times text-xl"></i>
            </a>

            <button type="submit"
                    class="w-14 h-14 bg-primary text-secondary rounded-full flex items-center justify-center shadow-lg shadow-primary/30 hover:bg-white hover:text-primary hover:scale-110 active:scale-95 transition-all duration-300" 
                    title="Simpan Perubahan">
                <i class="fas fa-save text-xl"></i>
            </button>
        </div>
    </form>

    <script>
        function generateUniqueId() {
            return 'new_' + Date.now() + Math.random().toString(36).substr(2, 5);
        }

        function removeCard(button, cardId) {
            const cardItem = button.closest('.card-item');
            if (cardId && !cardId.startsWith('new_')) {
                const container = document.getElementById('deleted-cards-container');
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'delete_cards[]';
                hiddenInput.value = cardId;
                container.appendChild(hiddenInput);
            }
            cardItem.remove();
        }

        function removeDoctorCard(button, doctorId) {
            const cardItem = button.closest('.card-item');
            if (doctorId && !doctorId.startsWith('new_')) {
                const container = document.getElementById('deleted-cards-container');
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'delete_doctors[]';
                hiddenInput.value = doctorId;
                container.appendChild(hiddenInput);
            }
            cardItem.remove();
        }

        function removeTestimonyCard(button, testimonyId) {
            const cardItem = button.closest('.card-item');
            if (testimonyId && !testimonyId.startsWith('new_')) {
                const container = document.getElementById('deleted-cards-container');
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'delete_testimonials[]';
                hiddenInput.value = testimonyId;
                container.appendChild(hiddenInput);
            }
            cardItem.remove();
        }

        function addAboutCard() {
            const btnAdd = document.getElementById('btn-add-about');
            const newId = generateUniqueId();
            const cardHtml = `
                <div class="bg-slate-50 hover:bg-white hover:shadow-md border border-slate-100 transition-all duration-300 text-center rounded-2xl p-6 relative group card-item">
                    <button type="button" onclick="removeCard(this, '${newId}')" class="absolute top-2 right-2 opacity-100 bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow" title="Hapus Card">
                        <i class="fas fa-trash-alt text-xs"></i>
                    </button>
                    <div class="inline-flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full mb-4">
                        <input type="text" name="new_cards[${newId}][icon]" value="fas fa-heartbeat" class="bg-transparent text-primary text-center text-xs focus:ring-0 p-0 border-b border-dashed border-primary/40 w-full" placeholder="Icon Class">
                    </div>
                    <input type="text" name="new_cards[${newId}][title]" value="" class="bg-transparent font-bold text-secondary text-sm sm:text-base text-center focus:ring-0 p-0 border-b border-dashed border-primary/20 w-full" placeholder="Judul Card" required>
                    <input type="hidden" name="new_cards[${newId}][section]" value="about">
                </div>
            `;
            btnAdd.insertAdjacentHTML('beforebegin', cardHtml);
        }

        function addServiceCard() {
            const btnAdd = document.getElementById('btn-add-service');
            const newId = generateUniqueId();
            const cardHtml = `
                <div class="group bg-white hover:bg-secondary rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center relative card-item">
                    <button type="button" onclick="removeCard(this, '${newId}')" class="absolute top-4 right-4 opacity-100 bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-7 h-7 rounded-full flex items-center justify-center shadow z-10" title="Hapus Card">
                        <i class="fas fa-trash-alt text-xs"></i>
                    </button>
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6">
                        <input type="text" name="new_cards[${newId}][icon]" value="bi bi-activity" class="bg-transparent text-white text-center text-xs focus:ring-0 p-0 border-b border-dashed border-white/40 w-full" placeholder="Icon Class">
                    </div>
                    <input type="text" name="new_cards[${newId}][title]" value="" class="bg-transparent text-xl font-bold text-secondary mb-4 text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full" placeholder="Layanan Baru" required>
                    <textarea name="new_cards[${newId}][text]" rows="3" class="w-full bg-transparent text-slate-500 mb-6 text-sm text-center border border-dashed border-slate-200 focus:ring-0 p-0 resize-none" placeholder="Deskripsi Layanan..." required></textarea>
                    <input type="hidden" name="new_cards[${newId}][section]" value="service">
                    <div class="w-12 h-12 bg-slate-100 text-secondary rounded-full flex items-center justify-center">
                        <i class="bi bi-arrow-right text-lg"></i>
                    </div>
                </div>
            `;
            btnAdd.insertAdjacentHTML('beforebegin', cardHtml);
        }

        function addDoctorCard() {
            const btnAdd = document.getElementById('btn-add-doctor');
            const newId = generateUniqueId();
            const cardHtml = `
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-slate-200/60 transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64 relative group card-item">
                    <button type="button" onclick="removeDoctorCard(this, '${newId}')" class="absolute top-2 right-2 opacity-100 bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow z-20" title="Hapus Dokter">
                        <i class="fas fa-trash-alt text-xs"></i>
                    </button>
                    <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=400&q=80" alt="New Doctor">
                        <input type="text" name="new_doctors[${newId}][image]" value="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=400&q=80" class="absolute bottom-0 inset-x-0 bg-black/60 text-white text-[10px] p-1 focus:ring-0 border-none text-center" placeholder="URL Gambar">
                    </div>
                    <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                        <div>
                            <input type="text" name="new_doctors[${newId}][name]" value="" class="bg-transparent text-xl font-bold text-secondary focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-1" placeholder="Nama Dokter" required>
                            <input type="text" name="new_doctors[${newId}][title]" value="" class="bg-transparent text-primary text-xs font-semibold uppercase tracking-wider italic focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-3" placeholder="Spesialisasi" required>
                            <textarea name="new_doctors[${newId}][text]" rows="2" class="w-full bg-transparent text-slate-500 text-sm border border-dashed border-slate-200 focus:ring-0 p-0 resize-none leading-relaxed" placeholder="Biografi Dokter..." required></textarea>
                        </div>
                        <div class="flex items-center space-x-3 mt-4 border-t border-slate-100 pt-4">
                            <input type="text" name="new_doctors[${newId}][twitter]" value="#" class="bg-transparent text-[10px] w-12 border-b border-dashed border-slate-300 focus:ring-0 p-0" placeholder="Twitter">
                            <input type="text" name="new_doctors[${newId}][fb]" value="#" class="bg-transparent text-[10px] w-12 border-b border-dashed border-slate-300 focus:ring-0 p-0" placeholder="Facebook">
                            <input type="text" name="new_doctors[${newId}][linkedin]" value="#" class="bg-transparent text-[10px] w-12 border-b border-dashed border-slate-300 focus:ring-0 p-0" placeholder="LinkedIn">
                        </div>
                    </div>
                </div>
            `;
            btnAdd.insertAdjacentHTML('beforebegin', cardHtml);
        }

        function addTestimonyCard() {
            const btnAdd = document.getElementById('btn-add-testimony');
            const newId = generateUniqueId();
            const cardHtml = `
                <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 text-center flex flex-col justify-between relative group card-item">
                    <button type="button" onclick="removeTestimonyCard(this, '${newId}')" class="absolute top-4 right-4 opacity-100 bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow z-20" title="Hapus Testimoni">
                        <i class="fas fa-trash-alt text-xs"></i>
                    </button>
                    <div>
                        <div class="relative inline-block mb-6">
                            <img class="w-20 h-20 rounded-full mx-auto ring-4 ring-primary/20" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&h=150&q=80" alt="Patient Avatar">
                            <input type="text" name="new_testimonials[${newId}][image]" value="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&h=150&q=80" class="absolute bottom-0 inset-x-0 bg-black/60 text-white text-[9px] p-0.5 focus:ring-0 border-none text-center rounded" placeholder="Img URL">
                            <div class="absolute -bottom-2 right-1/2 translate-x-1/2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                                <i class="fa fa-quote-left text-primary text-xs"></i>
                            </div>
                        </div>
                        <textarea name="new_testimonials[${newId}][text]" rows="4" class="w-full bg-transparent text-slate-500 italic text-base text-center border border-dashed border-slate-200 focus:ring-0 p-0 resize-none mb-6" placeholder="Tulis review testimoni..." required></textarea>
                    </div>
                    <div>
                        <hr class="w-12 mx-auto border-slate-200 mb-4">
                        <input type="text" name="new_testimonials[${newId}][name]" value="" class="bg-transparent text-lg font-bold text-secondary text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-1" placeholder="Nama Pasien" required>
                        <input type="text" name="new_testimonials[${newId}][title]" value="" class="bg-transparent text-primary text-xs font-semibold uppercase tracking-wider text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full" placeholder="Pekerjaan / Jabatan" required>
                    </div>
                </div>
            `;
            btnAdd.insertAdjacentHTML('beforebegin', cardHtml);
        }
    </script>
    @endauth

@endsection
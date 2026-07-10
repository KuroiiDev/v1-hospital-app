@extends('app')

@section('phone', $texts['contact_phone'] ?? '')
@section('email', $texts['contact_email'] ?? '')
@section('address', $texts['contact_address'] ?? '')
@section('instagram', $texts['contact_instagram'] ?? '')

@section('content')

    @auth
        <form action="{{ route('home.update') }}" method="POST" id="content-edit-form" class="m-0 p-0">
            @csrf
            @method('PUT')
            <div id="deleted-cards-container"></div>
    @endauth

        <section id="home"
            class="relative bg-primary overflow-hidden py-24 md:py-32 lg:py-48 flex items-center min-h-[600px] lg:min-h-[750px]">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover opacity-35" src="{{ asset('images/home/hero-cover.jpeg') }}"
                    alt="Hospital lobby background">
                <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/85 to-transparent"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="max-w-2xl lg:max-w-3xl">

                    @auth
                        <input type="text" name="texts[hero_badge]" value="{{ $texts['hero_badge'] }}"
                            class="bg-transparent text-secondary text-5xl font-bold uppercase tracking-widest border-b-4 border-dashed border-secondary/60 pb-2 inline-block mb-6 focus:border-secondary focus:ring-0 p-0 max-w-full"
                            style="width: {{ strlen($texts['hero_badge'] ?? '') * 0.65 }}rem;">
                    @else
                        <h5
                            class="text-secondary text-5xl font-bold uppercase tracking-widest border-b-4 border-secondary pb-2 inline-block mb-6">
                            {{ $texts['hero_badge'] }}
                        </h5>
                    @endauth

                    @auth
                        <input type="text" name="texts[hero_title]" value="{{ $texts['hero_title'] }}"
                            class="bg-transparent text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight tracking-tight mb-8 border-b-4 border-dashed border-white/20 focus:border-primary focus:ring-0 p-0 w-full">
                    @else
                        <h1
                            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight mb-8">
                            {{ $texts['hero_title'] }}
                        </h1>
                    @endauth


                    @auth
                        <textarea name="texts[hero_desc]" rows="3"
                            class="w-full bg-transparent text-lg md:text-xl text-slate-300 mb-10 leading-relaxed max-w-xl border-2 border-dashed border-white/20 focus:border-primary focus:ring-0 p-0 resize-none">{{ $texts['hero_desc'] }}</textarea>
                    @else
                        <p class="text-lg md:text-xl text-slate-300 mb-10 leading-relaxed max-w-xl">
                            {!! nl2br(e($texts['hero_desc'])) !!}
                        </p>
                    @endauth

                    <div class="flex flex-wrap gap-4">
                        @auth
                            <input type="text" name="texts[hero_btn_1_text]" value="{{ $texts['hero_btn_1_text'] }}"
                                class="px-8 py-4 bg-white hover:bg-slate-100 text-primary font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px] border-2 border-dashed border-primary/40 focus:border-primary focus:ring-0 p-0">
                            <input type="text" name="texts[hero_btn_2_text]" value="{{ $texts['hero_btn_2_text'] }}"
                                class="px-8 py-4 border-2 border-white hover:bg-white hover:text-secondary text-white font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px] border-2 border-dashed border-white/40 focus:border-primary focus:ring-0 p-0">
                        @else
                            <a href="#"
                                class="px-8 py-4 bg-white hover:bg-slate-100 text-primary font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px]">
                                {{ $texts['hero_btn_1_text'] }}
                            </a>
                            <a href="#"
                                class="px-8 py-4 border-2 border-white hover:bg-white hover:text-secondary text-white font-bold rounded-full transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-center min-w-[170px]">
                                {{ $texts['hero_btn_2_text'] }}
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="py-20 lg:py-28 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                    <div class="lg:col-span-5 h-[400px] sm:h-[500px] lg:h-[600px] relative">
                        <img class="w-full h-full object-cover rounded-2xl shadow-xl"
                            src="{{ asset('images/home/about-cover.jpeg') }}" alt="About PresiMedic doctors">
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-primary/10 rounded-full -z-10"></div>
                    </div>

                    <div class="lg:col-span-7">
                        <div class="mb-8">
                            @auth
                                <input type="text" name="texts[about_badge]" value="{{ $texts['about_badge'] }}"
                                    class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 max-w-full"
                                    style="width: {{ strlen($texts['about_badge'] ?? '') * 0.65 }}rem;">
                            @else
                                <h5
                                    class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                                    {{ $texts['about_badge'] }}
                                </h5>
                            @endauth

                            @auth
                                <input type="text" name="texts[about_title]" value="{{ $texts['about_title'] }}"
                                    class="bg-transparent text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary leading-tight border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 w-full">
                            @else
                                <h2 class="text-3xl sm:text-3xl lg:text-4xl font-bold text-secondary leading-tight">
                                    {{ $texts['about_title'] }}
                                </h2>
                            @endauth
                        </div>

                        @auth
                            <textarea name="texts[about_desc]" rows="4"
                                class="w-full bg-transparent text-slate-500 text-lg leading-relaxed mb-10 border-2 border-dashed border-slate-200 focus:border-primary focus:ring-0 p-0 resize-none">{{ $texts['about_desc'] }}</textarea>
                        @else
                            <p class="text-slate-500 text-lg leading-relaxed mb-10">
                                {!! nl2br(e($texts['about_desc'])) !!}
                            </p>
                        @endauth

                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6" id="about-cards-container">
                            @foreach($aboutCards as $card)
                                <div class="bg-slate-50 hover:bg-white hover:shadow-md border border-slate-100 transition-all duration-300 text-center rounded-2xl p-6 relative group card-item"
                                    data-id="{{ $card->id }}">
                                    @auth
                                        <input type="hidden" class="sort-input" name="cards[{{ $card->id }}][sort_order]"
                                            value="{{ $card->sort_order }}">
                                        <span
                                            class="drag-handle absolute top-2 left-2 w-6 h-6 rounded-full bg-slate-200/80 text-slate-500 flex items-center justify-center cursor-move opacity-0 group-hover:opacity-100 transition-opacity"
                                            title="Geser untuk urutkan">
                                            <i class="fas fa-grip-vertical text-xs"></i>
                                        </span>
                                        <button type="button" onclick="removeItem(this, '{{ $card->id }}', 'delete_cards[]')"
                                            class="absolute top-2 right-2 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow"
                                            title="Hapus Card">
                                            <i class="fas fa-trash-alt text-xs"></i>
                                        </button>
                                    @endauth
                                    <div
                                        class="inline-flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full mb-4">
                                        @auth
                                            <input type="text" name="cards[{{ $card->id }}][icon]" value="{{ $card->icon }}"
                                                class="bg-transparent text-primary text-center text-xs focus:ring-0 p-0 border-b border-dashed border-primary/40 w-full"
                                                placeholder="Icon Class">
                                        @else
                                            <i class="{{ $card->icon }} text-2xl text-primary"></i>
                                        @endauth
                                    </div>
                                    @auth
                                        <input type="text" name="cards[{{ $card->id }}][title]" value="{{ $card->title }}"
                                            class="bg-transparent font-bold text-primary text-sm sm:text-base text-center focus:ring-0 p-0 border-b border-dashed border-primary/20 w-full"
                                            placeholder="Judul Card">
                                        <input type="hidden" name="cards[{{ $card->id }}][section]" value="about">
                                    @else
                                        <h3 class="font-bold text-primary text-sm sm:text-base leading-tight">
                                            {{ explode(' ', $card->title)[0] ?? '' }}<span
                                                class="block text-slate-500 text-xs font-normal mt-1">{{ substr(strstr($card->title ?? '', ' '), 1) }}</span>
                                        </h3>
                                    @endauth
                                </div>
                            @endforeach

                            @auth
                                <button type="button" onclick="addAboutCard()"
                                    class="bg-slate-50 hover:bg-slate-100 border-2 border-dashed border-slate-300 transition-all duration-300 flex flex-col items-center justify-center rounded-2xl p-6 min-h-[140px]"
                                    id="btn-add-about">
                                    <i class="fa fa-plus text-xl text-slate-400 mb-2"></i>
                                    <span class="text-xs font-bold text-slate-500">Tambah Card</span>
                                </button>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="academic" class="py-20 lg:py-28 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            @auth
                <input type="text" name="texts[academic_badge]" value="{{ $texts['academic_badge'] ?? '' }}"
                    class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 text-center w-full"
                    style="max-width: 200px;">
            @else
                <h5 class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                    {{ $texts['academic_badge'] ?? '' }}
                </h5>
            @endauth

            @auth
                <input type="text" name="texts[academic_title]" value="{{ $texts['academic_title'] ?? '' }}"
                    class="bg-transparent text-3xl sm:text-3xl lg:text-4xl font-bold text-secondary border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 text-center w-full mb-6">
                <textarea name="texts[academic_desc]" rows="3"
                    class="w-full bg-transparent text-slate-500 text-lg leading-relaxed text-center border-2 border-dashed border-slate-200 focus:border-primary focus:ring-0 p-0 resize-none mb-8">{{ $texts['academic_desc'] ?? '' }}</textarea>
            @else
                <h2 class="text-3xl sm:text-3xl lg:text-4xl font-bold text-secondary mb-6">
                    {{ $texts['academic_title'] ?? '' }}
                </h2>
                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    {!! nl2br(e($texts['academic_desc'] ?? '')) !!}
                </p>
            @endauth

            <div class="bg-primary/5 rounded-2xl p-6 sm:p-8 border border-primary/10 flex flex-col items-center">
                <h4 class="text-xl font-bold text-primary mb-4">Our Vision</h4>
                @auth
                    <textarea name="texts[vision_text]" rows="3"
                        class="w-full bg-transparent text-slate-600 italic text-lg text-center border-2 border-dashed border-primary/30 focus:border-primary focus:ring-0 p-4 resize-none rounded-xl">{{ $texts['vision_text'] ?? '' }}</textarea>
                @else
                    <p class="text-slate-600 italic text-lg leading-relaxed text-center">
                        "{!! nl2br(e($texts['vision_text'] ?? '')) !!}"
                    </p>
                @endauth
            </div>
        </div>

        {{-- MISSION --}}
        <div class="mb-20">
            <h3 class="text-xl font-bold text-secondary mb-8 flex items-center justify-center">
                <span class="w-10 h-10 bg-primary/10 text-primary rounded-full flex items-center justify-center mr-4">
                    <i class="fas fa-bullseye"></i>
                </span>
                Our Mission
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4" id="mission-cards-container">
                @foreach($missionCards ?? [] as $card)
                    <div class="bg-slate-50 hover:bg-primary/5 p-5 rounded-xl border border-slate-100 hover:border-primary/20 flex items-start gap-4 relative group card-item transition-colors duration-300"
                        data-id="{{ $card->id }}">
                        @auth
                            <input type="hidden" class="sort-input" name="cards[{{ $card->id }}][sort_order]"
                                value="{{ $card->sort_order }}">
                            <span class="drag-handle flex-shrink-0 mt-1 w-6 h-6 rounded-full bg-slate-200/80 text-slate-500 flex items-center justify-center cursor-move opacity-0 group-hover:opacity-100 transition-opacity"
                                title="Geser untuk urutkan">
                                <i class="fas fa-grip-vertical text-xs"></i>
                            </span>
                            <button type="button" onclick="removeItem(this, '{{ $card->id }}', 'delete_cards[]')"
                                class="absolute top-2 right-2 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow"
                                title="Hapus">
                                <i class="fas fa-trash-alt text-xs"></i>
                            </button>
                            <div class="flex-shrink-0 mt-1">
                                <input type="text" name="cards[{{ $card->id }}][icon]" value="{{ $card->icon }}"
                                    class="bg-transparent text-primary text-center text-xs focus:ring-0 p-0 border-b w-12"
                                    placeholder="Icon">
                            </div>
                            <div class="flex-grow">
                                <input type="text" name="cards[{{ $card->id }}][title]" value="{{ $card->title }}"
                                    class="bg-transparent font-bold text-secondary text-sm focus:ring-0 p-0 border-b border-dashed w-full mb-1">
                                <textarea name="cards[{{ $card->id }}][text]" rows="2"
                                    class="w-full bg-transparent text-slate-500 text-sm border-dashed border-b focus:ring-0 p-0 resize-none">{{ $card->text }}</textarea>
                                <input type="hidden" name="cards[{{ $card->id }}][section]" value="mission">
                            </div>
                        @else
                            <div class="flex-shrink-0 mt-1 w-9 h-9 bg-primary/10 text-primary rounded-lg flex items-center justify-center">
                                <i class="{{ $card->icon }} text-sm"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-bold text-primary mb-1">{{ $card->title }}</h4>
                                <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">{!! nl2br(e($card->text)) !!}</p>
                            </div>
                        @endauth
                    </div>
                @endforeach
                @auth
                    <button type="button" onclick="addMissionCard()"
                        class="sm:col-span-2 w-full py-4 border-2 border-dashed border-slate-300 rounded-xl text-slate-400 hover:text-primary hover:border-primary transition-colors flex justify-center items-center gap-2"
                        id="btn-add-mission">
                        <i class="fas fa-plus"></i> Tambah Misi
                    </button>
                @endauth
            </div>
        </div>

        {{-- CORE VALUES --}}
<div>
    <h3 class="text-xl font-bold text-secondary mb-8 flex items-center justify-center">
        <span class="w-10 h-10 bg-primary/10 text-primary rounded-full flex items-center justify-center mr-4">
            <i class="fas fa-star"></i>
        </span>
        Core Values <span class="text-primary ml-1.5">(PRESIDENT)</span>
    </h3>

    @auth
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" id="core-values-cards-container">
            @foreach($coreValuesCards ?? [] as $card)
                <div class="bg-slate-50 p-5 rounded-xl border border-slate-100 flex items-start gap-4 relative group card-item"
                    data-id="{{ $card->id }}">
                    <input type="hidden" class="sort-input" name="cards[{{ $card->id }}][sort_order]"
                        value="{{ $card->sort_order }}">
                    <span class="drag-handle flex-shrink-0 mt-1 w-6 h-6 rounded-full bg-slate-200/80 text-slate-500 flex items-center justify-center cursor-move opacity-0 group-hover:opacity-100 transition-opacity"
                        title="Geser untuk urutkan">
                        <i class="fas fa-grip-vertical text-xs"></i>
                    </span>
                    <button type="button" onclick="removeItem(this, '{{ $card->id }}', 'delete_cards[]')"
                        class="absolute top-2 right-2 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow"
                        title="Hapus">
                        <i class="fas fa-trash-alt text-xs"></i>
                    </button>
                    <div class="flex-grow">
                        <input type="text" name="cards[{{ $card->id }}][title]" value="{{ $card->title }}"
                            class="bg-transparent font-bold text-secondary text-sm focus:ring-0 p-0 border-b border-dashed w-full mb-1">
                        <textarea name="cards[{{ $card->id }}][text]" rows="2"
                            class="w-full bg-transparent text-slate-500 text-sm border-dashed border-b focus:ring-0 p-0 resize-none">{{ $card->text }}</textarea>
                        <input type="hidden" name="cards[{{ $card->id }}][section]" value="core_values">
                    </div>
                </div>
            @endforeach
            <button type="button" onclick="addCoreValueCard()"
                class="sm:col-span-2 lg:col-span-3 w-full py-4 border-2 border-dashed border-slate-300 rounded-xl text-slate-400 hover:text-primary hover:border-primary transition-colors flex justify-center items-center gap-2"
                id="btn-add-core-value">
                <i class="fas fa-plus"></i> Tambah Core Value
            </button>
        </div>
    @else
        {{-- MODE VIEW: infinite auto-scroll marquee --}}
        <div class="relative overflow-hidden core-values-marquee-wrap">
            {{-- fade mask kiri-kanan --}}
            <div class="pointer-events-none absolute inset-y-0 left-0 w-12 sm:w-24 bg-gradient-to-r from-white to-transparent z-10"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-12 sm:w-24 bg-gradient-to-l from-white to-transparent z-10"></div>

            <div class="flex gap-4 items-start core-values-track" style="width: max-content;">
    @for($i = 0; $i < 2; $i++)
        @foreach($coreValuesCards ?? [] as $card)
            <div class="relative flex-shrink-0 w-40 aspect-[2/3] bg-slate-50 rounded-xl border border-slate-100 p-4 flex flex-col overflow-hidden">
                <span class="absolute -bottom-3 -right-1 text-7xl font-black text-primary/10 leading-none select-none pointer-events-none">
                    {{ strtoupper(substr($card->title, 0, 1)) }}
                </span>

                <div class="relative z-[1] flex flex-col h-full">
                    <div class="w-9 h-9 bg-primary text-white rounded-lg flex items-center justify-center font-bold text-base mb-3 shadow-sm shadow-primary/30 flex-shrink-0">
                        {{ strtoupper(substr($card->title, 0, 1)) }}
                    </div>
                    <h4 class="font-bold text-primary text-sm mb-1.5 flex-shrink-0">{{ $card->title }}</h4>
                    <div class="flex-1 overflow-y-auto pr-1 core-values-desc-scroll">
                        <p class="text-slate-500 text-sm leading-relaxed">
                            {!! nl2br(e($card->text)) !!}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    @endfor
</div>
        </div>

        {{-- Custom styling dikit biar pas --}}
        <style>
            .core-values-track {
                animation: coreValuesScroll {{ max(count($coreValuesCards ?? []) * 4, 20) }}s linear infinite;
            }
            .core-values-marquee-wrap:hover .core-values-track {
                animation-play-state: paused;
            }
            @keyframes coreValuesScroll {
                from { transform: translateX(0); }
                to { transform: translateX(-50%); }
            }
        </style>
    @endauth
</div>
</section>

        <section id="service" class="py-20 lg:py-28 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-xl mx-auto mb-16">
                    @auth
                        <input type="text" name="texts[services_badge]" value="{{ $texts['services_badge'] }}"
                            class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 max-w-full text-center"
                            style="width: {{ strlen($texts['services_badge'] ?? '') * 0.65 }}rem;">
                    @else
                        <h5
                            class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                            {{ $texts['services_badge'] }}
                        </h5>
                    @endauth

                    @auth
                        <input type="text" name="texts[services_title]" value="{{ $texts['services_title'] }}"
                            class="bg-transparent text-3xl sm:text-3xl lg:text-4xl font-bold text-secondary border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 text-center w-full">
                    @else
                        <h2 class="text-3xl sm:text-3xl lg:text-4xl font-bold text-secondary">
                            {{ $texts['services_title'] }}
                        </h2>
                    @endauth
                </div>

                <div class="flex flex-wrap justify-center gap-8" id="service-cards-container">
                    @foreach($serviceCards as $card)
                        <div class="group bg-white hover:bg-slate-50 rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center relative card-item w-full sm:basis-[calc(50%-1rem)] sm:max-w-[calc(50%-1rem)] lg:basis-[calc(33.333%-1.334rem)] lg:max-w-[calc(33.333%-1.334rem)] min-w-[320px]"
                            data-id="{{ $card->id }}">
                            @auth
                                <input type="hidden" class="sort-input" name="cards[{{ $card->id }}][sort_order]"
                                    value="{{ $card->sort_order }}">
                                <span
                                    class="drag-handle absolute top-4 left-4 w-7 h-7 rounded-full bg-slate-200/80 group-hover:bg-white/20 text-slate-500 group-hover:text-white flex items-center justify-center cursor-move opacity-0 group-hover:opacity-100 transition-opacity z-10"
                                    title="Geser untuk urutkan">
                                    <i class="fas fa-grip-vertical text-xs"></i>
                                </span>
                                <button type="button" onclick="removeItem(this, '{{ $card->id }}', 'delete_cards[]')"
                                    class="absolute top-4 right-4 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-7 h-7 rounded-full flex items-center justify-center shadow z-10"
                                    title="Hapus Card">
                                    <i class="fas fa-trash-alt text-xs"></i>
                                </button>
                            @endauth
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                                @auth
                                    <input type="text" name="cards[{{ $card->id }}][icon]" value="{{ $card->icon }}"
                                        class="bg-transparent text-white text-center text-xs focus:ring-0 p-0 border-b border-dashed border-white/40 w-full"
                                        placeholder="Icon Class">
                                @else
                                    <i class="{{ $card->icon }} text-2xl"></i>
                                @endauth
                            </div>
                            @auth
                                <input type="text" name="cards[{{ $card->id }}][title]" value="{{ $card->title }}"
                                    class="bg-transparent text-xl font-bold text-primary mb-4 text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full"
                                    placeholder="Judul Layanan">
                                <textarea name="cards[{{ $card->id }}][text]" rows="3"
                                    class="w-full bg-transparent text-slate-500 group-hover:text-slate-400 mb-6 text-sm text-center border border-dashed border-slate-200 focus:ring-0 p-0 resize-none"
                                    placeholder="Deskripsi Singkat">{{ $card->text }}</textarea>
                                <input type="hidden" name="cards[{{ $card->id }}][section]" value="service">
                            @else
                                <h3 class="text-xl font-bold text-primary mb-4 transition-colors">
                                    {{ $card->title }}
                                </h3>
                                <p class="text-slate-500 group-hover:text-slate-400 mb-6 text-sm leading-relaxed transition-colors">
                                    {!! nl2br(e($card->text)) !!}
                                </p>
                            @endauth
                        </div>
                    @endforeach

                    @auth
                        <button type="button" onclick="addServiceCard()"
                            class="group bg-transparent hover:bg-white border-2 border-dashed border-slate-300 hover:border-primary rounded-2xl p-8 min-h-[320px] transition-all duration-300 flex flex-col items-center justify-center text-center w-full sm:basis-[calc(50%-1rem)] sm:max-w-[calc(50%-1rem)] lg:basis-[calc(33.333%-1.334rem)] lg:max-w-[calc(33.333%-1.334rem)] min-w-[320px]"
                            id="btn-add-service">
                            <div
                                class="inline-flex items-center justify-center w-16 h-16 bg-slate-100 group-hover:bg-primary/10 text-slate-400 group-hover:text-primary rounded-2xl mb-6 transition-all">
                                <i class="fa fa-plus text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-400 group-hover:text-primary mb-2">Tambah Layanan</h3>
                            <p class="text-slate-400 text-sm max-w-[200px]">Klik di sini untuk menambahkan kartu layanan medis
                                baru</p>
                        </button>
                    @endauth
                </div>
            </div>
        </section>

        <section id="leadership" class="py-20 lg:py-28 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-xl mx-auto mb-16">
                    @auth
                        <input type="text" name="texts[doctors_badge]" value="{{ $texts['doctors_badge'] }}"
                            class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 max-w-full text-center"
                            style="width: {{ strlen($texts['doctors_badge'] ?? '') * 0.65 }}rem;">
                    @else
                        <h5
                            class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                            {{ $texts['doctors_badge'] }}
                        </h5>
                    @endauth

                    @auth
                        <input type="text" name="texts[doctors_title]" value="{{ $texts['doctors_title'] }}"
                            class="bg-transparent text-3xl sm:text-3xl lg:text-4xl font-bold text-secondary border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 text-center w-full">
                    @else
                        <h2 class="text-3xl sm:text-3xl lg:text-4xl font-bold text-secondary">
                            {{ $texts['doctors_title'] }}
                        </h2>
                    @endauth
                </div>

                <div class="flex flex-wrap justify-center gap-8" id="doctors-container">
                    @foreach($doctors as $doctor)
                        <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64 relative group card-item w-full lg:basis-[calc(33.333%-1.334rem)] lg:max-w-[calc(33.333%-1.334rem)] min-w-[380px]"
                            data-id="{{ $doctor->id }}" @guest onclick="openLeaderModal({{ $doctor->id }})" @endguest>
                            @auth
                                <input type="hidden" class="sort-input" name="doctors[{{ $doctor->id }}][sort_order]"
                                    value="{{ $doctor->sort_order }}">
                                <span
                                    class="drag-handle absolute top-2 left-2 w-6 h-6 rounded-full bg-slate-200/80 text-slate-500 flex items-center justify-center cursor-move opacity-0 group-hover:opacity-100 transition-opacity z-20"
                                    title="Geser untuk urutkan">
                                    <i class="fas fa-grip-vertical text-xs"></i>
                                </span>
                                <button type="button" onclick="removeItem(this, '{{ $doctor->id }}', 'delete_doctors[]')"
                                    class="absolute top-2 right-2 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow z-20"
                                    title="Hapus Dokter">
                                    <i class="fas fa-trash-alt text-xs"></i>
                                </button>
                            @endauth
                            <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden relative">
                                @php $doctorImgId = 'doctor-img-' . $doctor->id; @endphp
                                <img id="{{ $doctorImgId }}" class="w-full h-full object-cover"
                                    src="{{ asset('images/profile/' . $doctor->image) }}" alt="{{ $doctor->name }}">
                                @auth
                                    <input type="hidden" name="doctors[{{ $doctor->id }}][image]" value="{{ $doctor->image }}">
                                    <label
                                        class="absolute inset-0 flex flex-col items-center justify-center gap-2 bg-black/60 text-white text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer">
                                        <i class="fas fa-camera text-lg"></i>
                                        Ganti Foto
                                        <input type="file" name="doctors[{{ $doctor->id }}][image_file]" accept="image/*"
                                            class="hidden" onchange="previewImage(event, '{{ $doctorImgId }}')">
                                    </label>
                                @endauth
                            </div>
                            <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                                <div>
                                    @auth
                                        <input type="text" name="doctors[{{ $doctor->id }}][name]" value="{{ $doctor->name }}"
                                            class="bg-transparent text-xl font-bold text-primary focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-1"
                                            placeholder="Nama Dokter">
                                        <input type="text" name="doctors[{{ $doctor->id }}][title]" value="{{ $doctor->title }}"
                                            class="bg-transparent text-slate-600 text-xs font-semibold uppercase tracking-wider italic focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-3"
                                            placeholder="Spesialisasi">
                                        <textarea name="doctors[{{ $doctor->id }}][text]" rows="2"
                                            class="w-full bg-transparent text-slate-400 text-sm border border-dashed border-slate-200 focus:ring-0 p-0 resize-none leading-relaxed"
                                            placeholder="Biografi singkat">{{ $doctor->text }}</textarea>
                                    @else
                                        <h3 class="text-xl font-bold text-primary mb-1">{{ $doctor->name }}</h3>
                                        <h6 class="text-slate-600 text-xs font-semibold uppercase tracking-wider italic mb-4">
                                            {{ $doctor->title }}
                                        </h6>
                                    @endauth
                                </div>
                                <div class="flex items-center space-x-3 mt-4 border-t border-slate-100 pt-4">
                                    @auth
                                        <input type="text" name="doctors[{{ $doctor->id }}][twitter]" value="{{ $doctor->twitter }}"
                                            class="bg-transparent text-[10px] w-12 border-b border-dashed border-slate-300 focus:ring-0 p-0"
                                            placeholder="Twitter">
                                        <input type="text" name="doctors[{{ $doctor->id }}][fb]" value="{{ $doctor->fb }}"
                                            class="bg-transparent text-[10px] w-12 border-b border-dashed border-slate-300 focus:ring-0 p-0"
                                            placeholder="Facebook">
                                        <input type="text" name="doctors[{{ $doctor->id }}][linkedin]"
                                            value="{{ $doctor->linkedin }}"
                                            class="bg-transparent text-[10px] w-12 border-b border-dashed border-slate-300 focus:ring-0 p-0"
                                            placeholder="LinkedIn">
                                    @else
                                        @if(!empty($doctor->twitter))
                        <a href="{{ $doctor->twitter }}" target="_blank" rel="noopener"
                            class="w-9 h-9 bg-slate-50 text-slate-500 hover:bg-primary hover:text-white border border-slate-100 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                    @endif
                    @if(!empty($doctor->fb))
                        <a href="{{ $doctor->fb }}" target="_blank" rel="noopener"
                            class="w-9 h-9 bg-slate-50 text-slate-500 hover:bg-primary hover:text-white border border-slate-100 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                    @endif
                    @if(!empty($doctor->linkedin))
                        <a href="{{ $doctor->linkedin }}" target="_blank" rel="noopener"
                            class="w-9 h-9 bg-slate-50 text-slate-500 hover:bg-primary hover:text-white border border-slate-100 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                    @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                        <x-leadership-modal :doctor="$doctor" />
                    @endforeach

                    @auth
                        <button type="button" onclick="addDoctorCard()"
                            class="group bg-transparent hover:bg-white border-2 border-dashed border-slate-300 hover:border-primary rounded-2xl overflow-hidden shadow-sm h-auto sm:h-64 transition-all duration-300 flex flex-col items-center justify-center text-center p-6 w-full lg:basis-[calc(33.333%-1.334rem)] lg:max-w-[calc(33.333%-1.334rem)] min-w-[380px]"
                            id="btn-add-doctor">
                            <div
                                class="inline-flex items-center justify-center w-14 h-14 bg-slate-100 group-hover:bg-primary/10 text-slate-400 group-hover:text-primary rounded-full mb-3 transition-all">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-slate-400 group-hover:text-primary mb-1">Tambah Dokter</h3>
                            <p class="text-slate-400 text-xs max-w-[180px]">Klik untuk mendaftarkan tenaga medis baru</p>
                        </button>
                    @endauth
                </div>
            </div>
        </section>

        @if(count($testimonials) > 0 || Auth::check())
            <section id="testimony" class="py-20 lg:py-28 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-xl mx-auto mb-16">
                        @auth
                            <input type="text" name="texts[testimony_badge]" value="{{ $texts['testimony_badge'] }}"
                                class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 max-w-full text-center"
                                style="width: {{ strlen($texts['testimony_badge'] ?? '') * 0.65 }}rem;">
                        @else
                            <h5
                                class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                                {{ $texts['testimony_badge'] }}
                            </h5>
                        @endauth

                        @auth
                            <input type="text" name="texts[testimony_title]" value="{{ $texts['testimony_title'] }}"
                                class="bg-transparent text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 text-center w-full">
                        @else
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">
                                {{ $texts['testimony_title'] }}
                            </h2>
                        @endauth
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8" id="testimonials-container">
                        @foreach($testimonials as $testimony)
                            <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 text-center flex flex-col justify-between relative group card-item"
                                data-id="{{ $testimony->id }}">
                                @auth
                                    <button type="button" onclick="removeItem(this, '{{ $testimony->id }}', 'delete_testimonials[]')"
                                        class="absolute top-4 right-4 group-hover:opacity-100 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow z-20"
                                        title="Hapus Testimoni">
                                        <i class="fas fa-trash-alt text-xs"></i>
                                    </button>
                                @endauth
                                <div>
                                    <div class="relative inline-block mb-6">
                                        @php $testimonyImgId = 'testimony-img-' . $testimony->id; @endphp
                                        <img id="{{ $testimonyImgId }}"
                                            class="w-20 h-20 rounded-full mx-auto ring-4 ring-primary/20 object-cover"
                                            src="{{ $testimony->image }}" alt="Patient Avatar">
                                        @auth
                                            <input type="hidden" name="testimonials[{{ $testimony->id }}][image]"
                                                value="{{ $testimony->image }}">
                                            <label
                                                class="absolute inset-0 rounded-full flex items-center justify-center bg-black/60 text-white opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer"
                                                title="Ganti foto">
                                                <i class="fas fa-camera text-sm"></i>
                                                <input type="file" name="testimonials[{{ $testimony->id }}][image_file]"
                                                    accept="image/*" class="hidden"
                                                    onchange="previewImage(event, '{{ $testimonyImgId }}')">
                                            </label>
                                        @endauth
                                        <div
                                            class="absolute -bottom-2 right-1/2 translate-x-1/2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                                            <i class="fa fa-quote-left text-primary text-xs"></i>
                                        </div>
                                    </div>
                                    @auth
                                        <textarea name="testimonials[{{ $testimony->id }}][text]" rows="4"
                                            class="w-full bg-transparent text-slate-500 italic text-base text-center border border-dashed border-slate-200 focus:ring-0 p-0 resize-none mb-6"
                                            placeholder="Tulis review pasien...">{{ $testimony->text }}</textarea>
                                    @else
                                        <p class="text-slate-500 italic text-base leading-relaxed mb-6">
                                            "{!! nl2br(e($testimony->text)) !!}"</p>
                                    @endauth
                                </div>
                                <div>
                                    <hr class="w-12 mx-auto border-slate-200 mb-4">
                                    @auth
                                        <input type="text" name="testimonials[{{ $testimony->id }}][name]"
                                            value="{{ $testimony->name }}"
                                            class="bg-transparent text-lg font-bold text-secondary text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-1"
                                            placeholder="Nama Pasien">
                                        <input type="text" name="testimonials[{{ $testimony->id }}][title]"
                                            value="{{ $testimony->title }}"
                                            class="bg-transparent text-primary text-xs font-semibold uppercase tracking-wider text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full"
                                            placeholder="Pekerjaan / Jabatan">
                                    @else
                                        <h3 class="text-lg font-bold text-secondary">{{ $testimony->name }}</h3>
                                        <h6 class="text-primary text-xs font-semibold uppercase tracking-wider">{{ $testimony->title }}
                                        </h6>
                                    @endauth
                                </div>
                            </div>
                        @endforeach

                        @auth
                            <button type="button" onclick="addTestimonyCard()"
                                class="group bg-transparent hover:bg-slate-50 border-2 border-dashed border-slate-300 hover:border-primary rounded-3xl p-8 transition-all duration-300 text-center flex flex-col items-center justify-center min-h-[360px] w-full"
                                id="btn-add-testimony">
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-slate-100 group-hover:bg-primary/10 text-slate-400 group-hover:text-primary rounded-full mb-4 transition-all">
                                    <i class="fa fa-plus text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-slate-400 group-hover:text-primary mb-1">Tambah Testimoni</h3>
                                <p class="text-slate-400 text-xs max-w-[180px]">Klik untuk memasukkan review pasien baru</p>
                            </button>
                        @endauth
                    </div>
                </div>
            </section>
        @endif

        <section id="contact" class="py-20 lg:py-28 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-xl mx-auto mb-16">
                    @auth
                        <input type="text" name="texts[contact_badge]" value="{{ $texts['contact_badge'] ?? 'Contact Us' }}"
                            class="bg-transparent text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-dashed border-primary/60 pb-1 inline-block mb-3 focus:border-primary focus:ring-0 p-0 max-w-full text-center"
                            style="width: {{ strlen($texts['contact_badge'] ?? 'Contact Us') * 0.65 }}rem;">
                    @else
                        <h5
                            class="text-primary text-sm font-bold uppercase tracking-wider border-b-4 border-primary pb-1 inline-block mb-3">
                            {{ $texts['contact_badge'] ?? 'Contact Us' }}
                        </h5>
                    @endauth

                    @auth
                        <input type="text" name="texts[contact_title]"
                            value="{{ $texts['contact_title'] ?? 'Please Feel Free To Contact Us' }}"
                            class="bg-transparent text-3xl sm:text-3xl lg:text-4xl font-bold text-secondary border-b-4 border-dashed border-primary/20 focus:border-primary focus:ring-0 p-0 text-center w-full">
                    @else
                        <h2 class="text-3xl sm:text-3xl lg:text-4xl font-bold text-secondary">
                            {{ $texts['contact_title'] ?? 'Please Feel Free To Contact Us' }}
                        </h2>
                    @endauth
                </div>

                <!-- Contact Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <!-- Card 1 -->
                    <div
                        class="bg-slate-50 border border-slate-100 hover:border-secondary hover:shadow-xl transition-all duration-300 rounded-3xl p-8 text-center flex flex-col items-center shadow-sm">
                        <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Our Office</h3>
                        @auth
                            <textarea name="texts[contact_address]" rows="2"
                                class="w-full bg-transparent text-slate-500 text-sm leading-relaxed text-center border-b border-dashed border-slate-300 focus:ring-0 p-0 resize-none">{{ $texts['contact_address'] ?? 'Jababeka Industrial Township, Cikarang, Bekasi, Indonesia' }}</textarea>
                        @else
                            <p class="text-slate-500 text-sm leading-relaxed">
                                {!! nl2br(e($texts['contact_address'] ?? '')) !!}
                            </p>
                        @endauth
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-slate-50 border border-slate-100 hover:border-secondary hover:shadow-xl transition-all duration-300 rounded-3xl p-8 text-center flex flex-col items-center shadow-sm">
                        <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fa fa-2x fa-envelope-open text-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Email Us</h3>
                        @auth
                            <input type="text" name="texts[contact_email]" value="{{ $texts['contact_email'] ?? '' }}"
                                class="w-full bg-transparent text-slate-500 text-sm leading-relaxed text-center border-b border-dashed border-slate-300 focus:ring-0 p-0">
                        @else
                            <p class="text-slate-500 text-sm leading-relaxed">
                                <a href="mailto:{{ $texts['contact_email'] ?? '' }}"
                                    class="hover:text-primary transition-colors">{{ $texts['contact_email'] ??
                                    'purth@president.ac.id' }}</a>
                            </p>
                        @endauth
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-slate-50 border border-slate-100 hover:border-secondary hover:shadow-xl transition-all duration-300 rounded-3xl p-8 text-center flex flex-col items-center shadow-sm">
                        <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fa fa-2x fa-phone-alt text-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Call Us</h3>
                        @auth
                            <input type="text" name="texts[contact_phone]" value="{{ $texts['contact_phone'] ?? '' }}"
                                class="w-full bg-transparent text-slate-500 text-sm leading-relaxed text-center border-b border-dashed border-slate-300 focus:ring-0 p-0">
                        @else
                            <p class="text-slate-500 text-sm leading-relaxed">
                                <a href="tel:{{ str_replace([' ', '-'], '', $texts['contact_phone'] ?? '') }}"
                                    class="hover:text-primary transition-colors">{{ $texts['contact_phone'] ?? '' }}</a>
                            </p>
                        @endauth
                    </div>
                </div>

                <!-- Map and Form Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
                    <!-- Map iframe container -->
                    <div
                        class="rounded-3xl overflow-hidden shadow-md border border-slate-100 min-h-[350px] lg:min-h-full relative">
                        <iframe class="absolute inset-0 w-full h-full border-0" src="{{ $texts['contact_map_url'] ?? '' }}"
                            allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"
                            title="Google Map location of PURTH">
                        </iframe>
                        @auth
                            <div class="absolute top-2 left-2 right-2 bg-white/90 p-2 rounded shadow flex items-center z-10">
                                <span class="text-xs font-bold text-slate-600 mr-2 whitespace-nowrap">Map URL:</span>
                                <input type="text" name="texts[contact_map_url]" value="{{ $texts['contact_map_url'] ?? '' }}"
                                    class="w-full text-[10px] p-1 border border-slate-300 rounded focus:ring-primary focus:border-primary bg-transparent">
                            </div>
                        @endauth
                    </div>

                    <!-- Form Section -->
                    <div
                        class="bg-slate-50 rounded-3xl p-8 sm:p-12 border border-slate-100/60 shadow-sm flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-primary mb-8">Send Us A Message</h3>
                        @auth
                            <div class="space-y-6">
                        @else
                                <form action="#" class="space-y-6">
                            @endauth
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label for="name" class="sr-only">Your Name</label>
                                        <input type="text" id="name" placeholder="Your Name"
                                            class="w-full bg-white border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                                    </div>
                                    <div>
                                        <label for="email" class="sr-only">Your Email</label>
                                        <input type="email" id="email" placeholder="Your Email"
                                            class="w-full bg-white border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                                    </div>
                                </div>
                                <div>
                                    <label for="subject" class="sr-only">Subject</label>
                                    <input type="text" id="subject" placeholder="Subject"
                                        class="w-full bg-white border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm">
                                </div>
                                <div>
                                    <label for="message" class="sr-only">Message</label>
                                    <textarea id="message" rows="5" placeholder="Message"
                                        class="w-full bg-white border-0 border-b-2 border-slate-200 focus:border-primary focus:ring-0 px-4 py-3 rounded-lg text-slate-700 text-sm resize-none"></textarea>
                                </div>
                                <div>
                                    <button type="{{ Auth::check() ? 'button' : 'submit' }}"
                                        class="w-full py-4 bg-primary hover:bg-primary-hover text-white font-bold rounded-lg shadow-lg hover:shadow-xl transition-all uppercase text-sm">
                                        Send Message
                                    </button>
                                </div>
                                @auth
                                    </div>
                                @else
                            </form>
                        @endauth
            </div>
        </div>
    </div>
</section>

    @auth
        <div class="fixed bottom-6 right-6 flex flex-col gap-3 z-50">
            <a href="{{ url()->current() }}"
                class="w-14 h-14 bg-secondary text-white rounded-full flex items-center justify-center shadow-xl hover:bg-white hover:text-secondary hover:border-danger hover:scale-110 active:scale-95 transition-all duration-300"
                title="Batal & Refresh">
                <i class="fas fa-times text-xl"></i>
            </a>

            <button type="submit"
                class="relative w-14 h-14 bg-primary text-white rounded-full flex items-center justify-center shadow-xl hover:bg-white hover:text-primary hover:scale-110 active:scale-95 transition-all duration-300"
                title="Simpan Perubahan">
                <i class="fas fa-save text-xl"></i>
                <span id="dirty-badge"
                    class="hidden absolute -top-1 -right-1 w-4 h-4 bg-danger rounded-full ring-2 ring-white animate-pulse"
                    title="Ada perubahan yang belum disimpan"></span>
            </button>
        </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>
        <script>
            // ---------- helpers ----------
            function generateUniqueId() {
                return 'new_' + Date.now() + Math.random().toString(36).substr(2, 5);
            }

            function reindexOrder(container) {
                if (!container) return;
                container.querySelectorAll(':scope > .card-item').forEach((item, idx) => {
                    const input = item.querySelector('.sort-input');
                    if (input) input.value = idx * 10;
                });
            }

            // Unified remove handler for cards / doctors / testimonials.
            // hiddenFieldName is e.g. 'delete_cards[]', 'delete_doctors[]', 'delete_testimonials[]'
            function removeItem(button, itemId, hiddenFieldName) {
                const cardItem = button.closest('.card-item');
                const container = cardItem ? cardItem.parentElement : null;
                if (itemId && !itemId.startsWith('new_')) {
                    const trash = document.getElementById('deleted-cards-container');
                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = hiddenFieldName;
                    hiddenInput.value = itemId;
                    trash.appendChild(hiddenInput);
                }
                if (cardItem) cardItem.remove();
                reindexOrder(container);
                markDirty();
            }

            // Live-swap an <img> preview when a file input changes.
            function previewImage(event, imgId) {
                const file = event.target.files && event.target.files[0];
                if (!file) return;
                const img = document.getElementById(imgId);
                if (img) img.src = URL.createObjectURL(file);
                markDirty();
            }

            // Drag & drop reordering using SortableJS
            function makeSortable(containerId) {
                const container = document.getElementById(containerId);
                if (!container) return;
                
                Sortable.create(container, {
                    handle: '.drag-handle',
                    animation: 150,
                    ghostClass: 'opacity-40',
                    onEnd: function() {
                        reindexOrder(container);
                        markDirty();
                    }
                });
            }

            // ---------- "unsaved changes" indicator ----------
            function markDirty() {
                const badge = document.getElementById('dirty-badge');
                if (badge) badge.classList.remove('hidden');
            }

            document.addEventListener('DOMContentLoaded', () => {
                const form = document.getElementById('content-edit-form');
                if (form) {
                    form.addEventListener('input', markDirty);
                    form.addEventListener('change', markDirty);
                }
                ['about-cards-container', 'mission-cards-container', 'core-values-cards-container',
                    'service-cards-container', 'doctors-container'].forEach(makeSortable);
            });

            // ---------- add card templates ----------
            function addAboutCard() {
                const btnAdd = document.getElementById('btn-add-about');
                const newId = generateUniqueId();
                const cardHtml = `
                    <div class="bg-slate-50 hover:bg-white hover:shadow-md border border-slate-100 transition-all duration-300 text-center rounded-2xl p-6 relative group card-item">
                        <input type="hidden" class="sort-input" name="new_cards[${newId}][sort_order]" value="9999">
                        <span class="drag-handle absolute top-2 left-2 w-6 h-6 rounded-full bg-slate-200/80 text-slate-500 flex items-center justify-center cursor-move opacity-0 group-hover:opacity-100 transition-opacity" title="Geser untuk urutkan">
                            <i class="fas fa-grip-vertical text-xs"></i>
                        </span>
                        <button type="button" onclick="removeItem(this, '${newId}', 'delete_cards[]')" class="absolute top-2 right-2 opacity-100 bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow" title="Hapus Card">
                            <i class="fas fa-trash-alt text-xs"></i>
                        </button>
                        <div class="inline-flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full mb-4">
                            <input type="text" name="new_cards[${newId}][icon]" value="fas fa-heartbeat" class="bg-transparent text-primary text-center text-xs focus:ring-0 p-0 border-b border-dashed border-primary/40 w-full" placeholder="Icon Class">
                        </div>
                        <input type="text" name="new_cards[${newId}][title]" value="" class="bg-transparent font-bold text-primary text-sm sm:text-base text-center focus:ring-0 p-0 border-b border-dashed border-primary/20 w-full" placeholder="Judul Card" required>
                        <input type="hidden" name="new_cards[${newId}][section]" value="about">
                    </div>
                `;
                btnAdd.insertAdjacentHTML('beforebegin', cardHtml);
                markDirty();
            }

            function addServiceCard() {
                const btnAdd = document.getElementById('btn-add-service');
                const newId = generateUniqueId();
                const cardHtml = `
                    <div class="group bg-white hover:bg-slate-50 rounded-2xl p-8 shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 text-center flex flex-col items-center relative card-item w-full sm:basis-[calc(50%-1rem)] sm:max-w-[calc(50%-1rem)] lg:basis-[calc(33.333%-1.334rem)] lg:max-w-[calc(33.333%-1.334rem)] min-w-[320px]">
                        <input type="hidden" class="sort-input" name="new_cards[${newId}][sort_order]" value="9999">
                        <span class="drag-handle absolute top-4 left-4 w-7 h-7 rounded-full bg-slate-200/80 group-hover:bg-white/20 text-slate-500 group-hover:text-white flex items-center justify-center cursor-move opacity-0 group-hover:opacity-100 transition-opacity z-10" title="Geser untuk urutkan">
                            <i class="fas fa-grip-vertical text-xs"></i>
                        </span>
                        <button type="button" onclick="removeItem(this, '${newId}', 'delete_cards[]')" class="absolute top-4 right-4 opacity-100 bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-7 h-7 rounded-full flex items-center justify-center shadow z-10" title="Hapus Card">
                            <i class="fas fa-trash-alt text-xs"></i>
                        </button>
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-primary text-white rounded-2xl shadow-lg shadow-primary/20 mb-6 group-hover:scale-110 transition-transform">
                            <input type="text" name="new_cards[${newId}][icon]" value="bi bi-activity" class="bg-transparent text-white text-center text-xs focus:ring-0 p-0 border-b border-dashed border-white/40 w-full" placeholder="Icon Class">
                        </div>
                        <input type="text" name="new_cards[${newId}][title]" value="" class="bg-transparent text-xl font-bold text-primary mb-4 text-center focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full" placeholder="Layanan Baru" required>
                        <textarea name="new_cards[${newId}][text]" rows="3" class="w-full bg-transparent text-slate-500 mb-6 text-sm text-center border border-dashed border-slate-200 focus:ring-0 p-0 resize-none" placeholder="Deskripsi Layanan..." required></textarea>
                        <input type="hidden" name="new_cards[${newId}][section]" value="service">
                    </div>
                `;
                btnAdd.insertAdjacentHTML('beforebegin', cardHtml);
                markDirty();
            }

            // Shared template for the two list-style sections (Mission / Core Values).
            function addListCard(section) {
                const config = {
                    mission: { btnId: 'btn-add-mission', icon: 'fas fa-check-circle', placeholder: 'Judul Misi' },
                    core_values: { btnId: 'btn-add-core-value', icon: 'fas fa-star', placeholder: 'Judul Value' },
                }[section];
                if (!config) return;
                
                const btnAdd = document.getElementById(config.btnId);
                const newId = generateUniqueId();
                
                const isMission = section === 'mission';
                const containerClass = isMission 
                    ? 'bg-slate-50 hover:bg-primary/5 p-5 rounded-xl border border-slate-100 hover:border-primary/20 flex items-start gap-4 relative group card-item transition-colors duration-300'
                    : 'bg-slate-50 p-5 rounded-xl border border-slate-100 flex items-start gap-4 relative group card-item';
                
                const iconHtml = isMission
                    ? `<div class="flex-shrink-0 mt-1">
                           <input type="text" name="new_cards[${newId}][icon]" value="${config.icon}" class="bg-transparent text-primary text-center text-xs focus:ring-0 p-0 border-b w-12" placeholder="Icon">
                       </div>`
                    : '';

                const cardHtml = `
                    <div class="${containerClass}">
                        <input type="hidden" class="sort-input" name="new_cards[${newId}][sort_order]" value="9999">
                        <span class="drag-handle flex-shrink-0 mt-1 w-6 h-6 rounded-full bg-slate-200/80 text-slate-500 flex items-center justify-center cursor-move opacity-0 group-hover:opacity-100 transition-opacity" title="Geser untuk urutkan">
                            <i class="fas fa-grip-vertical text-xs"></i>
                        </span>
                        <button type="button" onclick="removeItem(this, '${newId}', 'delete_cards[]')" class="absolute top-2 right-2 transition-opacity bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow" title="Hapus">
                            <i class="fas fa-trash-alt text-xs"></i>
                        </button>
                        ${iconHtml}
                        <div class="flex-grow">
                            <input type="text" name="new_cards[${newId}][title]" value="" class="bg-transparent font-bold text-secondary text-sm focus:ring-0 p-0 border-b border-dashed w-full mb-1" placeholder="${config.placeholder}" required>
                            <textarea name="new_cards[${newId}][text]" rows="2" class="w-full bg-transparent text-slate-500 text-sm border-dashed border-b focus:ring-0 p-0 resize-none" placeholder="Deskripsi..." required></textarea>
                            <input type="hidden" name="new_cards[${newId}][section]" value="${section}">
                        </div>
                    </div>
                `;
                btnAdd.insertAdjacentHTML('beforebegin', cardHtml);
                markDirty();
            }
            function addMissionCard() { addListCard('mission'); }
            function addCoreValueCard() { addListCard('core_values'); }

            function addDoctorCard() {
                const btnAdd = document.getElementById('btn-add-doctor');
                const newId = generateUniqueId();
                const imgId = 'doctor-img-' + newId;
                const defaultImg = 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=400&q=80';
                const cardHtml = `
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-100 hover:border-secondary transition-all duration-300 flex flex-col sm:flex-row h-auto sm:h-64 relative group card-item w-full lg:basis-[calc(33.333%-1.334rem)] lg:max-w-[calc(33.333%-1.334rem)] min-w-[380px]">
                        <input type="hidden" class="sort-input" name="new_doctors[${newId}][sort_order]" value="9999">
                        <span class="drag-handle absolute top-2 left-2 w-6 h-6 rounded-full bg-slate-200/80 text-slate-500 flex items-center justify-center cursor-move opacity-0 group-hover:opacity-100 transition-opacity z-20" title="Geser untuk urutkan">
                            <i class="fas fa-grip-vertical text-xs"></i>
                        </span>
                        <button type="button" onclick="removeItem(this, '${newId}', 'delete_doctors[]')" class="absolute top-2 right-2 opacity-100 bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow z-20" title="Hapus Dokter">
                            <i class="fas fa-trash-alt text-xs"></i>
                        </button>
                        <div class="w-full sm:w-2/5 h-48 sm:h-full overflow-hidden relative">
                            <img id="${imgId}" class="w-full h-full object-cover" src="${defaultImg}" alt="New Doctor">
                            <input type="hidden" name="new_doctors[${newId}][image]" value="${defaultImg}">
                            <label class="absolute inset-0 flex flex-col items-center justify-center gap-2 bg-black/60 text-white text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer">
                                <i class="fas fa-camera text-lg"></i>
                                Ganti Foto
                                <input type="file" name="new_doctors[${newId}][image_file]" accept="image/*" class="hidden" onchange="previewImage(event, '${imgId}')">
                            </label>
                        </div>
                        <div class="w-full sm:w-3/5 p-6 flex flex-col justify-between">
                            <div>
                                <input type="text" name="new_doctors[${newId}][name]" value="" class="bg-transparent text-xl font-bold text-primary focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-1" placeholder="Nama Dokter" required>
                                <input type="text" name="new_doctors[${newId}][title]" value="" class="bg-transparent text-slate-600 text-xs font-semibold uppercase tracking-wider italic focus:ring-0 p-0 border-b border-dashed border-primary/30 w-full mb-3" placeholder="Spesialisasi" required>
                                <textarea name="new_doctors[${newId}][text]" rows="2" class="w-full bg-transparent text-slate-400 text-sm border border-dashed border-slate-200 focus:ring-0 p-0 resize-none leading-relaxed" placeholder="Biografi Dokter..." required></textarea>
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
                markDirty();
            }

            function addTestimonyCard() {
                const btnAdd = document.getElementById('btn-add-testimony');
                const newId = generateUniqueId();
                const imgId = 'testimony-img-' + newId;
                const defaultImg = 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&h=150&q=80';
                const cardHtml = `
                    <div class="bg-slate-50 border border-slate-100 hover:border-slate-200 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 text-center flex flex-col justify-between relative group card-item">
                        <button type="button" onclick="removeItem(this, '${newId}', 'delete_testimonials[]')" class="absolute top-4 right-4 opacity-100 bg-red-100 hover:bg-red-500 text-red-600 hover:text-white w-6 h-6 rounded-full flex items-center justify-center shadow z-20" title="Hapus Testimoni">
                            <i class="fas fa-trash-alt text-xs"></i>
                        </button>
                        <div>
                            <div class="relative inline-block mb-6">
                                <img id="${imgId}" class="w-20 h-20 rounded-full mx-auto ring-4 ring-primary/20 object-cover" src="${defaultImg}" alt="Patient Avatar">
                                <input type="hidden" name="new_testimonials[${newId}][image]" value="${defaultImg}">
                                <label class="absolute inset-0 rounded-full flex items-center justify-center bg-black/60 text-white opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer" title="Ganti foto">
                                    <i class="fas fa-camera text-sm"></i>
                                    <input type="file" name="new_testimonials[${newId}][image_file]" accept="image/*" class="hidden" onchange="previewImage(event, '${imgId}')">
                                </label>
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
                markDirty();
            }
        </script>
    @endauth

    @guest
        <script>
            // Leadership modal:
            function openLeaderModal(id) {
                const modal = document.getElementById('doctor-modal-' + id);
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    document.body.classList.add('overflow-hidden');
                }
            }

            function closeLeaderModal(id) {
                const modal = document.getElementById('doctor-modal-' + id);
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    document.body.classList.remove('overflow-hidden');
                }
            }
        </script>
    @endguest

@endsection
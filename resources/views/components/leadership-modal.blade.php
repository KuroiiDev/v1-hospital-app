@props(['doctor'])

<div id="doctor-modal-{{ $doctor->id }}" class="doctor-modal fixed inset-0 z-50 hidden items-center justify-center p-4">
    {{-- backdrop --}}
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeLeaderModal('{{ $doctor->id }}')"></div>

    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg sm:max-w-xl max-h-[85vh] overflow-y-auto">
        {{-- close button --}}
        <button type="button" onclick="closeLeaderModal('{{ $doctor->id }}')"
            class="absolute top-4 right-4 w-8 h-8 rounded-full bg-white/90 hover:bg-primary text-slate-500 hover:text-white flex items-center justify-center transition-colors z-10 shadow-sm border border-slate-100"
            title="Tutup">
            <i class="fas fa-times text-xs"></i>
        </button>

        {{-- accent top bar --}}
        <div class="h-2 bg-gradient-to-r from-primary to-secondary rounded-t-2xl"></div>

        <div class="p-6 sm:p-8">
            {{-- header: photo + name --}}
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-5 sm:gap-6 mb-6">
                <div class="w-28 h-48 sm:w-32 sm:h-52 rounded-2xl overflow-hidden ring-4 ring-primary/10 border border-slate-100 shadow-sm flex-shrink-0">
                    <img src="{{ asset('images/profile/' . $doctor->image) }}" alt="{{ $doctor->name }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="text-center sm:text-left">
                    <h3 class="text-xl sm:text-2xl font-bold text-secondary mb-1.5">{{ $doctor->name }}</h3>
                    <span class="inline-block bg-primary/10 text-primary text-xs font-semibold uppercase tracking-wider px-3 py-1 rounded-full">
                        {{ $doctor->title }}
                    </span>
                </div>
            </div>

            {{-- description --}}
            @if(!empty($doctor->text))
                <div class="border-t border-slate-100 pt-5 mb-2">
                    <p class="text-slate-500 text-sm leading-relaxed">
                        {!! nl2br(e($doctor->text)) !!}
                    </p>
                </div>
            @endif

            {{-- social links --}}
            @if(!empty($doctor->twitter) || !empty($doctor->fb) || !empty($doctor->linkedin))
                <div class="flex items-center justify-center sm:justify-start space-x-3 border-t border-slate-100 pt-5 mt-5">
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
                </div>
            @endif
        </div>
    </div>
</div>
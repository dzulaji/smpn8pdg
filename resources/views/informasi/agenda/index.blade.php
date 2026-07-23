@extends('layouts.page')

@section('title', 'Agenda Kegiatan')

@section('page_content')
    <div class="mb-8 border-b border-border pb-6">
        <h2 class="text-2xl font-bold text-ink mb-2">Kalender Akademik & Kegiatan</h2>
        <p class="text-ink-muted">Jadwal lengkap kegiatan belajar mengajar, ujian, dan acara sekolah SMP Negeri 8 Padang.</p>
    </div>

    <!-- Bagian 1: FullCalendar (Otomatis Dinamis) -->
    <div class="bg-surface-1 border border-border rounded-xl p-5 shadow-sm mb-12 overflow-hidden">
        <div id="calendar"></div>
    </div>

    <!-- Bagian 2: Timeline Agenda Terdekat -->
    <div>
        <h3 class="text-xl font-bold text-ink mb-6 border-b border-border pb-2">Daftar Agenda Terdekat</h3>

        <div class="space-y-6">
            @forelse ($agendas as $agenda)
                <div class="flex gap-4 md:gap-6 group">
                    <!-- Sisi Tanggal -->
                    <div class="flex flex-col items-center min-w-[3rem] md:min-w-[4rem]">
                        <span
                            class="text-sm font-bold text-primary uppercase">{{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->translatedFormat('M') }}</span>

                        @if ($agenda->tanggal_selesai && $agenda->tanggal_mulai != $agenda->tanggal_selesai)
                            <span class="text-lg md:text-xl font-bold text-ink leading-none mt-1 text-center">
                                {{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->format('d') }}-{{ \Carbon\Carbon::parse($agenda->tanggal_selesai)->format('d') }}
                            </span>
                        @else
                            <span class="text-2xl md:text-3xl font-bold text-ink leading-none mt-1 text-center">
                                {{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->format('d') }}
                            </span>
                        @endif

                        <!-- Garis Timeline (Sembunyikan jika item terakhir) -->
                        @if (!$loop->last)
                            <div class="w-px h-full bg-border mt-3 group-hover:bg-primary/30 transition-colors"></div>
                        @endif
                    </div>

                    <!-- Sisi Konten -->
                    <div
                        class="bg-canvas border border-border rounded-xl p-5 md:p-6 flex-grow shadow-sm hover:shadow-ghost-elevated transition-shadow pb-6 mb-2 opacity-90 hover:opacity-100">
                        <div class="flex items-center gap-2 mb-2">
                            @php
                                $badgeColor = match ($agenda->kategori) {
                                    'Pertemuan' => 'bg-yellow-100 text-yellow-700',
                                    'Kegiatan Siswa' => 'bg-blue-100 text-blue-700',
                                    'Upacara' => 'bg-red-100 text-red-700',
                                    default => 'bg-gray-100 text-gray-700',
                                };
                            @endphp
                            <span
                                class="px-2 py-0.5 {{ $badgeColor }} text-[10px] font-bold rounded uppercase tracking-wider">{{ $agenda->kategori }}</span>
                        </div>
                        <h4 class="font-bold text-lg text-ink mb-2">{{ $agenda->judul }}</h4>
                        <ul class="text-sm text-ink-muted space-y-1 mb-3">
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $agenda->waktu }}
                            </li>
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                {{ $agenda->lokasi }}
                            </li>
                        </ul>
                        <p class="text-sm text-ink-muted line-clamp-2">{!! strip_tags($agenda->deskripsi) !!}</p>
                    </div>
                </div>
            @empty
                <div class="py-12 text-center border border-dashed border-border rounded-xl bg-surface-1">
                    <p class="text-ink-muted text-sm">Belum ada agenda terdekat.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Panggil Library FullCalendar JS dari CDN -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var eventsData = {!! $eventsJson !!}; // Parsing JSON dari Laravel

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'id', // Bahasa Indonesia
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,listMonth'
                },
                buttonText: {
                    today: 'Hari Ini',
                    month: 'Bulan',
                    list: 'Daftar'
                },
                events: eventsData,
                eventDidMount: function(info) {
                    // Fitur simple tooltip saat event dihover
                    info.el.title = info.event.extendedProps.description;
                }
            });

            calendar.render();
        });
    </script>

    <!-- Sedikit custom CSS biar FullCalendar nyatu sama warna tema lu -->
    <style>
        .fc .fc-toolbar-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: var(--color-ink);
        }

        .fc .fc-button-primary {
            background-color: var(--color-primary);
            border-color: var(--color-primary);
        }

        .fc .fc-button-primary:hover {
            background-color: #d97706;
            border-color: #d97706;
        }

        .fc .fc-button-primary:not(:disabled):active,
        .fc .fc-button-primary:not(:disabled).fc-button-active {
            background-color: #b45309;
            border-color: #b45309;
        }

        .fc-theme-standard td,
        .fc-theme-standard th {
            border-color: var(--color-border);
        }

        .fc .fc-col-header-cell-cushion {
            color: var(--color-ink-muted);
            text-transform: uppercase;
            font-size: 0.75rem;
            padding: 0.5rem;
        }

        .fc-daygrid-day-number {
            color: var(--color-ink);
        }
    </style>
@endsection

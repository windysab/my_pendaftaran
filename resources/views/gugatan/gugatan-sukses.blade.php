@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-b from-court-green-50 to-white min-h-screen py-8">
    <!-- Hero Section -->
    <section class="py-6">
        <div class="container mx-auto px-4 max-w-2xl">
            <div class="text-center space-y-4">
                <div class="inline-flex items-center justify-center w-14 h-14 bg-green-100 rounded-full border-4 border-green-200 mb-2">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-bold text-court-green-800">
                    Gugatan Tersimpan!
                </h1>
                <p class="text-base text-gray-600 md:text-lg md:leading-relaxed max-w-xl mx-auto">
                    Data gugatan Anda telah berhasil disimpan dan dapat diakses kapan saja.
                </p>
            </div>
        </div>
    </section>

    <!-- Success Section -->
    <section class="py-4">
        <div class="container mx-auto px-4 max-w-2xl">
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-600 to-emerald-600 px-4 py-3">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"></path>
                        </svg>
                        <h2 class="text-lg font-bold text-white">Rincian Gugatan</h2>
                    </div>
                </div>

                <div class="p-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach($gugatan->toArray() as $key => $value)
                        @if(!empty($value))
                        <div class="bg-gray-50/50 hover:bg-gray-50 transition-colors p-3 rounded-md border border-gray-200 text-sm">
                            <div class="flex items-center gap-1 text-xs font-semibold text-gray-500 uppercase tracking-wide mb-1">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ ucfirst(str_replace('_', ' ', $key)) }}
                            </div>
                            <p class="text-gray-700 text-sm font-medium pl-5">{{ $value }}</p>
                        </div>
                        @endif
                        @endforeach
                    </div>

                    <div class="mt-6 flex flex-row justify-center gap-3">
                        <a href="{{ route('gugatan.generateWord', $gugatan->id) }}" class="inline-flex items-center justify-center gap-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download Dokumen
                        </a>
                        <button id="printButton" class="inline-flex items-center justify-center gap-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                            </svg>
                            Cetak Dokumen
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var printButton = document.getElementById('printButton');
        if (printButton) {
            printButton.addEventListener('click', function() {
                openDocument();
            });
        } else {
            console.error('Element with ID "printButton" not found.');
        }
    });

    function openDocument() {
        var fileUrl = "{{ route('gugatan.generateWord', $gugatan->id) }}";
        console.log('File URL:', fileUrl);

        var win = window.open(fileUrl, '_blank');
        if (!win) {
            alert('Pop-up blocked. Please allow pop-ups for this website.');
            return;
        }
        win.focus();

        win.onerror = function() {
            alert('Failed to load the document. Please try again.');
        };
    }
</script>
@endpush

@endsection

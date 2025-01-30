@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-b from-court-green-50 to-white">
    <!-- Hero Section -->
    <section class="py-8">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-court-green-800 mb-6">
                    Gugatan Berhasil Disimpan
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Terima kasih, data gugatan Anda telah berhasil disimpan.
                </p>
            </div>
        </div>
    </section>

    <!-- Success Section -->
    <section class="py-0">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-green-500 via-teal-400 to-blue-500 px-6 py-4">
                    <h2 class="text-xl font-semibold text-white">Data Gugatan</h2>
                </div>

                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($gugatan->toArray() as $key => $value)
                        @if(!empty($value))
                        <div class="relative w-full">
                            <label class="block text-gray-700"><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}</strong></label>
                            <p class="mt-1 block w-full border border-gray-300 bg-white text-black p-2">{{ $value }}</p>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="mt-6 text-center">
                        <a href="{{ route('gugatan.generateWord', $gugatan->id) }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-court-green-600 hover:bg-court-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-court-green-500">
                            Download Word
                        </a>
                        <button id="printButton" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Cetak
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

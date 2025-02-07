@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-b from-court-green-50 to-white">
        <!-- Hero Section -->
        <section class="py-8">
            <!-- Reduced padding from py-20 to py-16 -->
            <div class="container mx-auto px-6">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl font-bold text-court-green-800 mb-6">
                        Buat Gugatan Baru
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Isi form berikut untuk membuat gugatan baru.
                    </p>
                </div>
            </div>
        </section>

        <!-- Form Section -->
        <section class="py-0">
            <!-- Reduced padding from py-4 to py-2 -->
            <div class="container mx-auto px-6">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-green-500 via-teal-400 to-blue-500 px-6 py-4">
                        <h2 class="text-xl font-semibold text-white">Formulir Gugatan</h2>
                    </div>

                    <form method="POST" action="{{ route('gugatan.page2') }}" onsubmit="validateForm(event)"
                        id="gugatanForm" class="p-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Data Penggugat -->
                            @include('gugatan.partials.penggugat-section')

                            <!-- Data Tergugat -->
                            @include('gugatan.partials.tergugat-section')
                        </div>

                        <div class="mt-6 text-center">
                            <button type="submit"
                                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-court-green-600 hover:bg-court-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-court-green-500 transition-colors duration-200">
                                {{ isset($gugatan) ? 'Update' : 'Selanjutnya' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        @include('gugatan.partials.address-modals')
    </div>
@endsection

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include FlyonUI JavaScript -->
<script src="../node_modules/flyonui/dist/js/accordion.js"></script>

<script>
    $(document).ready(function() {
        fetchSuggestions('#kabupaten_penggugat', '#kabupaten_penggugat_suggestions', '/api/kabupaten/search');
        handleSuggestionClick('#kabupaten_penggugat_suggestions', '#kabupaten_penggugat', '#kecamatan_penggugat', '/api/kecamatan/');
        handleDropdownChange('#kecamatan_penggugat', '#desa_penggugat', '/api/desa/');

        fetchSuggestions('#kabupaten', '#kabupaten_suggestions', '/api/kabupaten/search');
        handleSuggestionClick('#kabupaten_suggestions', '#kabupaten', '#kecamatan', '/api/kecamatan/');
        handleDropdownChange('#kecamatan', '#desa', '/api/desa/');
    });

    function fetchSuggestions(inputSelector, suggestionsSelector, apiUrl) {
        $(inputSelector).on('input', function() {
            var query = $(this).val();
            if (query.length > 2) {
                $.get(apiUrl, {
                    query: query
                }, function(data) {
                    console.log('Suggestions data:', data); // Tambahkan logging
                    $(suggestionsSelector).empty();
                    data.forEach(function(item) {
                        $(suggestionsSelector).append(`<a href="#" class="list-group-item list-group-item-action suggestion-item" data-id="${item.id}" data-name="${item.name}">${item.name}</a>`);
                    });
                }).fail(function() {
                    console.error('Error fetching suggestions:', arguments); // Tambahkan logging
                });
            } else {
                $(suggestionsSelector).empty();
            }
        });
    }

    function handleSuggestionClick(suggestionsSelector, inputSelector, nextSelector, nextApiUrl) {
        $(document).on('click', suggestionsSelector + ' .suggestion-item', function(e) {
            e.preventDefault();
            var name = $(this).data('name');
            var id = $(this).data('id');
            $(inputSelector).val(name);
            $(suggestionsSelector).empty();

            // Fetch and populate next dropdown based on selected item
            $(nextSelector).empty().append('<option value="">Pilih</option>');
            $.get(nextApiUrl + id, function(data) {
                console.log('Next dropdown data:', data); // Tambahkan logging
                $(nextSelector).append(data.map(function(item) {
                    return `<option value="${item.id}" data-id="${item.id}">${item.name}</option>`;
                }));
            }).fail(function() {
                console.error('Error fetching next dropdown data:', arguments); // Tambahkan logging
            });
        });
    }

    function handleDropdownChange(dropdownSelector, nextSelector, nextApiUrl) {
        $(dropdownSelector).change(function() {
            var selectedId = $(dropdownSelector + ' option:selected').data('id');
            $(nextSelector).empty().append('<option value="">Pilih</option>');
            $.get(nextApiUrl + selectedId, function(data) {
                console.log('Next dropdown data:', data); // Tambahkan logging
                $(nextSelector).append(data.map(function(item) {
                    return `<option value="${item.id}">${item.name}</option>`;
                }));
            }).fail(function() {
                console.error('Error fetching next dropdown data:', arguments); // Tambahkan logging
            });
        });
    }

    function openAddressModal() {
        $('#tergugatModal').modal('show');
    }

    function openPenggugatAddressModal() {
        $('#penggugatModal').modal('show');
    }
</script>

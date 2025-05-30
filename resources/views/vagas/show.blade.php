<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaga') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="vaga-detalhes">
                        <h1>{{ $vaga->nome }}</h1>
                        <p><strong>Descrição:</strong> {{ $vaga->descricao }}</p>
                        <p><strong>Salário:</strong> R$ {{ number_format($vaga->salario, 2, ',', '.') }}</p>
                        <p><strong>Publicado em:</strong> {{ $vaga->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>
</x-app-layout>

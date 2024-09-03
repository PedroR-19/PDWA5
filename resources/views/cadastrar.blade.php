<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar País') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf <!-- token de formulario -->
                        <!-- Idioma -->
                        <div>
                            <x-input-label for="idioma" :value="__('Idioma')" />
                            <x-text-input id="idioma" class="block mt-1 w-full" type="text" name="idioma" :value="old('idioma')" required autofocus />
                            <x-input-error :messages="$errors->get('idioma')" class="mt-2" />
                        </div>
                        <!-- IDH -->
                        <div class="mt-4">
                            <x-input-label for="idh" :value="__('IDH')" />
                            <x-text-input id="idh" class="block mt-1 w-full" type="number" name="idh" :value="old('idh')" required min="0" max="1" step="0.01" />
                            <x-input-error :messages="$errors->get('idh')" class="mt-2" />
                        </div>

                        <!-- Títulos de Copa do Mundo -->
                        <div class="mt-4">
                            <x-input-label for="titulos_copa_mundo" :value="__('Títulos de Copa do Mundo')" />
                            <x-text-input id="titulos_copa_mundo" class="block mt-1 w-full" type="number" name="titulos_copa_mundo" :value="old('titulos_copa_mundo')" required min="0" step="1" />
                            <x-input-error :messages="$errors->get('titulos_copa_mundo')" class="mt-2" />
                        </div>

                        <!-- populacao -->
                        <div class="mt-4">
                            <x-input-label for="populacao" :value="__('Populacao')" />
                            <x-text-input id="populacao" class="block mt-1 w-full" type="number" name="populacao" :value="old('populacao')" required />
                            <x-input-error :messages="$errors->get('populacao')" class="mt-2" />
                        </div>
                        <!-- Extensão Territorial -->

                        <div class="mt-4">
                            <x-input-label for="tamanho" :value="__('Extensão Territorial (KM²)')" />
                            <x-text-input id="tamanho" class="block mt-1 w-full" type="number" name="tamanho" :value="old('tamanho')" required step="0.01" />
                            <x-input-error :messages="$errors->get('tamanho')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Confirmar') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

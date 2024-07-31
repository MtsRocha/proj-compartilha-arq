@extends('layouts.app')

@section('title', 'Listagem de Arquivos')

@section('content')
    

    <h1 class="text-xl font-bold ">Listagem de Arquivos  <a class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-1 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" href="{{ route('archives.create')}}">+</a></h1>

    
    <form class="max-w-md mx-auto">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" placeholder="Pesquisar Arquivos" required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Pesquisar</button>
        </div>
    </form>

    <div class="relative overflow-x-auto px-6 py-10">  
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome do Arquivo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipo do Arquivo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Editar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Detalhes
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Inscrição
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Imagem de Árvore
                    </th>
                    <td class="px-6 py-4 flex">
                        Imagem
                    </td>
                    <td class="px-2 py-1 text-xs rounded-full bg-green-200 text-center w-2 h-4">
                        Editar
                    </td>                    
                    <td class="px-2 py-1 text-xs rounded-full bg-yellow-200 text-center w-2 h-4">
                        Detalhes
                    </td>
                    <td class="px-6 py-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Livro em pdf
                    </th>
                    <td class="px-6 py-4">
                        Pdf
                    </td>
                    <td class="px-2 py-1 text-xs rounded-full bg-green-200 text-center w-2 h-4">
                        Editar
                    </td>                    
                    <td class="px-2 py-1 text-xs rounded-full bg-yellow-200 text-center w-2 h-4">
                        Detalhes
                    </td>
                    <td class="px-6 py-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Instalador do windows
                    </th>
                    <td class="px-6 py-4">
                        Instalador
                    </td>
                    <td class="px-2 py-1 text-xs rounded-full bg-green-200 text-center w-2 h-4">
                        Editar
                    </td>                    
                    <td class="px-2 py-1 text-xs rounded-full bg-yellow-200 text-center w-2 h-4">
                        Detalhes
                    </td>
                    <td class="px-6 py-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
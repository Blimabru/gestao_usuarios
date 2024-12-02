@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
@include('admin.users.partials.breadcrumb')

@can('is_owner', $user)
<div class="py-6">
    <span class="p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">Este é o seu perfil!</span>
</div>
@endcan

<div class="py-6">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
        Detalhes do Usuário {{ $user->name }}
    </h2>
</div>

<ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 mb-6">
    <li>Nome: {{ $user->name }}</li>
    <li>E-mail: {{ $user->email }}</li>
</ul>
<x-alert />

@can('is_admin')
<form action="{{ route('users.destroy', $user->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit"
        class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button>
</form>
@endcan
@endsection
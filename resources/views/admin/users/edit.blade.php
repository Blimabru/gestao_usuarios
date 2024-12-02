@extends('admin.layouts.app')

@section('title', 'Editar o Usuário')

@section('content')
@include('admin.users.partials.breadcrumb')

@can('is_owner', $user)
<div class="py-6">
    <span class="p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">Este é o seu perfil!</span>
</div>
@endcan

<div class="py-6">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
        Editar o Usuário {{ $user->name }}
    </h2>
</div>

<div class="py-6">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @method('put')
        @include('admin.users.partials.form')
    </form>
</div>
@endsection
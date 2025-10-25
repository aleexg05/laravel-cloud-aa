@extends('layouts.master')

@section('title', 'Llista d’estudiants')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Llista d’estudiants</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Adreça</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->address }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('edit', $student->id) }}" class="btn btn-success btn-sm">Editar</a>

                            <form action="{{ route('delete', $student->id) }}" method="POST" onsubmit="return confirm('Segur que vols eliminar aquest estudiant?')">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No hi ha estudiants registrats.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

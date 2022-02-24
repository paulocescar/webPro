@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Professionals') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    @forelse($professionals as $professional)
                        <p>{{$professional->name}}</p>
                    @empty
                        <p>Nenhum profissional cadastrado.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

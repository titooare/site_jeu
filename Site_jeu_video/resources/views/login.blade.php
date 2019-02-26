@extends('layouts')
@section('card')
    @component('card')
        @slot('title')
            @lang('Connexion')
        @endslot
        <form method="POST" action="">
            {{ csrf_field() }}
            @include('form-group', [
                'title' => __('Adresse email'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                ])
            @include('form-group', [
                'title' => __('Mot de passe'),
                'type' => 'password',
                'name' => 'password',
                'required' => true,
                ])    
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                <label class="custom-control-label" for="remember"> @lang('Se rappeler de moi')</label>
            </div>
            @component('button')
                @lang('Connexion')
            @endcomponent
            <a class="btn btn-link" href="">
                @lang('Mot de passe oublié ?')
            </a>
        </form>
    @endcomponent            
@endsection

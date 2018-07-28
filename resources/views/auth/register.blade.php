@extends('layouts.app')

@section('content')

<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Registro" class="my-3"> 
                
                @if ($errors->any())
                    <b-alert show variant="danger" dismissible>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>                    
                    </b-alert>
                @else
                    <b-alert>
                        Por Favor Ingrese sus Datos:
                    </b-alert>
                @endif

                <b-form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <b-form-group label="Nombre"
                                label-for="name">

                                <b-form-input id="name"
                                              type="text"
                                              name="name"
                                              value="{{ old('name') }}"
                                              required
                                              autofocus>
                                </b-form-input>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </b-form-group>

                    <b-form-group label="Correo Electronico"
                                label-for="email"
                                description="Nunca Compartimos Tu Correo">

                                <b-form-input id="email"
                                              type="email"
                                              name="email"
                                              value="{{ old('email') }}"
                                              required
                                              autofocus
                                              placeholder="example@hotmail.com">
                                </b-form-input>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </b-form-group>

                    <b-form-group label="Contraseña:"
                                label-for="password"
                                description="Nunca Compartimos Tu Contraseña">

                                <b-form-input id="password"
                                              type="password"
                                              name="password"
                                              value="{{ old('password') }}"
                                              required>
                                </b-form-input>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </b-form-group>

                    <b-form-group label="Confirmar Contraseña:"
                                label-for="password-confirm">

                                <b-form-input id="password-confirm"
                                              type="password"
                                              name="password_confirmation"
                                              required>
                                </b-form-input>
                    </b-form-group>

                    <b-button type="submit" href="" variant="primary">
                       Confirmar Registro
                   </b-button>

                   <b-button href="{{ route('login') }}" variant="link">
                       Ya estas registrado?
                   </b-button>

                </b-form>

            </b-card>
        </b-col>
    </b-row>
</b-container>

@endsection

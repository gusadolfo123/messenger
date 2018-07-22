@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de Sesion">
                <b-alert show>
                    Por Favor Ingrese sus Datos:
                </b-alert>
                
                <b-form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

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

                    <b-form-group>
                        <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                           Recordarme
                        </b-form-checkbox>
                    </b-form-group>
                    
                   <b-button type="submit" href="" variant="primary">
                       Ingresar
                   </b-button>

                   <b-button href="{{ route('password.request') }}" variant="link">
                       Olvidaste tu Contraseña?
                   </b-button>
                
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection

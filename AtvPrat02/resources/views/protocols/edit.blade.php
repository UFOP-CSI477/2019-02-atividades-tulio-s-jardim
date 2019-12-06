@extends('layouts.app', ['title' => __('Protocolos')])

@section('content')
    @include('users.partials.header', ['title' => __('Editar Protocolo')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Gerenciamento de Protocolos') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('protocols.index') }}" class="btn btn-sm btn-primary">{{ __('Voltar à lista') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('protocols.update', $request->id) }}" autocomplete="off">
                            @csrf
                            @method('put')
                            <h6 class="heading-small text-muted mb-4">{{ __('Dados do protocolo') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('subject') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-subject">{{ __('Assunto') }}</label>
                                    <select name="subject" id="input-subject" class="form-control form-control-alternative{{ $errors->has('subject') ? ' is-invalid' : '' }}" value="{{ $request->subject_id }}" required autofocus>
                                        @foreach ($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('subject'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('Data') }}</label>
                                    <input type="date" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ $request->date }}" value="{{ old('date') }}" required>

                                    @if ($errors->has('date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">{{ __('Descrição') }}</label>
                                    <textarea name="description" id="input-description" class="form-control form-control-alternative" rows="3" value="{{ __('Descrição') }}">{{ $request->description }}</textarea>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Editar Protocolo') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
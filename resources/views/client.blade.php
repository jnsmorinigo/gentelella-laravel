@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('views/client.titleCard')</div>

                <div class="card-body">
                    <form action="{{url('/oauth/clients')}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">@lang('views/client.labelName')</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="redirect" class="col-md-4 col-form-label text-md-right">@lang('views/client.labelRedirect')</label>

                            <div class="col-md-6">
                                <input id="redirect" type="text" class="form-control @error('redirect') is-invalid @enderror" name="redirect" value="{{ old('redirect') }}" required autocomplete="redirect" autofocus>

                                @error('redirect')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('views/client.buttonSubmit')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Secret</th>
                      <th scope="col">Redirect</th>
                      <th scope="col">Created at</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td scope="row">{{$client->id}}<td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->secret}}</td>
                        <td>{{$client->redirect}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</div>
@endsection
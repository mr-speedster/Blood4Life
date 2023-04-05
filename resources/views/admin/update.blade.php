@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Donation Details') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.edit.data',['id'=>$donation->id]) }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Donor Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" value="{{$donation->donor_name}}" type="text" class="form-control" name="donor_name" required >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="group" class="col-md-4 col-form-label text-md-end">{{ __('Blood Group') }}</label>
                            <div class="col-md-6">
                                <input id="group" value="{{$donation->blood_group}}" type="text" class="form-control" name="blood_group" required >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Date of Donation') }}</label>
                            <div class="col-md-6">
                                <input id="date" value="{{$donation->date_of_donation}}" type="date" class="form-control" name="date_of_donation" required >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('Quantity (in ml)') }}</label>
                            <div class="col-md-6">
                                <input id="quantity" value="{{$donation->quantity}}" type="text" class="form-control" name="quantity" required >
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

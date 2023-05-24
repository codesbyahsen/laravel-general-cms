@extends('admin.layout.app')

@section('title', 'Edit Contact')

@section('page-content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Contact </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.contacts') }}">Contacts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Contact</li>
                </ol>
            </nav>
        </div>


        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="pb-3">
                            <a href="javascript:void(0)" onclick="history.back()" title="Back" class="mb-3">
                                <i class="mdi mdi-arrow-left"></i>
                              </a>
                        </div>
                        {{-- <h4 class="card-title">Default form</h4> --}}
                        {{-- <p class="card-description"> Basic form layout </p> --}}
                        <form class="forms-sample" action="{{ route('admin.contacts.update', encrypt($contact->id)) }}"
                            method="POST">
                            @csrf @method('PUT')
                            <div class="form-group row align-items-center">
                                <span class="col-sm-1 col-1 d-block"><i class="mdi mdi-image"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="file" name="avatar" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" name="avatar" class="form-control file-upload-info"
                                            id="avatar" disabled placeholder="Upload Avatar">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                    @error('avatar')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <span class="col-sm-1 col-1 d-block"><i class="mdi mdi-account"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Name" value="{{ old('name', $contact?->name) }}" />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <span class="col-sm-1 col-1 d-block"><i class="mdi mdi-email"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="Email" value="{{ old('email', $contact?->email) }}" />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <span class="col-sm-1 col-1 d-block"><i class="mdi mdi-phone"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone" value="{{ old('phone', $contact?->phone) }}" />
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <span class="col-sm-1 col-1 d-block"><i class="mdi mdi-cellphone"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="mobile" class="form-control" id="mobile"
                                        placeholder="Mobile" value="{{ old('mobile', $contact?->mobile) }}" />
                                    @error('mobile')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <span class="col-sm-1 col-1 d-block"><i class="mdi mdi-map-marker"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="address_line_one" class="form-control" id="addressLineOne"
                                        placeholder="Address line 1" value="{{ old('address_line_one', $contact?->address_line_one) }}" />
                                    <small class="text-muted">Street address, P.O. box, company name</small>
                                    @error('address_line_one')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <span class="col-sm-1 col-1 d-block"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="address_line_two" class="form-control" id="addressLineTwo"
                                        placeholder="Address line 2" value="{{ old('address_line_two', $contact?->address_line_two) }}" />
                                    <small class="text-muted">Apartment, suite, unit building, floor, etc.</small>
                                    @error('address_line_two')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <span class="col-sm-1 col-1 d-block"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="city" class="form-control" id="city"
                                        placeholder="City" value="{{ old('city', $contact?->city) }}" />
                                    @error('city')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <span class="col-sm-1 col-1 d-block"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="state" class="form-control" id="state"
                                        placeholder="State" value="{{ old('state', $contact?->state) }}" />
                                    @error('state')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <span class="col-sm-1 col-1 d-block"></i></span>
                                <div class="col-sm-5 col-11">
                                    <input type="text" name="country" class="form-control" id="country"
                                        placeholder="Country" value="{{ old('country', $contact?->country) }}" />
                                    @error('country')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <span class="col-1 d-sm-none d-xs-none d-block"></i></span>
                                <div class="col-sm-2 col-11">
                                    <input type="text" name="post_code" class="form-control mt-3 mt-sm-0 mt-xs-0" id="post_code"
                                        placeholder="Zip/Postal code" value="{{ old('post_code', $contact?->post_code) }}" />
                                    @error('post_code')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <span class="col-sm-1 col-1 d-block"><i class="mdi mdi-cake"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="birthday" class="form-control" id="birthday"
                                        placeholder="Birthday" value="{{ old('birthday', $contact?->birthday) }}" />
                                    @error('birthday')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <span class="col-sm-1 col-1 d-block"><i class="mdi mdi-link"></i></span>
                                <div class="col-sm-7 col-11">
                                    <input type="text" name="website" class="form-control" id="website"
                                        placeholder="Website" value="{{ old('website', $contact?->website) }}" />
                                    @error('website')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <span class="col-sm-1 col-1 d-block"><i class="mdi mdi-note"></i></span>
                                <div class="col-sm-7 col-11">
                                    <textarea type="text" name="note" class="form-control" id="note" rows="4" placeholder="Note">{{ old('note', $contact?->note) }}</textarea>
                                    @error('note')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row pt-3 pr-3 float-right">
                                <a href="{{ route('admin.contacts') }}"
                                    class="btn btn-outline-secondary btn-md mr-2">Cancel </a>
                                <button type="submit" class="btn btn-primary btn-icon-text ml-auto">
                                    <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

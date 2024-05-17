@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
           
                <div class="card-body">
                    <h1 class="py-5">About {{ $pet->name }}</h1>
                    <div class="form-group">
                   
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pet.fields.photos') }}
                                    </th>
                                    <td>
                                        @foreach($pet->photos as $key => $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $media->getUrl('thumb') }}">
                                            </a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pet.fields.animal') }}
                                    </th>
                                    <td>
                                        {{ $pet->animal->animal ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pet.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $pet->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pet.fields.breed') }}
                                    </th>
                                    <td>
                                        {{ $pet->breed }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pet.fields.size') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Pet::SIZE_SELECT[$pet->size] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pet.fields.age') }}
                                    </th>
                                    <td>
                                        {{ $pet->age }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pet.fields.gets_along_with') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Pet::GETS_ALONG_WITH_RADIO[$pet->gets_along_with] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pet.fields.is_immunized') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $pet->is_immunized ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="mt-5" href="{{ route('frontend.pets.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
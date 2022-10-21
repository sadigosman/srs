
    <div class="form-group row">
 
        <div class="col-md-4">
            <div class="form-group">
                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }} <span class="text-danger">*</span></label>

                <select wire:model="selectedCountry" class="form-control" name="country_id">
                    <option value="" selected>Choose country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{-- </div> --}}

        <div class="col-md-4">
            <div class="form-group">
                @if (!is_null($selectedCountry))
            {{-- <div class="form-group row"> --}}
            
                <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }} <span class="text-danger">*</span></label>

                <select wire:model="selectedState" class="form-control" name="state_id">
                    <option value="" selected>Choose state</option>
                    @foreach($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
                @endif
            </div>
        </div>
        {{-- </div> --}}

        <div class="col-md-4">
            <div class="form-group">
                @if (!is_null($selectedState))
                {{-- <div class="form-group row"> --}}
                
                    <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }} <span class="text-danger">*</span></label>

                    <select wire:model="selectedCity" class="form-control" name="city_id">
                        <option value="" selected>Choose city</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                @endif
            </div>
        </div>
           {{-- </div> --}}
    </div>


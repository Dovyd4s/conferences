<div>
    <label for="title-input">{{__('all.title')}}</label>
    <input id="title-input" type="text" name="title" value="{{old('title', optional($conference ?? null)->title)}}">
</div>
<div>
    <label for="description-input">{{__('all.description')}}</label>
    <textarea id="description-input" name="description">{{old('description', optional($conference ?? null)->description)}}</textarea>
</div>
<div>
    <label for="date-input">{{__('all.conference date')}}</label>
    <input id="date-input" type="text" class="datepicker" name="dateOfConference" value="{{old('dateOfConference', optional($conference ?? null)->dateOfConference)}}">
</div>
<div>
    <label for="country-input">{{__('all.country')}}</label>
    <input id="country-input" type="text" name="country" value="{{old('country', optional($conference ?? null)->country)}}">
</div>
<div>
    <label for="city-input">{{__('all.city')}}</label>
    <input id="city-input" type="text" name="city" value="{{old('city', optional($conference ?? null)->city)}}">
</div>
<div>
    <label for="address-input">{{__('all.address')}}</label>
    <input id="address-input" type="text" name="address" value="{{old('address', optional($conference ?? null)->address)}}">
</div>
@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li style="color: red">{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

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

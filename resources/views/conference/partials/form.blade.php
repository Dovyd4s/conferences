<div>
    <label for="title-input" >Title</label>
    <input id="title-input" type="text" name="title" value="{{old('title', optional($conference ?? null)->title)}}">
</div>
<div>
    <label for="description-input">Description</label>
    <textarea id="description-input" name="description">{{old('description', optional($conference ?? null)->description)}}</textarea>
</div>
<div>
    <label for="date-input">Date of Conference</label>
    <input id="date-input" type="date" name="dateOfConference" value="{{old('dateOfConference', optional($conference ?? null)->dateOfConference)}}">
</div>
<div>
    <label for="address-input">Address</label>
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

<select class="form-control select2" name="brand">
    @foreach($brands as $brand)
        <option value="{{$brand->id}}">{{$brand->name ?? '' }}</option>
    @endforeach
</select>

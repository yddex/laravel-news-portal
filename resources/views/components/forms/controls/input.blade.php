<div class="form-group">
    <label for="author">{{$label}}</label>
    <input type="{{$type}}" id="{{$id}}" name="{{$name}}" value="{{ $value ?? old($name) }}" class="form-control">
</div>

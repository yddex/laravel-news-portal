<div class="form-group">
    <label for="description">{{$label}}</label>
    <textarea class="form-control" id="{{$id}}" name="{{$name}}">{{ $value ?? old($name) }}</textarea>
</div>

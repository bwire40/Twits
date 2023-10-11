<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{route('twit.create')}}" method="post">
        @csrf
    <div class="mb-3">
        <label for="idea"></label><textarea name="idea" class="form-control" id="idea" rows="3"></textarea>
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark"> Share </button>
    </div>
    </form>
</div>

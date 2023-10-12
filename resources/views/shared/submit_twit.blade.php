<h4> Share yours twits </h4>
<div class="row">
    <form action="{{route('twit.create')}}" method="post">
        @csrf
    <div class="mb-3">
        <label for="twit"></label><textarea name="twit" class="form-control" id="twit" rows="3"></textarea>
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark"> Share </button>
    </div>
    </form>
</div>

@if (Session::has('success'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="mb-0">{{ Session::get('success') }}</p>
        </div>
    </div>
</div>
@elseif(Session::has('error'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="mb-0">{{ Session::get('error') }}</p>
        </div>
    </div>
</div>
@endif
@if (isset($errors) && count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="mb-0">{{ $error }}</p>
        </div>
    </div>
    @endforeach
@endif
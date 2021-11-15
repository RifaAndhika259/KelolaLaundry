@extends ('admin.layouts.master')

@section ('content')
<!-- tah ieu copas baris row nepi ka end row -->



<!-- Modal -->
<h1>Edit Product</h1>
<br>
<form action="{{ URL::to('admin',$product->id)}}/update" method="POST">
    @csrf

    @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }} <br />
        @endforeach
    </div>
    @endif
    <div class="form-group">
        <label for="object">Nama Barang</label>
        <input required name="object" type="text" class="form-control" id="object" aria-describedby="object"
            value="{{$product->object}}">
    </div>

    <div class="form-group">
        <label for="price">Harga</label>
        <input required name="price" type="number" class="form-control" id="price" aria-describedby="price"
            value="{{$product->price}}">
    </div>




    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="submit" class="btn btn-danger" a href="{{url('/admin/product')}}">Batal</a></button>
    </div>
</form>

</div>
</div>
</div>
</div>
@endsection

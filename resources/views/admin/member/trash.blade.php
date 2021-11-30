@extends('admin.layouts.master')
@section('content')

	<div class="container">

		<div class="card mt-5">
			<div class="card-header text-center">
				Data Member
			</div>
			<div class="card-body">

				<a href="{{ url('admin/member') }}">Data Member</a>
				|
				<a href="{{ url('admin/member/trash') }}" class="btn btn-sm btn-primary">Tong Sampah</a>

				<br/>
				<br/>

				<a href="{{ url('admin/member/kembalikan_semua') }}">Kembalikan Semua</a>
				|
				<a href="{{ url('admin/member/hapus_permanen_semua') }}">Hapus Permanen Semua</a>
				<br/>
				<br/>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
							<th>phone</th>
							<th width="30%">email</th>
						</tr>
					</thead>
					<tbody>
						@foreach($member as $m)
						<tr>
							<td>{{ $m->name }}</td>
							<td>{{ $m->telephone }}</td>
							<td>{{ $m->email }}</td>
							<td>
								<a href="{{ url('admin/member/kembalikan/'.$m->id) }}" class="btn btn-success btn-sm">Restore</a>
								<a href="{{ url('admin/member/hapus_permanen/' .$m->id) }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@if(isset(Auth::user()->email))
    @extends('layout/admin_dashboard')
@else
    <script>window.location="/admin";</script>
@endif 
    
@section('title', 'Admin Kepakaran')

@section('main')
    @if(isset(Auth::user()->email))
        <!-- MAIN -->
        <div class="col">
            <div class="single-pricing">
                <div class="single-pricing-content">
                    <h5>Kepakaran</h5>
                    @if (session('status'))
                        <div class='alert alert-success'>
                            {{ session('status')}}
                        </div>
                    @endif
                    <a href="/admin/successlogin/kepakaran/create" class="btn btn-primary mb-3 btn-sm" style="color:#fff; font-size:14px">Tambah Data</a>

                    @foreach( $expertises as $expertise )
                        <div>
                            <a href="/kepakaran/detail/{{ $expertise->slug }}">{{ $expertise->name }} <br><span class="span">{{ $expertise->nip }}</span></a>
                        </div>
                        <div class="row mb-3 ml-1">
                            <a href="/admin/successlogin/kepakaran/{{ $expertise->id }}/edit" class="btn btn-outline-info btn-sm mr-1" style="color:#000; font-size:10px">Edit</a>
                            
                            <form action="/admin/successlogin/kepakaran/{{ $expertise->id }}" method="post">
                                @csrf
                                @method('DELETE') 
                                <button class="btn btn-outline-danger btn-sm" style="color:#000; font-size:10px">Delete</button>
                            </form>
                        </div>
                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $expertises->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    @else
        <script>window.location="/admin";</script>
    @endif

@endsection
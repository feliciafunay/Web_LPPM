@if(isset(Auth::user()->email))
    @extends('layout/admin_dashboard')
@else
    <script>window.location="/admin";</script>
@endif 
    
@section('title', 'Admin Pengabdian')

@section('main')
    
    @if(isset(Auth::user()->email))
        <!-- MAIN -->
        <div class="col">
            <div class="mt-5">
                <div id="chart"></div>
            </div>
            <div class="single-pricing">
                <div class="single-pricing-content">
                    <h5>Pengabdian</h5>
                    @if (session('status'))
                        <div class='alert alert-success'>
                            {{ session('status')}}
                        </div>
                    @endif
                    <a href="/admin/successlogin/pengabdian/create" class="btn btn-primary mb-3 btn-sm" style="color:#fff; font-size:14px">Tambah Data</a>

                    @foreach( $comserv as $cs )
                    <div>
                        <a href="/pengabdian/{{ $cs->slug }}">{{ $cs->title }} <br><span class="span">{{ $cs->date }} By {{ $cs->author }}</span></a>
                    </div>
                    <div class="row mb-3 ml-1">
                        <a href="/admin/successlogin/pengabdian/{{ $cs->id }}/edit" class="btn btn-outline-info btn-sm mr-1" style="color:#000; font-size:10px">Edit</a>
                        
                        <form action="/admin/successlogin/pengabdian/{{ $cs->id }}" method="post">
                            @csrf
                            @method('DELETE') 
                            <button class="btn btn-outline-danger btn-sm" style="color:#000; font-size:10px">Delete</button>
                        </form>
                    </div>
                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $comserv->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    @else
        <script>window.location="/admin";</script>
    @endif

    @section('script')
        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script>
            Highcharts.chart('chart', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Jumlah Berita Pengabdian, 2018-2020'
                },
                // subtitle: {
                //     text: 'Source: WorldClimate.com'
                // },
                xAxis: {
                    categories: [
                        '2018',
                        '2019',
                        '2020'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Berita'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Pengabdian',
                    data: [{{$countCS18}}, {{$countCS19}}, {{$countCS20}}]

                }]
            });
        </script>

    @endsection
@endsection
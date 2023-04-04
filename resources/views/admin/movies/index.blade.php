@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Filmai</h3>
                <a href="{{ route('admin.Motorcycles.create') }} " class="btn btn-app">
                  <i class="fas fa-plus"></i> Naujas
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{Str::ucfirst(trans('app.image'))}}</th>
                            <th>{{Str::ucfirst(trans('app.title'))}}</th>
                            <th>{{Str::ucfirst(trans('app.date'))}}</th>
                            <th>{{Str::ucfirst(trans('app.description'))}}</th>
                            <th>{{Str::ucfirst(trans('app.runtime'))}}</th>
                            <th>{{Str::ucfirst(trans('app.rating'))}}</th>
                            <th>{{Str::ucfirst(trans('app.genres'))}}</th>
                            <th>{{Str::ucfirst(trans('app.model'))}}</th>
                            <th>{{Str::ucfirst(trans('app.created_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.updated_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.actions'))}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Motorcycles as $Motorcycle)
                        <tr>
                                <td>{{ ($Motorcycle->id ?? '')}} </td>
                                <td>
                                    <img width="100" src="{{ asset('storage/images/'.($Motorcycle->image ?? "noimage.jpg"))}} ">
                                </td>
                                <td> {{ ($Motorcycle->title ?? '') }} </td>
                                <td> {{ ($Motorcycle->release_date ?? '') }} </td>
                                <td> {{ ($Motorcycle->description ?? '') }} </td>
                                <td> {{ ($Motorcycle->runtime ?? '') }} </td>
                                <td> {{ ($Motorcycle->rating ?? '') }} </td>
                                <td>
                                     @foreach($Motorcycle->genres as $genre)
                                        {{$genre->name ?? ''}}
                                     @endforeach 
                                </td>
                                <td>
                                     @foreach($Motorcycle->model as $actor)
                                        <a href="{{route('admin.model.edit', $actor)}}">
                                            {{$actor->fullName ?? ''}}
                                        </a>
                                     @endforeach 
                                </td>
                                <td> {{ ($Motorcycle->created_at ?? '') }} </td>
                                <td> {{ ($Motorcycle->updated_at ?? '') }} </td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('admin.Motorcycles.edit', $Motorcycle) }} ' type="button" class="btn btn-info">Keisti</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{ route('admin.Motorcycles.destroy', $Motorcycle) }} ">Naikinti</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>{{Str::ucfirst(trans('app.image'))}}</th>
                            <th>{{Str::ucfirst(trans('app.title'))}}</th>
                            <th>{{Str::ucfirst(trans('app.date'))}}</th>
                            <th>{{Str::ucfirst(trans('app.description'))}}</th>
                            <th>{{Str::ucfirst(trans('app.runtime'))}}</th>
                            <th>{{Str::ucfirst(trans('app.rating'))}}</th>
                            <th>{{Str::ucfirst(trans('app.genres'))}}</th>
                            <th>{{Str::ucfirst(trans('app.model'))}}</th>
                            <th>{{Str::ucfirst(trans('app.created_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.updated_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.actions'))}}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection
